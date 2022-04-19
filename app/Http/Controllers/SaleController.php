<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;
use App\Models\Bodega;

use Barryvdh\DomPDF\Facade as PDF;

use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\EscopsImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;
/**
 * Class SaleController
 * @package App\Http\Controllers
 */
class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct(){


        $this->middleware('auth');
        $this->middleware('can:sale.index')->only('index');
        $this->middleware('can:sale.boleta')->only('boleta');
        $this->middleware('can:sale.despacho')->only('despacho');
        $this->middleware('can:sale.boleta2')->only('boleta2');
        $this->middleware('can:sale.despacho2')->only('despacho2');

     }


     public function prueba()
     {

return view('sale.prueba');

     }
    public function index(Request $request)
    {

      $buscar = $request->get('buscar');
      $buscar2 = $request->get('buscar2');
      $buscar3 = $request->get('buscar3');
      $buscar4 = $request->get('buscar4');

        $sales = Sale::where('status',1)
        ->where('date','LIKE','%'.$buscar.'%')
        ->paginate();

        $salesPalmeras = Sale::where('status',3)
        ->where('date','LIKE','%'.$buscar2.'%')
        ->paginate();

      

        $salaV1 = DB::table('products')
        ->join('sale_details','sale_details.product_id','=','products.id')
        ->join('sales','sales.id','=','sale_details.sale_id')
        ->select('sales.id as id','sale_details.product_id as producto',
        'products.name as nombre','sales.total as total','products.barcode as barcode')
        ->where('sales.status',5)
        ->where('products.barcode','LIKE','%'.$buscar3.'%')   
        ->paginate();




        $salaV2 = DB::table('bodegas')
        ->join('sale_detail_bodegas','sale_detail_bodegas.bodega_id','=','bodegas.id')
        ->join('sales','sales.id','=','sale_detail_bodegas.sale_id')
        ->select('sales.id as id','sale_detail_bodegas.bodega_id as producto',
        'bodegas.name as nombre','sales.total as total','bodegas.barcode as barcode')
        ->where('sales.status',6)
        ->where('bodegas.barcode','LIKE','%'.$buscar4.'%')   
        ->paginate();



        

        return view('sale.index', compact('sales','salesPalmeras','salaV1','salaV2'))
            ->with('i', (request()->input('page', 1) - 1) * $sales->perPage());
    }


    public function indexPalmeras()
    {
        $sales = Sale::where('status',3)->paginate();

        return view('sale.index', compact('sales'))
            ->with('i', (request()->input('page', 1) - 1) * $sales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sale = new Sale();
        return view('sale.create', compact('sale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sale::$rules);

        $sale = Sale::create($request->all());

        return redirect()->route('sales.index')
            ->with('success', 'Sale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        $sale = Sale::find($sale->id);

        $sales_details = DB::table('sale_details')->where('sale_id', $sale->id)->get();

      
        $saleDetails = $sale->saleDetails;


        return view('sale.show', compact('sale','sales_details','saleDetails'));
    }



    public function showSalaPrat(Sale $sale,$producto)
    {
        $sale = Sale::find($sale->id);

        $sales_details = DB::table('sale_details')->where('sale_id', $sale->id)->get();

      
        $saleDetails = $sale->saleDetails;

       // return dd($producto);
        return view('sale.salaVentaShow', compact('sale','sales_details','saleDetails','producto'));
    }


    public function showSalaPalmeras(Sale $sale,$producto)
    {
        $sale = Sale::find($sale->id);

        $sales_details = DB::table('sale_detail_bodegas')->where('sale_id', $sale->id)->get();

      
        $saleDetailsBodegas = $sale->saleDetailsBodega;


        return view('sale.salaVentaShowPalmeras', compact('sale','sales_details','saleDetailsBodegas','producto'));
    }


    public function showPalmeras(Sale $sale)
    {
        $sale = Sale::find($sale->id);

        $sales_details = DB::table('sale_detail_bodegas')->where('sale_id', $sale->id)->get();

      
      
        $saleDetails = $sale->saleDetailsBodega;


        return view('sale.showPalmeras', compact('sale','sales_details','saleDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale = Sale::find($id);

        return view('sale.edit', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sale $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        request()->validate(Sale::$rules);

        $sale->update($request->all());

        return redirect()->route('sales.index')
            ->with('success', 'Sale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {       
        $sales_details = DB::table('sale_details')->where('sale_id', $id)->get();

        


        dd($sales_details);
        // $sale = Sale::find($id)->delete();

        return redirect()->route('sales.index')
            ->with('success', 'Sale deleted successfully');
    }


    public function addSale()   
    {

        $categories = Category::pluck('name', 'id');

        return view('sale.addSale', compact('categories'));

    }



    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }



    public function boleta(Sale $sale)
    {

      $subTotal = 0;
      $saleDetails = $sale->saleDetails;

      foreach ($saleDetails as $saleDetail) {

        $subTotal += $saleDetail->quantity*$saleDetail->precio ;
        $desc = $saleDetail->descuento;

      }


      $pdf = PDF::loadView('sale.boleta',compact('sale','subTotal','saleDetails','desc'));
       // return $pdf->download('Reporte_de_venta_'.$sale->id.'.pdf');
        return $pdf->stream('informe.pdf');



    }



    public function boleta2(Sale $sale)
    {

      $subTotal = 0;
      $saleDetails = $sale->saleDetailsBodega;

      
      foreach ($saleDetails as $saleDetail) {

        $subTotal += $saleDetail->quantity*$saleDetail->precio ;
        $desc = $saleDetail->descuento;
      }


      $pdf = PDF::loadView('sale.boleta2',compact('sale','subTotal','saleDetails','desc'));
       // return $pdf->download('Reporte_de_venta_'.$sale->id.'.pdf');
        return $pdf->stream('informe.pdf');


    }


    public function despacho(Sale $sale)
    {

      $subTotal = 0;
      $saleDetails = $sale->saleDetails;

      foreach ($saleDetails as $saleDetail) {

        $subTotal += $saleDetail->quantity*$saleDetail->precio;
        $desc = $saleDetail->descuento;
      }


      $pdf = PDF::loadView('sale.despacho',compact('sale','subTotal','saleDetails','desc'));
      //  return $pdf->download('Reporte_de_venta_'.$sale->id.'.pdf');

      return $pdf->stream('informe.pdf');

    }

    public function despacho2(Sale $sale)
    {

      $subTotal = 0;
      $saleDetails = $sale->saleDetailsBodega;

      foreach ($saleDetails as $saleDetail) {

        $subTotal += $saleDetail->quantity*$saleDetail->precio ;
        $desc = $saleDetail->descuento;

      }


      $pdf = PDF::loadView('sale.despacho2',compact('sale','subTotal','saleDetails','desc'));
      //  return $pdf->download('Reporte_de_venta_'.$sale->id.'.pdf');
      return $pdf->stream('informe.pdf');


    }


    public function print(Sale $sale){


        
      

        


        try {
  
  
          $subTotal = 0;
          $saleDetails = $sale->saleDetails;
  
          foreach ($saleDetails as $saleDetail) {
  
            $subTotal += $saleDetail->quantity*$saleDetail->price-$saleDetail->quantity*$saleDetail->price*$saleDetail->discount/100;
  
         }

          
  

  
            $printer_name = "TM-T20IIIL";
  
  
            $connector = new WindowsPrintConnector($printer_name);
           // $profile = CustomCapabilityProfile::getInstance();
            $printer = new Printer($connector);
            $printer->text("€ 9,95\n");
  
            $printer->cut();
            $printer->close();
  
              return redirect()->back();
  
        } catch (\Exception $e) {
  
            return redirect()->back();
  
        }
  
  


  /*

$nombreImpresora = "TMUSB001";
$connector = new WindowsPrintConnector($nombreImpresora);
//$profile = CustomCapabilityProfile::getInstance();
$impresora = new Printer($connector);
$impresora->setJustification(Printer::JUSTIFY_CENTER);
$impresora->setTextSize(2, 2);
$impresora->text("Imprimiendo\n");
$impresora->text("ticket\n");
$impresora->text("desde\n");
$impresora->text("Laravel\n");
$impresora->setTextSize(1, 1);
$impresora->text("https://parzibyte.me");
$impresora->feed(5);
$impresora->close();
  */




  
      }


      public function print2(){


        return null;


      }

    
}
