<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Bodega;
use App\Models\Sale;
use App\Models\SaleDetail;
use App\Models\SaleDetailBodega;
use Carbon\Carbon;
use App\Models\Purchase;
use App\Models\Provider;
use DB;

class CartController extends Controller{



public function __construct(){


        
    $this->middleware('auth');
    $this->middleware('can:cart.list')->only(['cartList']);
    $this->middleware('can:cart.create')->only(['addToCart','saleCart']);
    $this->middleware('can:cart.list2')->only(['productList']);
    $this->middleware('can:cart.create2')->only(['addToProduct','saleProducto']);
    $this->middleware('can:palmeras.list')->only(['palmerasList']);
    $this->middleware('can:cart.palmeras')->only(['addToPalmeras','salePalmeras']);
   
    $this->middleware('can:cart.list4')->only(['comprasList']);
    $this->middleware('can:palmeras.compras')->only(['addToCompras','saleCompras']);

   

    }


    public function cambioPalmeras()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('product.cambio', compact('cartItems'));
    }


    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }


    public function cambiarSala(Sale $sale,$producto)
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        $saleDetails = $sale->saleDetails;

        
        $most = DB::table('products')->where('id',$producto)
        ->select('barcode','name')
        ->get();
        return view('sale.cambiarSala', compact('cartItems','sale','most','producto'));
    }



    public function cambiarSalaPalmeras(Sale $sale,$producto)
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        $saleDetails = $sale->saleDetails;

        
        $most = DB::table('bodegas')->where('id',$producto)
        ->select('barcode','name')
        ->get();
        return view('sale.cambiarSalaPalmeras', compact('cartItems','sale','most','producto'));
    }


    public function productList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('producto', compact('cartItems'));
    }


    public function palmerasList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('palmeras', compact('cartItems'));
    }


    public function comprasList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('compras', compact('cartItems'));
    }


    public function salaVentaPrat()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('salaVentaPrat', compact('cartItems'));
    }


    public function salaVentaPalmeras()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('salaVentaPalmeras', compact('cartItems'));
    }




    public function addTocambio(Request $request)
    {
        $producto = Product::where('barcode', $request->barcode)->first();

        if($producto->stock <= 0 ){
            session()->flash('success', 'Sin stock del producto');

            return redirect()->route('product.cambioPalmeras');
        }


        \Cart::add([
            'id' => $producto->id,
            'name' => $producto->name,
            'price' => $producto->price,
            
            'quantity' => 1,
            'attributes' => array(
                'image' => $producto->image,
            )
        ]);







        session()->flash('success', 'Producto Agregado con exito !');

        return redirect()->route('product.cambioPalmeras');
    }




    public function saleCambio(){

        $cartItems = \Cart::getcontent();
        $cartItems = $cartItems->toArray();


        foreach ($cartItems as $carItem) {

            $producto = Product::find($carItem['id']);
           // $bodega = Bodega::find($cartItems);
            $stock = $producto->stock - $carItem['quantity'];

          //  return dd($cartItems);

            if($stock <= 0 ){
                session()->flash('success', 'La cantidad supera el stock del producto');

                return redirect()->route('product.cambioPalmeras');
            }

            $producto->update(['stock' => $stock]);

            $total = DB::table('bodegas')
            ->where('barcode',$producto->barcode)
            ->select('stock')->get();

         //   return dd($total);

            $sum = $total[0]->stock + $carItem['quantity'];


           // return dd($sum);

            $bodegas = DB::table('bodegas')
            ->where('barcode',$producto->barcode)
            ->update(['stock'=> $sum ]);
        

            

        }


        
        
        $saleTraslado = sale::create(
            [
            'user_id' => auth()->id(),
            'date' => Carbon::now('America/Santiago')->format('Y-m-d H:i:s'),
            'iva' => (\Cart::getTotal() * 0.19),
            'total' => \Cart::getTotal(),
            'totalSinDesc'=>\Cart::getTotal(),
            'status' => 10
           
            ],
        );

        foreach ($cartItems as $carItem) {

            $producto = Product::find($carItem['id']);

            $traslado = DB::table('sale_details')->insert(
                ['sale_id' =>$saleTraslado->id, 'product_id'=> $carItem['id'], 'quantity' => $carItem['quantity'],'precio'=>$carItem['price'],'descuento'=> 0]
            );

        }

        


        \Cart::clear();
        return redirect()->route('product.cambioPalmeras')->with('Mensaje','Traslado de productos realizado con éxito');
    }

    

    public function addToCambiarSala(Request $request,$sale,$producto)
    {
        $product = Product::where('barcode', $request->barcode)->first();


      // return dd($sale);
        if($product->stock <= 0 ){
            session()->flash('success', 'Sin stock del producto ');

            return redirect()->route('cart.cambiar',[$sale,$producto]);
        }


        \Cart::add([
            'id' => $sale,
            'name' => $product->name,
            'price' => $product->price,
            
            'quantity' => 1,
            'attributes' => array(
                'image' => $sale,
            )
        ]);

      //  return dd($sale);
        $saleId  = $sale;
        session()->flash('success', 'Producto Agregado con exito !');

        return redirect()->route('cart.cambiar',[$sale,$producto]);
    }


    public function addToCambiarSalaPalmeras(Request $request,$sale,$producto)
    {
        $product = Bodega::where('barcode', $request->barcode)->first();


      // return dd($sale);
        if($product->stock <= 0 ){
            session()->flash('success', 'Sin stock del producto ');

            return redirect()->route('cart.cambiarPalmeras',[$sale,$producto]);
        }


        \Cart::add([
            'id' => $sale,
            'name' => $product->name,
            'price' => $product->price,
            
            'quantity' => 1,
            'attributes' => array(
                'image' => $sale,
            )
        ]);

      //  return dd($sale);
        $saleId  = $sale;
        session()->flash('success', 'Producto Agregado con exito !');

        return redirect()->route('cart.cambiarPalmeras',[$sale,$producto]);
    }

    public function saleCambiarSala($sale,$producto)
    {
        $cartItems = \Cart::getcontent();
        $cartItems = $cartItems->toArray();


       $sum = 0;
        foreach ($cartItems as $carItem) {

          
     //   return dd($producto);

           $products = saleDetail::find($carItem['id']);

           $prod = Product::find($producto);


       //    $products = Sale::find($carItem['id']);
            $stock = $products->quantity + $carItem['quantity'];
         
            $sum += $carItem['quantity'] * $carItem['price'];
           // $det = SaleDetail::find($producto->id);
           
            $det = DB::table('sale_details')->where('sale_id',$products->id)->get();
           
            $stock2 = $prod->stock;
   

            if($stock <= 0 AND $carItem['quantity'] > $stock2  ){
                session()->flash('success', 'La cantidad supera el stock del producto');

                return redirect()->route('cart.cambiar',[$products->id,$producto]);
            }
           
 
             
             
 
             
 
                foreach ($cartItems as $carItem) {

                    $product = SaleDetail::find($carItem['id']);
                   // $producto = Product::find($carItem['id']);
                  //  $products = Sale::find($carItem['id']);


                  $sales = DB::table('sales')->where('id',$products->id)->get();
                 
           
        
        
                    $sales_details = DB::table('sale_details')->where('sale_id',$product->id)->update(
                        [ 'quantity' => $stock]
                    );

                    $sales = DB::table('sales')->where('id',$product->id)->update(['total' => $sales[0]->total + $sum  ]);

                    $prat = DB::table('products')->where('id',$producto)->update(['stock' => $stock2 - $carItem['quantity']]);
        
                }
        
        
            

        
             \Cart::clear();
               return redirect()->route('cart.cambiar',[$products->id,$producto])->with('Mensaje','Venta realizada con éxito');
        
            
         
    }

}


