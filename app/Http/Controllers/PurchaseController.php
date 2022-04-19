<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Models\Provider;
use Barryvdh\DomPDF\Facade as PDF; //importamos aqui con este codigo la utilizacion de pdf
/**
 * Class PurchaseController
 * @package App\Http\Controllers
 */
class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){


        
    $this->middleware('auth');
    $this->middleware('can:purchase.index')->only(['index']);
    $this->middleware('can:purchase.create')->only(['create','store']);
   
    $this->middleware('can:purchase.edit')->only(['edit','update']);
   
   

     $this->middleware('can:purchase.show')->only(['show']);

    }


    public function index(Request $request)
    {

        $buscar = $request->get('buscar');
       
        $purchases = Purchase::where('status',2)

        
        ->where('created_at','LIKE','%'.$buscar.'%')
        
        ->paginate();

        $buscar2 = $request->get('buscar2');
        $purchasePalmeras = Purchase::where('status',4)
        ->where('created_at','LIKE','%'.$buscar2.'%')
        ->paginate();

        return view('purchase.index', compact('purchases','purchasePalmeras'))
            ->with('i', (request()->input('page', 1) - 1) * $purchases->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $purchase = new Purchase();
        return view('purchase.create', compact('purchase'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Purchase::$rules);

        $purchase = Purchase::create($request->all());

        return redirect()->route('purchases.index')
            ->with('success', 'Purchase created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        $purchase = Purchase::find($purchase->id);

        $purchaseDetails = $purchase->purchaseDetails;

        //$provider = DB::table('purchase')
        

        return view('purchase.show', compact('purchase','purchaseDetails'));

    }


    public function show2(Purchase $purchase)
    {
        $purchase = Purchase::find($purchase->id);

        $purchaseDetails = $purchase->purchaseDetailBodega;

        //$provider = DB::table('purchase')
        

        return view('purchase.show2', compact('purchase','purchaseDetails'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchase = Purchase::find($id);

        return view('purchase.edit', compact('purchase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Purchase $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        request()->validate(Purchase::$rules);

        $purchase->update($request->all());

        return redirect()->route('purchases.index')
            ->with('success', 'Purchase updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $purchase = Purchase::find($id)->delete();

        return redirect()->route('purchases.index')
            ->with('success', 'Purchase deleted successfully');
    }



    public function pdf(Purchase $purchase){

        $subTotal = 0;
        $purchaseDetails = $purchase->purchaseDetails; // con purchaseDetails accedo a todos los datos q estan relacionados con la tabla pruchase en este caso es purchaseDetails
  
        foreach ($purchaseDetails as $purchaseDetail) {
  
          $subTotal += $purchaseDetail->quantity * $purchaseDetail->price;
  
        }
  
        $pdf = PDF::loadView('purchase.pdf',compact('purchase','subTotal','purchaseDetails'));
          return $pdf->download('Reporte_de_compra_'.$purchase->id.'.pdf');
  
  
      }


      public function pdf2(Purchase $purchase){

        $subTotal = 0;
        $purchaseDetails = $purchase->purchaseDetailBodega; // con purchaseDetails accedo a todos los datos q estan relacionados con la tabla pruchase en este caso es purchaseDetails
  
        foreach ($purchaseDetails as $purchaseDetail) {
  
          $subTotal += $purchaseDetail->quantity * $purchaseDetail->price;
  
        }
  
        $pdf = PDF::loadView('purchase.pdf2',compact('purchase','subTotal','purchaseDetails'));
          return $pdf->download('Reporte_de_compra_'.$purchase->id.'.pdf');
  
  
      }
}
