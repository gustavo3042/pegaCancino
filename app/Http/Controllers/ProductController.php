<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Provider;
use DB;
use App\Models\Sale;
use App\Models\SaleDetail;
use App\Models\SaleDetailBodega;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(){



        $this->middleware('auth');
        $this->middleware('can:product.index')->only(['index']);
        $this->middleware('can:product.create')->only(['create','store']);
        $this->middleware('can:product.edit')->only(['edit','update']);
        $this->middleware('can:product.show')->only(['show']);
        $this->middleware('can:product.destroy')->only(['destroy']);

        }


        public function reports(Product $product){



            $Mamba = Product::where('name','Mamba')
            ->where('stock','<=','50')
            ->get();

           

            $Coral = Product::where('name','Coral')
            ->where('stock','<=','50')
            ->get();

            $Anakena = Product::where('name','Anakena')
            ->where('stock','<=','50')
            ->get();

            $Suprema = Product::where('name','Suprema')
            ->where('stock','<=','50')
            ->get();

            $Crebel = Product::where('name','Crebel')
            ->where('stock','<=','50')
            ->get();



            $Crebel50Grs = Product::where('name','Crebel 50 Grs')
            ->where('stock','<=','50')
            ->get();

            $Chilote = Product::where('name','Chilote')
            ->where('stock','<=','50')
            ->get();


            $Surena = Product::where('name','Surena')
            ->where('stock','<=','50')
            ->get();

            $Versatil = Product::where('name','Versatil')
            ->where('stock','<=','50')
            ->get();

            $Suprema_40GR = Product::where('name','Suprema 40GR')
            ->where('stock','<=','50')
            ->get();

            $Baby_Maxi = Product::where('name','Baby Maxi')
            ->where('stock','<=','50')
            ->get();

            $Pintitas = Product::where('name','Pintitas')
            ->where('stock','<=','50')
            ->get();


            $Dulce_Algodon = Product::where('name','Dulce Algodon')
            ->where('stock','<=','50')
            ->get();


            $Ibis = Product::where('name','Ibis')
            ->where('stock','<=','50')
            ->get();


            $Algodon_100_Reginella = Product::where('name','Algodon 100% Reginella')
            ->where('stock','<=','50')
            ->get();


            $Sol = Product::where('name','Sol')
            ->where('stock','<=','50')
            ->get();

            $Tiara = Product::where('name','Tiara')
            ->where('stock','<=','50')
            ->get();


           


            $Dacolor = Product::where('name','Dacolor')
            ->where('stock','<=','50')
            ->get();


            $Dalai_Lana = Product::where('name','Dalai Lana')
            ->where('stock','<=','50')
            ->get();

            $Flora = Product::where('name','Flora')
            ->where('stock','<=','50')
            ->get();


            $Lurex = Product::where('name','Lurex')
            ->where('stock','<=','50')
            ->get();


            $Mamut = Product::where('name','Mamut')
            ->where('stock','<=','50')
            ->get();


            $Sultan = Product::where('name','Sultan')
            ->where('stock','<=','50')
            ->get();


            $Spray = Product::where('name','Spray')
            ->where('stock','<=','50')
            ->get();


            $Kinder_Bebe = Product::where('name','kinder Bebe')
            ->where('stock','<=','50')
            ->get();


            $Algodon_100_Reciclado = Product::where('name','Algodon Reciclado')
            ->where('stock','<=','50')
            ->get();


            $Algodon_MacrameMM= Product::where('name','Macrame 3MM')
            ->where('stock','<=','50')
            ->get();


            $Latina = Product::where('name','Latina')
            ->where('stock','<=','50')
            ->get();


            $Boom_Batik = Product::where('name','Boom Batik')
            ->where('stock','<=','50')
            ->get();

            $Esqui = Product::where('name','Esqui')
            ->where('stock','<=','50')
            ->get();

            $Chanille = Product::where('name','Chanille')
            ->where('stock','<=','50')
            ->get();

            $Trapito = Product::where('name','Trapito')
            ->where('stock','<=','50')
            ->get();

            $Super_Economica = Product::where('name','Super Economico')
            ->where('stock','<=','50')
            ->get();


            $Adora = Product::where('name','Adora')
            ->where('stock','<=','50')
            ->get();



            $Fresquita = Product::where('name','Fresquita')
            ->where('stock','<=','50')
            ->get();


            $Fresquita_M = Product::where('name','Fresquita M')
            ->where('stock','<=','50')
            ->get();


            $Macrame_500Grs = Product::where('name','Macrame 500 grs')
            ->where('stock','<=','50')
            ->get();

            $Nativa = Product::where('name','Nativa')
            ->where('stock','<=','50')
            ->get();

            $AlgodonColor = Product::where('name','Algodon Color')
            ->where('stock','<=','50')
            ->get();


            $Ideal40Grs = Product::where('name','Ideal 40 Grs')
            ->where('stock','<=','50')
            ->get();

            $TrapitoM = Product::where('name','Trapito M')
            ->where('stock','<=','50')
            ->get();

           // return dd($Suprema);
            return view('product.reports',compact('Suprema','Crebel','Chilote','Surena','Versatil','Suprema_40GR','Baby_Maxi',
            'Pintitas','Dulce_Algodon','Ibis','Algodon_100_Reginella','Sol','Tiara','Mamba','Dacolor','Dalai_Lana',
        'Flora','Lurex','Mamut','Sultan','Spray','Kinder_Bebe','Algodon_100_Reciclado','Algodon_MacrameMM',
        'Latina','Boom_Batik','Anakena','Coral','Chanille','Trapito','Super_Economica','Adora','Fresquita','Fresquita_M',
        'Macrame_500Grs','Nativa','AlgodonColor','Crebel50Grs','Ideal40Grs','TrapitoM'));
        }

    public function index(Request $request)
    {
        $buscar = $request->get('buscar');
        $products = Product::where('status',1)
        ->where('barcode','LIKE','%'.$buscar.'%')
        
        ->Orwhere('name','LIKE','%'.$buscar.'%')
        
        ->paginate();

       
        
        $Supremas = Product::where('name','Suprema')->sum('stock');
        $Crebel = Product::where('name','Crebel')->sum('stock');
        $Chilote = Product::where('name','Chilote')->sum('stock');
        $Surena = Product::where('name','Surena')->sum('stock');
        $Versatil = Product::where('name','Versatil')->sum('stock');
        $BabyMaxi = Product::where('name','Baby Maxi')->sum('stock');
        $Pintitas = Product::where('name','Pintitas')->sum('stock');
        $Dulce_Algodon = Product::where('name','Dulce Algodon')->sum('stock');
        $Ibis = Product::where('name','Ibis')->sum('stock');
        $Sol = Product::where('name','Sol')->sum('stock');
        $Tiara = Product::where('name','Tiara')->sum('stock');
        $Mamba = Product::where('name','Mamba')->sum('stock');
        $Dacolor = Product::where('name','Dacolor')->sum('stock');
        $Dalai_Lana = Product::where('name','Dalai Lana')->sum('stock');
        $Flora = Product::where('name','Flora')->sum('stock');
        $Lurex = Product::where('name','Lurex')->sum('stock');
        $Mamut = Product::where('name','Mamut')->sum('stock');
        $Spray = Product::where('name','Spray')->sum('stock');
        $Algodon_100_Reciclado = Product::where('name','Algodon Reciclado')->sum('stock');
        $Macrame3MM = Product::where('name','Macrame 3MM')->sum('stock');
        $Latina = Product::where('name','Latina')->sum('stock');
        $Boom_Batik = Product::where('name','Boom Batik')->sum('stock');
        $Anakena = Product::where('name','Anakena')->sum('stock');
        $Coral = Product::where('name','Coral')->sum('stock');
        $Chanille = Product::where('name','Chanille')->sum('stock');
        $Trapito = Product::where('name','Trapito')->sum('stock');
        $Super_Economica = Product::where('name','Super Economico')->sum('stock');
        $Adora = Product::where('name','Adora')->sum('stock');
        $Fresquita = Product::where('name','Fresquita')->sum('stock');
        $FresquitaM = Product::where('name','Fresquita M')->sum('stock');
        $Macrame500Grs = Product::where('name','Macrame 500 grs')->sum('stock');
        $Nativa = Product::where('name','Nativa')->sum('stock');
        $Crebel50Grs = Product::where('name','Crebel 50 Grs')->sum('stock');
        $AlgodonColor = Product::where('name','Algodon Color')->sum('stock');
       
        $Ideal40Grs = Product::where('name','Ideal 40 Grs')->sum('stock');
        $TrapitoM = Product::where('name','Trapito M')->sum('stock');
        
        $buscar2 = $request->get('buscar2');
        $saleTraslados = DB::table('bodegas')
        ->join('sale_detail_bodegas','sale_detail_bodegas.bodega_id','=','bodegas.id')
        ->join('sales','sales.id','=','sale_detail_bodegas.sale_id')
        ->select('sales.id as id','sale_detail_bodegas.bodega_id as producto',
        'bodegas.name as nombre','sales.total as total','bodegas.barcode as barcode')
        ->where('sales.status',10)
        ->where('bodegas.barcode','LIKE','%'.$buscar2.'%')   
        ->paginate();





        $Suprema = Product::where('name','Suprema')->sum('price');
        
        $buscar2 = $request->get('buscar2');
       $saleTraslados = Sale::where('status',10)
        ->where('id','LIKE','%'.$buscar2.'%')
        ->paginate();

        
       // return dd($Supremas);

        return view('product.index', compact('products','Supremas','Crebel','Chilote','Surena','Versatil','BabyMaxi',
       'Pintitas','Dulce_Algodon','Ibis','Sol','Tiara','Mamba','Dacolor','Dalai_Lana','Flora','Lurex','Algodon_100_Reciclado',
       'Mamut','Spray','Macrame3MM','Latina','Boom_Batik','Anakena','Coral','Chanille','Trapito','Super_Economica',
       'Adora','Fresquita','FresquitaM','Macrame500Grs','Nativa','AlgodonColor','Crebel50Grs','Ideal40Grs','TrapitoM','saleTraslados' ))
           ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        $product = new Product();

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


        return view('product.create', compact('product','most','mostrar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Product::$rules);

      //  $barcode = $request->color . ' ' . $request->category_id;

      $barcode = $request->barcode;

        $barcodearray = array('barcode' => $barcode);

        $product = collect($request->all());

        $product->put('barcode' , $barcode);


        $product = Product::create($product->all());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }



    public function showTraslados(Sale $sale)
    {
        $sale = Sale::find($sale->id);

        $sales_details = DB::table('sale_detail_bodegas')->where('sale_id', $sale->id)->get();

      
      
        $saleDetails = $sale->saleDetails;


        return view('product.showTraslados', compact('sale','sales_details','saleDetails'));
    }




    public function boleta(Sale $sale)
    {

      $subTotal = 0;
      $saleDetails = $sale->saleDetails;

      foreach ($saleDetails as $saleDetail) {

        $subTotal += $saleDetail->quantity*$saleDetail->precio ;
        $desc = $saleDetail->descuento;

      }


      $pdf = PDF::loadView('product.boleta',compact('sale','subTotal','saleDetails','desc'));
       // return $pdf->download('Reporte_de_venta_'.$sale->id.'.pdf');
        return $pdf->stream('informe.pdf');



    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product = Product::find($product->id);

        $most = DB::table('categories')
        ->select('id','name')
        ->get();

        $mostrar = DB::table('providers')
        ->select('id','name')
        ->get();

        return view('product.edit', compact('product','most','mostrar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        request()->validate(Product::$rules);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