public function saleCambiarSalaPalmeras($sale,$producto)
{
    $cartItems = \Cart::getcontent();
    $cartItems = $cartItems->toArray();


   $sum = 0;
    foreach ($cartItems as $carItem) {

      
 //   return dd($producto);

       $products = SaleDetailBodega::find($carItem['id']);

       $prod = Bodega::find($producto);


   //    $products = Sale::find($carItem['id']);
        $stock = $products->quantity + $carItem['quantity'];
     
        $sum += $carItem['quantity'] * $carItem['price'];
       // $det = SaleDetail::find($producto->id);
       
        $det = DB::table('sale_detail_bodegas')->where('sale_id',$products->id)->get();
       
        $stock2 = $prod->stock;


        if($stock <= 0 AND $carItem['quantity'] > $stock2  ){
            session()->flash('success', 'La cantidad supera el stock del producto');

            return redirect()->route('cart.cambiarPalmeras',[$products->id,$producto]);
        }
       

         
         

         

            foreach ($cartItems as $carItem) {

                $product = SaleDetailBodega::find($carItem['id']);
               // $producto = Product::find($carItem['id']);
              //  $products = Sale::find($carItem['id']);


              $sales = DB::table('sales')->where('id',$products->id)->get();
             
       
    
    
                $sales_details = DB::table('sale_detail_bodegas')->where('sale_id',$product->id)->update(
                    [ 'quantity' => $stock]
                );

                $sales = DB::table('sales')->where('id',$product->id)->update(['total' => $sales[0]->total + $sum  ]);

                $prat = DB::table('bodegas')->where('id',$producto)->update(['stock' => $stock2 - $carItem['quantity']]);
    
            }
    
    
        

    
         \Cart::clear();
           return redirect()->route('cart.cambiarPalmeras',[$products->id,$producto])->with('Mensaje','Venta realizada con éxito');
    
        
     
}

}

    public function addToSalaPrat(Request $request)
    {
        $producto = Product::where('barcode', $request->barcode)->first();

        if($producto->stock <= 0 ){
            session()->flash('success', 'Sin stock del producto');

            return redirect()->route('cart.salaVentaPrat');
        }


        \Cart::add([
            'id' => $producto->id,
            'name' => $producto->name,
            'price' => $producto->price,
            
            'quantity' => 1,
            'attributes' => array(
                'image' => $producto->image,
            )
        ]);







        session()->flash('success', 'Producto Agregado con exito !');

        return redirect()->route('cart.salaVentaPrat');
    }




    public function addToSalaPalmeras(Request $request)
    {
        $bodega = Bodega::where('barcode', $request->barcode)->first();

        if($bodega->stock <= 0 ){
            session()->flash('success', 'Sin stock del producto');

            return redirect()->route('cart.salaVentaPalmeras');
        }


        \Cart::add([
            'id' => $bodega->id,
            'name' => $bodega->name,
            'price' => $bodega->price,
            
            'quantity' => 1,
            'attributes' => array(
                'image' => $bodega->image,
            )
        ]);





        

        session()->flash('success', 'Producto Agregado con exito !');

        return redirect()->route('cart.salaVentaPalmeras');
    }


    public function saleVentasPrat()
    {
        $cartItems = \Cart::getcontent();
        $cartItems = $cartItems->toArray();


      
         
        
      

  


       
        foreach ($cartItems as $carItem) {

            $producto = Product::find($carItem['id']);
            $stock = $producto->stock - $carItem['quantity'];
         
           // $det = SaleDetail::find($producto->id);
           
            $det = DB::table('sale_details')
            ->join('sales','sales.id','=','sale_details.sale_id')
            ->where('product_id',$producto->id)
            ->where('status',5)->get();
           

           // return dd($det);

            
            

            if($det->count()){

                return redirect()->back()->with('danger','El producto ya esta ingresado en sala de ventas Prat');

            }


            if($stock < 0 ){
                session()->flash('success', 'La cantidad supera el stock del producto');

                return redirect()->route('cart.salaVentaPrat');
            }

            $producto->update(['stock' => $stock]);


            

        }

       

          

       

       

   

        $sale = Sale::create(
            ['client_id' => null,
            'user_id' => auth()->id(),
            'date' => Carbon::now('America/Santiago')->format('Y-m-d H:i:s'),
            'iva' => (\Cart::getTotal() * 0.19),
            'total' => \Cart::getTotal(),
            'totalSinDesc'=>\Cart::getTotal(),
            'status' => 5
            ],
        );

        foreach ($cartItems as $carItem) {

            $producto = Product::find($carItem['id']);

            $sales_details = DB::table('sale_details')->insert(
                ['sale_id' =>$sale->id, 'product_id'=> $carItem['id'], 'quantity' => $carItem['quantity'],'precio'=> $carItem['price'],'descuento' => 0 ]
            );

        }


    

      

    
    

    //   $descont = $this->descuento();

      

        //return dd($desc);

     \Cart::clear();
       return redirect()->route('cart.salaVentaPrat')->with('Mensaje','Venta realizada con éxito');


       
    }



    public function saleVentasPalmeras()
    {
        $cartItems = \Cart::getcontent();
        $cartItems = $cartItems->toArray();


      
         
        
      

  


       
        foreach ($cartItems as $carItem) {

            $bodega = Bodega::find($carItem['id']);
            $stock = $bodega->stock - $carItem['quantity'];
         
           // $det = SaleDetail::find($producto->id);
           
            $det = DB::table('sale_detail_bodegas') 
            ->join('sales','sales.id','=','sale_detail_bodegas.sale_id')
            ->where('bodega_id',$bodega->id)
            ->where('status',6)->get();
           // return dd($det);

            
            

            if($det->count()){

                return redirect()->back()->with('danger','El producto ya esta ingresado en sala de ventas Palmeras');

            }


            if($stock < 0 ){
                session()->flash('success', 'La cantidad supera el stock del producto');

                return redirect()->route('cart.salaVentaPrat');
            }

            $bodega->update(['stock' => $stock]);


            

        }

       

          

       

       

   

        $sale = Sale::create(
            ['client_id' => null,
            'user_id' => auth()->id(),
            'date' => Carbon::now('America/Santiago')->format('Y-m-d H:i:s'),
            'iva' => (\Cart::getTotal() * 0.19),
            'total' => \Cart::getTotal(),
            'totalSinDesc'=>\Cart::getTotal(),
            'status' => 6
            ],
        );

        foreach ($cartItems as $carItem) {

            $bodega = Bodega::find($carItem['id']);

            $sales_detail_bodega = DB::table('sale_detail_bodegas')->insert(
                ['sale_id' =>$sale->id, 'bodega_id'=> $carItem['id'], 'quantity' => $carItem['quantity'],'precio'=> $carItem['price'],'descuento' => 0 ]
            );

        }


    

      

    
    

    //   $descont = $this->descuento();

      

        //return dd($desc);

     \Cart::clear();
       return redirect()->route('cart.salaVentaPalmeras')->with('Mensaje','Venta realizada con éxito');


       
    }
    


    public function descuento(Request $request){

        $descontar = $request->descuento;

        return $descontar;

    }

    public function saleCart(Request $request)
    {
        $cartItems = \Cart::getcontent();
        $cartItems = $cartItems->toArray();

       

        foreach ($cartItems as $carItem) {

            $producto = Product::find($carItem['id']);
        //    $product = SaleDetail::find($carItem['id']);
           $det = DB::table('sale_details')->where('product_id',$producto->id)->get();
            $stock = $det[0]->quantity - $carItem['quantity'];

      

          //  return dd($cartItems);
          

        //   return dd($det[0]->quantity);
            
           

            if($stock < 0 ){
                session()->flash('success', 'La cantidad supera el stock del producto en sala de ventas Prat');

                return redirect()->route('cart.list');
            }

          //  $product->update(['quantity' => $stock]);

          $most = DB::table('sales')
          ->join('sale_details','sales.id','=','sale_details.sale_id')
          ->select('sales.total')
          ->where('status',5)
          ->where('product_id',$producto->id)
          ->get();

        


          if($carItem['quantity'] >= 6){


            $dets = DB::table('sales')
            ->join('sale_details','sales.id','=','sale_details.sale_id')
            ->where('status',5)
            ->where('product_id',$producto->id)->update(['quantity' => $stock,'total'=>$most[0]->total - ($carItem['price'] * $carItem['quantity'] - ($carItem['price'] * $carItem['quantity'] ) * 0.1) ]);


          }else{


            $dets = DB::table('sales')
            ->join('sale_details','sales.id','=','sale_details.sale_id')
            ->where('status',5)
            ->where('product_id',$producto->id)->update(['quantity' => $stock,'total'=>$most[0]->total - ($carItem['price'] * $carItem['quantity'] ) ]);

            
          }

        }


        
        if($carItem['quantity'] >= 6){


            $sale = Sale::create(
                ['client_id' => null,
                'user_id' => auth()->id(),
                'date' => Carbon::now('America/Santiago')->format('Y-m-d H:i:s'),
                'iva' => (\Cart::getTotal() * 0.19),
                'total' => \Cart::getTotal() - (\Cart::getTotal() * 0.1),
                'totalSinDesc'=>\Cart::getTotal(),
                'status' => 1
                ],
            );

        }else{



            $sale = Sale::create(
                ['client_id' => null,
                'user_id' => auth()->id(),
                'date' => Carbon::now('America/Santiago')->format('Y-m-d H:i:s'),
                'iva' => (\Cart::getTotal() * 0.19),
                'total' => \Cart::getTotal(),
                'totalSinDesc'=>\Cart::getTotal(),
                'status' => 1
                ],
            );


        }
         
         
            
        
            foreach ($cartItems as $carItem) {
        
                $producto = Product::find($carItem['id']);
        
                $sales_details = DB::table('sale_details')->insert(
                    ['sale_id' =>$sale->id, 'product_id'=> $carItem['id'], 'quantity' => $carItem['quantity'],'precio'=> $carItem['price'],'descuento' => 0 ]
        
        
                );
        
        
            }
        
        
          

     


    
     \Cart::clear();
       return redirect()->route('sale.index')->with('Mensaje','Venta realizada con éxito');
    }

    public function saleProducto(){

        $cartItems = \Cart::getcontent();
        $cartItems = $cartItems->toArray();


        foreach ($cartItems as $carItem) {

            $producto = Product::find($carItem['id']);
            $stock = $producto->stock + $carItem['quantity'];

            if($stock < 0 ){
                session()->flash('success', 'La cantidad supera el stock del producto');

                return redirect()->route('cart.list2');
            }

            $producto->update(['stock' => $stock]);

        }


        
        
        $purchase = Purchase::create(
            ['provider_id' => $producto->provider_id,
            'user_id' => auth()->id(),
            'date' => Carbon::now('America/Santiago')->format('Y-m-d H:i:s'),
            'iva' => (\Cart::getTotal() * 0.19),
            'total' => \Cart::getTotal(),
            'status' => 2
           
            ],
        );

        foreach ($cartItems as $carItem) {

            $producto = Product::find($carItem['id']);

            $purchase_details = DB::table('purchase_details')->insert(
                ['purchase_id' =>$purchase->id, 'product_id'=> $carItem['id'], 'quantity' => $carItem['quantity'],'price'=>$carItem['price']]
            );

        }

        


        \Cart::clear();
        return redirect()->route('cart.list2')->with('Mensaje','Compra realizada con éxito');
    }

    public function saleCompras(){

        $cartItems = \Cart::getcontent();
        $cartItems = $cartItems->toArray();


        foreach ($cartItems as $carItem) {

            $bodega = Bodega::find($carItem['id']);
            $stock = $bodega->stock + $carItem['quantity'];

            if($stock < 0 ){
                session()->flash('success', 'La cantidad supera el stock del producto');

                return redirect()->route('cart.list2');
            }

            $bodega->update(['stock' => $stock]);

        }


        
        
        $purchase = Purchase::create(
            ['provider_id' => $bodega->provider_id,
            'user_id' => auth()->id(),
            'date' => Carbon::now('America/Santiago')->format('Y-m-d H:i:s'),
            'iva' => (\Cart::getTotal() * 0.19),
            'total' => \Cart::getTotal(),
            'status' => 4
           
            ],
        );

        foreach ($cartItems as $carItem) {

            $bodega = Bodega::find($carItem['id']);

            $purchase_details = DB::table('purchase_detail_bodegas')->insert(
                ['purchase_id' =>$purchase->id, 'bodega_id'=> $carItem['id'], 'quantity' => $carItem['quantity'],'price'=>$carItem['price']]
            );

        }

        


        \Cart::clear();
        return redirect()->route('cart.list4')->with('Mensaje','Compra realizada con éxito');
    }












      

    public function salePalmeras()
    {


        
        $cartItems = \Cart::getcontent();
        $cartItems = $cartItems->toArray();

       

        foreach ($cartItems as $carItem) {

            $bodega = Bodega::find($carItem['id']);
        //    $product = SaleDetail::find($carItem['id']);
           $det = DB::table('sale_detail_bodegas')->where('bodega_id',$bodega->id)->get();
            $stock = $det[0]->quantity - $carItem['quantity'];

      
          

        //   return dd($det[0]->quantity);
            
           

            if($stock < 0 ){
                session()->flash('success', 'La cantidad supera el stock del producto en sala de ventas Palmeras');

                return redirect()->route('cart.list3');
            }

          //  $product->update(['quantity' => $stock]);

          $most = DB::table('sales')
          ->join('sale_detail_bodegas','sales.id','=','sale_detail_bodegas.sale_id')
          ->select('sales.total')
          ->where('status',6)
          ->where('bodega_id',$bodega->id)
          ->get();

        


         


            $dets = DB::table('sales')
            ->join('sale_detail_bodegas','sales.id','=','sale_detail_bodegas.sale_id')
            ->where('status',6)
            ->where('bodega_id',$bodega->id)->update(['quantity' => $stock,'total'=>$most[0]->total - ($carItem['price'] * $carItem['quantity'] ) ]);

            
          

        }


        
       

            $sale = Sale::create(
                ['client_id' => null,
                'user_id' => auth()->id(),
                'date' => Carbon::now('America/Santiago')->format('Y-m-d H:i:s'),
                'iva' => (\Cart::getTotal() * 0.19),
                'total' => \Cart::getTotal(),
                'totalSinDesc'=>\Cart::getTotal(),
                'status' => 3
                ],
            );


        
         
         
            
        
            foreach ($cartItems as $carItem) {
        
                $bodega = Bodega::find($carItem['id']);
        
                $sales_details = DB::table('sale_detail_bodegas')->insert(
                    ['sale_id' =>$sale->id, 'bodega_id'=> $carItem['id'], 'quantity' => $carItem['quantity'],'precio'=> $carItem['price'],'descuento' => 0 ]
        
        
                );
        
        
            }
        
        
          

     


    
     \Cart::clear();
       return redirect()->route('cart.list3')->with('Mensaje','Venta realizada con éxito');

    


   
    }

    

    public function addToCart(Request $request)
    {
        $producto = Product::where('barcode', $request->barcode)->first();

        if($producto->stock <= 0 ){
            session()->flash('success', 'Sin stock del producto');

            return redirect()->route('cart.list');
        }

    //return dd($request->descuento);

        \Cart::add([
            'id' => $producto->id,
            'name' => $producto->name,
            'price' => $producto->price,
           // 'descuento' => $producto->descuento,
            
            'quantity' => 1,
            'attributes' => array(
                'image' => $producto->image,
            )
        ]);


        session()->flash('success', 'Producto Agregado con exito !');

        return redirect()->route('cart.list');
    }


    public function addToProduct(Request $request){

        $producto = Product::where('barcode', $request->barcode)->first();

        //$providers = Provider::where('provider_id',$producto)
        
       

        if($producto->stock <= 0 ){
            session()->flash('success', 'Sin stock del producto');

            return redirect()->route('cart.list2');
        }


        \Cart::add([
            'id' => $producto->id,
            'name' => $producto->name,
            'price' => $producto->price,
            'quantity' => 1,
            'attributes' => array(
                'image' => $producto->image,
            )
        ]);

        $providers = Provider::get();

       // return dd($request->barcode);
        session()->flash('success', 'Producto Agregado con exito !');

       // return dd($producto->provider_id);

       return redirect()->route('cart.list2');

    }









