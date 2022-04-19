<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Provider;
use App\Models\Bodega;
use DB;
use App\Models\Orders;
use App\Models\OrdersDep;
use App\Models\Items;
use App\Models\ItemsDep;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class BodegasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(){


        $this->middleware('auth');
        $this->middleware('can:bodegas.index')->only('index');
        $this->middleware('can:bodegas.create')->only('create','store');
        $this->middleware('can:bodegas.edit')->only('edit','update');
        $this->middleware('can:bodegas.destroy')->only('destroy');
        $this->middleware('can:bodegas.reports')->only('ReportsBodega');
        

     }


     public function ReportsBodega(Bodega $bodega){



        $Mamba = Bodega::where('name','Mamba')
        ->where('stock','<=','50')
        ->get();

       

        $Coral = Bodega::where('name','Coral')
        ->where('stock','<=','50')
        ->get();

        $Anakena = Bodega::where('name','Anakena')
        ->where('stock','<=','50')
        ->get();

        $Suprema = Bodega::where('name','Suprema')
        ->where('stock','<=','50')
        ->get();

        $Crebel = Bodega::where('name','Crebel')
        ->where('stock','<=','50')
        ->get();



        $Crebel50Grs = Bodega::where('name','Crebel 50 Grs')
        ->where('stock','<=','50')
        ->get();

        $Chilote = Bodega::where('name','Chilote')
        ->where('stock','<=','50')
        ->get();


        $Surena = Bodega::where('name','Surena')
        ->where('stock','<=','50')
        ->get();

        $Versatil = Bodega::where('name','Versatil')
        ->where('stock','<=','50')
        ->get();

        $Suprema_40GR = Bodega::where('name','Suprema 40GR')
        ->where('stock','<=','50')
        ->get();

        $Baby_Maxi = Bodega::where('name','Baby Maxi')
        ->where('stock','<=','50')
        ->get();

        $Pintitas = Bodega::where('name','Pintitas')
        ->where('stock','<=','50')
        ->get();


        $Dulce_Algodon = Bodega::where('name','Dulce Algodon')
        ->where('stock','<=','50')
        ->get();


        $Ibis = Bodega::where('name','Ibis')
        ->where('stock','<=','50')
        ->get();


        $Algodon_100_Reginella = Bodega::where('name','Algodon 100% Reginella')
        ->where('stock','<=','50')
        ->get();


        $Sol = Bodega::where('name','Sol')
        ->where('stock','<=','50')
        ->get();

        $Tiara = Bodega::where('name','Tiara')
        ->where('stock','<=','50')
        ->get();


       


        $Dacolor = Bodega::where('name','Dacolor')
        ->where('stock','<=','50')
        ->get();


        $Dalai_Lana = Bodega::where('name','Dalai Lana')
        ->where('stock','<=','50')
        ->get();

        $Flora = Bodega::where('name','Flora')
        ->where('stock','<=','50')
        ->get();


        $Lurex = Bodega::where('name','Lurex')
        ->where('stock','<=','50')
        ->get();


        $Mamut =Bodega::where('name','Mamut')
        ->where('stock','<=','50')
        ->get();


        $Sultan = Bodega::where('name','Sultan')
        ->where('stock','<=','50')
        ->get();


        $Spray = Bodega::where('name','Spray')
        ->where('stock','<=','50')
        ->get();


        $Kinder_Bebe = Bodega::where('name','kinder Bebe')
        ->where('stock','<=','50')
        ->get();


        $Algodon_100_Reciclado = Bodega::where('name','Algodon Reciclado')
        ->where('stock','<=','50')
        ->get();


        $Algodon_MacrameMM= Bodega::where('name','Macrame 3MM')
        ->where('stock','<=','50')
        ->get();


        $Latina = Bodega::where('name','Latina')
        ->where('stock','<=','50')
        ->get();


        $Boom_Batik = Bodega::where('name','Boom Batik')
        ->where('stock','<=','50')
        ->get();

        $Esqui = Bodega::where('name','Esqui')
        ->where('stock','<=','50')
        ->get();

        $Chanille = Bodega::where('name','Chanille')
        ->where('stock','<=','50')
        ->get();

        $Trapito = Bodega::where('name','Trapito')
        ->where('stock','<=','50')
        ->get();

        $Super_Economica = Bodega::where('name','Super Economico')
        ->where('stock','<=','50')
        ->get();


        $Adora = Bodega::where('name','Adora')
        ->where('stock','<=','50')
        ->get();



        $Fresquita = Bodega::where('name','Fresquita')
        ->where('stock','<=','50')
        ->get();


        $Fresquita_M = Bodega::where('name','Fresquita M')
        ->where('stock','<=','50')
        ->get();


        $Macrame_500Grs = Bodega::where('name','Macrame 500 grs')
        ->where('stock','<=','50')
        ->get();

        $Nativa = Bodega::where('name','Nativa')
        ->where('stock','<=','50')
        ->get();

        $AlgodonColor = Bodega::where('name','Algodon Color')
        ->where('stock','<=','50')
        ->get();


        $Ideal40Grs = Bodega::where('name','Ideal 40 Grs')
        ->where('stock','<=','50')
        ->get();

        $TrapitoM = Bodega::where('name','Trapito M')
        ->where('stock','<=','50')
        ->get();

       // return dd($Suprema);
        return view('bodega.reports',compact('Suprema','Crebel','Chilote','Surena','Versatil','Suprema_40GR','Baby_Maxi',
        'Pintitas','Dulce_Algodon','Ibis','Algodon_100_Reginella','Sol','Tiara','Mamba','Dacolor','Dalai_Lana',
    'Flora','Lurex','Mamut','Sultan','Spray','Kinder_Bebe','Algodon_100_Reciclado','Algodon_MacrameMM',
    'Latina','Boom_Batik','Anakena','Coral','Chanille','Trapito','Super_Economica','Adora','Fresquita','Fresquita_M',
    'Macrame_500Grs','Nativa','AlgodonColor','Crebel50Grs','Ideal40Grs','TrapitoM'));
    }




    public function index(Request $request)
    {
        $buscar = $request->get('buscar');
        $bodegas = Bodega::where('status',2)
        ->where('barcode','LIKE','%'.$buscar.'%')
        ->Orwhere('name','LIKE','%'.$buscar.'%')
        ->paginate();


           
        $Supremas = Bodega::where('name','Suprema')->sum('stock');
        $Crebel = Bodega::where('name','Crebel')->sum('stock');
        $Chilote = Bodega::where('name','Chilote')->sum('stock');
        $Surena = Bodega::where('name','Surena')->sum('stock');
        $Versatil =Bodega::where('name','Versatil')->sum('stock');
        $BabyMaxi =Bodega::where('name','Baby Maxi')->sum('stock');
        $Pintitas =Bodega::where('name','Pintitas')->sum('stock');
        $Dulce_Algodon =Bodega::where('name','Dulce Algodon')->sum('stock');
        $Ibis =Bodega::where('name','Ibis')->sum('stock');
        $Sol =Bodega::where('name','Sol')->sum('stock');
        $Tiara =Bodega::where('name','Tiara')->sum('stock');
        $Mamba =Bodega::where('name','Mamba')->sum('stock');
        $Dacolor =Bodega::where('name','Dacolor')->sum('stock');
        $Dalai_Lana =Bodega::where('name','Dalai Lana')->sum('stock');
        $Flora =Bodega::where('name','Flora')->sum('stock');
        $Lurex =Bodega::where('name','Lurex')->sum('stock');
        $Mamut =Bodega::where('name','Mamut')->sum('stock');
        $Spray =Bodega::where('name','Spray')->sum('stock');
        $Algodon_100_Reciclado =Bodega::where('name','Algodon Reciclado')->sum('stock');
        $Macrame3MM =Bodega::where('name','Macrame 3MM')->sum('stock');
        $Latina =Bodega::where('name','Latina')->sum('stock');
        $Boom_Batik =Bodega::where('name','Boom Batik')->sum('stock');
        $Anakena =Bodega::where('name','Anakena')->sum('stock');
        $Coral =Bodega::where('name','Coral')->sum('stock');
        $Chanille =Bodega::where('name','Chanille')->sum('stock');
        $Trapito =Bodega::where('name','Trapito')->sum('stock');
        $Super_Economica =Bodega::where('name','Super Economico')->sum('stock');
        $Adora =Bodega::where('name','Adora')->sum('stock');
        $Fresquita =Bodega::where('name','Fresquita')->sum('stock');
        $FresquitaM =Bodega::where('name','Fresquita M')->sum('stock');
        $Macrame500Grs =Bodega::where('name','Macrame 500 grs')->sum('stock');
        $Nativa =Bodega::where('name','Nativa')->sum('stock');
        $Crebel50Grs =Bodega::where('name','Crebel 50 Grs')->sum('stock');
        $AlgodonColor =Bodega::where('name','Algodon Color')->sum('stock');
       
        $Ideal40Grs =Bodega::where('name','Ideal 40 Grs')->sum('stock');
        $TrapitoM =Bodega::where('name','Trapito M')->sum('stock');
        
        



        return view('bodega.index', compact('bodegas','Supremas','Crebel','Chilote','Surena','Versatil','BabyMaxi',
        'Pintitas','Dulce_Algodon','Ibis','Sol','Tiara','Mamba','Dacolor','Dalai_Lana','Flora','Lurex','Algodon_100_Reciclado',
        'Mamut','Spray','Macrame3MM','Latina','Boom_Batik','Anakena','Coral','Chanille','Trapito','Super_Economica',
        'Adora','Fresquita','FresquitaM','Macrame500Grs','Nativa','AlgodonColor','Crebel50Grs','Ideal40Grs','TrapitoM'))
            ->with('i', (request()->input('page', 1) - 1) * $bodegas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Bodega $bodega)
    {
        $bodega = new Bodega();

        /*
        $categories = Category::select('id','name')->get();

        $providers = Provider::get();

        */

        $most = DB::table('categories')
        ->select('id','name')
        ->get();

        $mostrar = DB::table('providers')
        ->select('id','name')
        ->get();



        return view('bodega.create', compact('bodega','most','mostrar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Bodega::$rules);

        $barcode = $request->barcode;

        $barcodearray = array('barcode' => $barcode);

        $bodega = collect($request->all());

        $bodega->put('barcode' , $barcode);


        $bodega = Bodega::create($bodega->all());

        return redirect()->route('bodegas.index')
            ->with('success', 'Bodega created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bodega = Bodega::find($id);

        return view('bodega.show', compact('bodega'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bodega $bodega)
    {
        $bodega = Bodega::find($bodega->id);

        $most = DB::table('categories')
        ->select('id','name')
        ->get();

        $mostrar = DB::table('providers')
        ->select('id','name')
        ->get();

        return view('bodega.edit', compact('bodega','most','mostrar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Bodega $bodega)
    {
        request()->validate(Bodega::$rules);

        $bodega->update($request->all());

        return redirect()->route('bodegas.index')
            ->with('success', 'Producto editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bodega = Bodega::find($id)->delete();

        return redirect()->route('bodegas.index')
            ->with('success', 'Producto eliminado con éxito');
    }


    public function boleta($id)
    {


        

        $order = Orders::where('id',$id)
        ->select('id','encargado','fecha','total','sueldos')->get();



      //  return dd($order[0]->id); 



        $items = Items::where('orders_id',$order[0]->id)
        ->select('brand','quantity','budget')->get();




      $pdf = PDF::loadView('bodega.boleta',compact('order','items'));
       // return $pdf->download('Reporte_de_venta_'.$sale->id.'.pdf');
        return $pdf->stream('informe.pdf');



    }



    public function boleta2($id)
    {


        

        $order = OrdersDep::where('id',$id)
        ->select('id','encargado','fecha','total')->get();



      //  return dd($order[0]->id); 



        $items = ItemsDep::where('orders_deps_id',$order[0]->id)
        ->select('quantity','amount','budget')->get();




      $pdf = PDF::loadView('bodega.boleta2',compact('order','items'));
       // return $pdf->download('Reporte_de_venta_'.$sale->id.'.pdf');
        return $pdf->stream('informe.pdf');



    }


 

    public function showRegistro($id){







        $order = Orders::where('id',$id)
        ->select('id','encargado','fecha','total','sueldos','terminal')->get();



      //  return dd($order[0]->id); 



        $items = Items::where('orders_id',$order[0]->id)
        ->select('brand','quantity','budget')->get();



        return view('bodega.showRegistro',compact('order','items'));


    }



    public function showDeposito($id){







      $order = OrdersDep::where('id',$id)
      ->select('id','encargado','fecha','total','status')->get();



    //  return dd($order[0]->id); 



      $items = ItemsDep::where('orders_deps_id',$order[0]->id)
      ->select('quantity','amount','budget')->get();



      return view('bodega.showDeposito',compact('order','items'));


  }






 public function reports_date(){
  $order = Orders::whereDate('fecha', Carbon::today('America/Santiago'))
 ->where('status',1)

  ->get();



//  $order = ::whereMonth('fecha', now()->month)->sum('sueldos');

 $credito = DB::table('orders')
 ->join('items','items.orders_id','=','orders.id')
 ->whereMonth('orders.fecha', now()->month)
 ->where('items.quantity','>',0)
 ->where('items.brand','=','Credito')
 
 ->get();

 $redCompra = DB::table('orders')
 ->join('items','items.orders_id','=','orders.id')
 ->whereMonth('orders.fecha', now()->month)
 ->where('items.quantity','>',0)
 ->where('items.brand','=','Red Compra')
 
 ->get();

 $efectivo = DB::table('orders')
 ->join('items','items.orders_id','=','orders.id')
 ->whereMonth('orders.fecha', now()->month)
 ->where('items.quantity','>',0)
 ->where('items.brand','=','Efectivo')
 
 ->get();
  
  $total = $order->where('status',1)->sum('total');
  $sueldos = $order->where('status',1)->sum('sueldos');

 // $credito = $order->where('brand','=','Credito')->count();
  return view('bodega.reports_date', compact('order', 'total','sueldos','credito','redCompra','efectivo'));
}


 public function report_results(Request $request){

  $fi = $request->fecha_ini. ' 00:00:00';
  $ff = $request->fecha_fin. ' 23:59:59';
  $order = Orders::whereBetween('fecha', [$fi, $ff])
  ->where('status',1)
  ->get();
  $total = $order->sum('total');
  $sueldos = $order->sum('sueldos');
  $credito = DB::table('orders')
  ->join('items','items.orders_id','=','orders.id')
  ->whereBetween('orders.fecha', [$fi, $ff])
  ->where('items.quantity','>',0)
  ->where('items.brand','=','Credito')
  ->get();
  
  $redCompra = DB::table('orders')
  ->join('items','items.orders_id','=','orders.id')
  ->whereBetween('orders.fecha', [$fi, $ff])
  ->where('items.quantity','>',0)
  ->where('items.brand','=','Red Compra')
  
  ->get();


  $efectivo = DB::table('orders')
  ->join('items','items.orders_id','=','orders.id')
  ->whereBetween('orders.fecha', [$fi, $ff])
  ->where('items.quantity','>',0)
  ->where('items.brand','=','Efectivo')
  
  ->get();
  return view('bodega.reports_date', compact('order', 'total','sueldos','credito','redCompra','efectivo'));

  
 }




 public function reports_dateDep(){
  $order = OrdersDep::whereDate('fecha', Carbon::today('America/Santiago'))
 ->where('status',1)

  ->get();






  
  $total = $order->where('status',1)->sum('total');


 // $credito = $order->where('brand','=','Credito')->count();
  return view('bodega.reports_dateDep', compact('order', 'total'));
}


 public function report_resultsDep(Request $request){

  $fi = $request->fecha_ini. ' 00:00:00';
  $ff = $request->fecha_fin. ' 23:59:59';
  $order = OrdersDep::whereBetween('fecha', [$fi, $ff])
  ->where('status',1)
  ->get();
  $total = $order->sum('total');


  return view('bodega.reports_dateDep', compact('order', 'total'));

  
 }







 public function depositoRegistro(Request $request){





      
  $buscar = $request->get('buscar');

  $most = OrdersDep::where('status',1)
  ->where('fecha','LIKE','%'.$buscar.'%')
  ->paginate();

 



  


return view('bodega.depositoRegistro',compact('most'));

}


 public function deposito(){

  return view('bodega.deposito');

 }



 public function depositoStore(Request $request){




  $data = $request->all();

  $lastid = OrdersDep::create($data)->id;
  
  if (count($request->quantity) > 0) {
  
  
 
  
    foreach ($request->quantity as $item=>$v){
  
      $data2= array(
  
        'orders_deps_id' => $lastid,
      
      
        'quantity' => $request->quantity[$item],
        'amount' => $request->amount[$item],
        'budget' => $request->budget[$item],
       
        
  
  
      );


      ItemsDep::insert($data2);
    }
  
  }

  $sum = DB::table('items_deps')->where('orders_deps_id',$lastid)
  ->select('quantity','budget','amount')
  ->get();

  $mas = 0;

  foreach ($sum as $item) {
      
  $mas += $item->amount;

  

  }


//  $sueldos = $mas * 0.1;

 

  $tot = DB::table('items_deps')
  ->join('orders_deps','orders_deps.id','=','items_deps.orders_deps_id')
  ->where('items_deps.orders_deps_id',$lastid)
  ->update(['total'=>$mas]);





  
        return redirect()->route('bodega.depositoRegistro')->with('Mensaje','Datos guardados con éxito');


}

public function registro(Request $request){





      
  $buscar = $request->get('buscar');

  $most = Orders::where('status',1)
  ->where('fecha','LIKE','%'.$buscar.'%')
  ->paginate(10);

 



  


return view('bodega.registro',compact('most'));

}




public function generar(){




  return view('bodega.generar');
  
}



public function generaStore(Request $request){





  $order = Orders::whereMonth('fecha', now()->month)->sum('sueldos');

//return dd($order);

  if ($order >= 1800000) {


    $data = $request->all();

    $lastid = Orders::create($data)->id;


    
    if (count($request->brand) > 0) {
    
    
   
    
      foreach ($request->brand as $item=>$v){
    
        $data2= array(
    
          'orders_id' => $lastid,
        
          'Brand'=> $request->brand[$item],
          'quantity' => $request->quantity[$item],
          'budget' => $request->budget[$item],
         
          
    
    
        );


        Items::insert($data2);
      }
    
    }

    $sum = DB::table('items')->where('orders_id',$lastid)
    ->select('quantity','budget')
    ->get();

    $mas = 0;

    foreach ($sum as $item) {
        
    $mas += $item->budget;

    

    }

    $tot = DB::table('items')
    ->join('orders','orders.id','=','items.orders_id')
    ->where('items.orders_id',$lastid)
    ->update(['total'=>$mas,'sueldos'=> 0]);
  

    return redirect()->route('bodega.registro')->with('Mensaje','Datos guardados con éxito');

    

  }else{




    
    
  $data = $request->all();

  $lastid = Orders::create($data)->id;


  
  if (count($request->brand) > 0) {
  
  
 
  
    foreach ($request->brand as $item=>$v){
  
      $data2= array(
  
        'orders_id' => $lastid,
      
        'Brand'=> $request->brand[$item],
        'quantity' => $request->quantity[$item],
        'budget' => $request->budget[$item],
       
        
  
  
      );


      Items::insert($data2);
    }
  
  }

  $sum = DB::table('items')->where('orders_id',$lastid)
  ->select('quantity','budget')
  ->get();

  $mas = 0;

  foreach ($sum as $item) {
      
  $mas += $item->budget;

  

  }

  $tot = DB::table('items')
  ->join('orders','orders.id','=','items.orders_id')
  ->where('items.orders_id',$lastid)
  ->update(['total'=>$mas,'sueldos'=> $mas * 0.1]);
  


 



    
          return redirect()->route('bodega.registro')->with('Mensaje','Datos guardados con éxito');
  
   




  }

 




}


}