public function addToPalmeras(Request $request)
{
    $bodega = Bodega::where('barcode', $request->barcode)->first();

    if($bodega->stock <= 0 ){
        session()->flash('success', 'Sin stock del producto');

        return redirect()->route('cart.list3');
    }


    \Cart::add([
        'id' => $bodega->id,
        'name' => $bodega->name,
        'price' => $bodega->price,
        'quantity' => 1,
        'attributes' => array(
            'image' => $bodega->image,
        )
    ]);


    
    session()->flash('success', 'Producto Agregado con exito !');

return redirect()->route('cart.list3');
}



public function addToCompras(Request $request)
{
    $producto = Bodega::where('barcode', $request->barcode)->first();

    if($producto->stock <= 0 ){
        session()->flash('success', 'Sin stock del producto');

        return redirect()->route('cart.list4');
    }


    \Cart::add([
        'id' => $producto->id,
        'name' => $producto->name,
        'price' => $producto->price,
        'quantity' => 1,
        'attributes' => array(
            'image' => $producto->image,
        )
    ]);


    session()->flash('success', 'Producto Agregado con exito !');

    return redirect()->route('cart.list4');
}


    public function updatoCart(Request $request)
    {
        $producto = Product::where('id', $request->id)->first();

        $det = DB::table('sale_details')->where('product_id',$producto->id)->get();
      //  $stock = $det[0]->quantity - $carItem['quantity'];


    // return dd([$request->quantity,$request->descuento]);

        if ($request->quantity > $det[0]->quantity) {
            session()->flash('success', 'La cantidad supera el stock del producto');

            return redirect()->route('cart.list');
        }



        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity,
                  //  'price' => $producto->price * $request->descuento/100
                ],
            ]
        );

        //return dd($request->descuento);

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }




    public function updatoCart2(Request $request)
    {
        $bodega = Bodega::where('id', $request->id)->first();

        if ($request->quantity > $bodega->stock) {
            session()->flash('success', 'La cantidad supera el stock del producto');


            

            return redirect()->route('cart.list3');
        }


        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

       
        //return dd($request->descuento);

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list3');
    }



    public function updatoCart3(Request $request)
    {
        $product = Product::where('id', $request->id)->first();

        if ($request->quantity > $product->stock) {
            session()->flash('success', 'La cantidad supera el stock del producto');

            return redirect()->route('cart.list2');
        }



        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        //return dd($request->descuento);

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list2');
    }


    
    public function updatoCart4(Request $request)
    {
        $bodega = Bodega::where('id', $request->id)->first();

        if ($request->quantity > $bodega->stock) {
            session()->flash('success', 'La cantidad supera el stock del producto');

            return redirect()->route('cart.list4');
        }



        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        //return dd($request->descuento);

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list4');
    }


    public function updatoCart5(Request $request)
    {
        $product = Product::where('id', $request->id)->first();

        if ($request->quantity > $product->stock) {
            session()->flash('success', 'La cantidad supera el stock del producto');

            return redirect()->route('cart.list4');
        }



        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        //return dd($request->descuento);

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.salaVentaPrat');
    }





    public function updatoCart6(Request $request,$producto)
    {
        $product = Product::where('id', $producto)->first();

        if ($request->quantity > $product->stock) {
            session()->flash('success', 'La cantidad supera el stock del producto en bodega Prat');

            return redirect()->route('cart.cambiar',[$request->id,$producto]);
        }


     //   return dd($product->id);


        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        //return dd($request->descuento);

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.cambiar',[$request->id,$producto]);
    }




    public function updatoCart7(Request $request)
    {
        $bodega = Bodega::where('id', $request->id)->first();

        if ($request->quantity > $bodega->stock) {
            session()->flash('success', 'La cantidad supera el stock del producto');

            return redirect()->route('cart.salaVentaPalmeras');
        }



        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        //return dd($request->descuento);

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.salaVentaPalmeras');
    }






    
    public function updatoCart8(Request $request,$producto)
    {
        $bodega = Bodega::where('id', $producto)->first();

        if ($request->quantity > $bodega->stock) {
            session()->flash('success', 'La cantidad supera el stock del producto en bodega Palmeras');

            return redirect()->route('cart.cambiarPalmeras',[$request->id,$producto]);
        }


     //   return dd($product->id);


        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        //return dd($request->descuento);

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.cambiarPalmeras',[$request->id,$producto]);
    }




    
    public function updatoCart9(Request $request)
    {
        $producto = Product::where('id', $request->id)->first();

        if ($request->quantity > $producto->stock) {
            session()->flash('success', 'La cantidad supera el stock del producto en bodega Prat');

            return redirect()->route('product.cambioPalmeras');
        }


     //   return dd($product->id);


        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        //return dd($request->descuento);

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('product.cambioPalmeras');
    }



    



    public function removeCartPalmeras(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list3');
    }


    public function removeCartProducto(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list2');
    }


    public function removeCartCompras(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list4');
    }

    

    public function removeSalaVentasPrat(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.salaVentaPrat');
    }


    public function removeSalaVentasPalmeras(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.salaVentaPalmeras');
    }


    public function removeCambiar(Request $request,$producto)
    {

      //  return dd($request->id);
      
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.cambiar',[$request->id,$producto]);
    }



    public function removeCambiarPalmeras(Request $request,$producto)
    {

      //  return dd($request->id);
      
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.cambiarPalmeras',[$request->id,$producto]);
    }



    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCambio(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('product.cambioPalmeras');
    }


    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Carrito borrado con éxito !');

        return redirect()->route('cart.list');
    }

    public function clearAllProducto()
    {
        \Cart::clear();

        session()->flash('success', 'Carrito borrado con éxito !');

        return redirect()->route('cart.list2');
    }


    public function clearPalmeras()
    {
        \Cart::clear();

        session()->flash('success', 'Carrito borrado con éxito !');

        return redirect()->route('cart.list3');
    }

    public function clearCompras()
    {
        \Cart::clear();

        session()->flash('success', 'Carrito borrado con éxito !');

        return redirect()->route('cart.list4');
    }


    public function clearsSalaVentaPrat()
    {
        \Cart::clear();

        session()->flash('success', 'Carrito borrado con éxito !');

        return redirect()->route('cart.salaVentaPrat');
    }


    public function clearsCambiar($sale,$producto)
    {


       //return dd($sale);
        \Cart::clear();

        session()->flash('success', 'Carrito borrado con éxito !');

        return redirect()->route('cart.cambiar',[$sale,$producto]);
    }

    public function clearsCambiarPalmerass($sale,$producto)
    {


       //return dd($sale);
        \Cart::clear();

        session()->flash('success', 'Carrito borrado con éxito !');

        return redirect()->route('cart.cambiarPalmeras',[$sale,$producto]);
    }


    public function clearsSalaVentasPalmeras()
    {
        \Cart::clear();

        session()->flash('success', 'Carrito borrado con éxito !');

        return redirect()->route('cart.salaVentaPalmeras');
    }
    



    public function clearsCambio()
    {
        \Cart::clear();

        session()->flash('success', 'Carrito borrado con éxito !');

        return redirect()->route('product.cambioPalmeras');
    }

}
