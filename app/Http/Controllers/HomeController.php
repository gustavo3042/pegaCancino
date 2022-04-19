<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Bodega;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:home.index')->only('index');
        $this->middleware('can:home.indexPalmeras')->only('indexPalmeras');
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comprasmes=DB::select('SELECT month(c.date) as mes, sum(c.total) as totalmes from purchases c where c.status="2" group by month(c.date) order by month(c.date) desc limit 12');
        $ventasmes=DB::select('SELECT month(v.date) as mes, sum(v.total) as totalmes from sales v where v.status="1" group by month(v.date) order by month(v.date) desc limit 12');
  
  
        // $comprasmes=DB::select('SELECT monthname(c.purchase_date) as mes, sum(c.total) as totalmes from purchases c where c.status="VALID" group by monthname(c.purchase_date) order by month(c.purchase_date) desc limit 12');
        // $ventasmes=DB::select('SELECT monthname(v.sale_date) as mes, sum(v.total) as totalmes from sales v where v.status="VALID" group by monthname(v.sale_date) order by month(v.sale_date) desc limit 12');
  
        $ventasdia=DB::select('SELECT DATE_FORMAT(v.date,"%d/%m/%Y") as dia, sum(v.total) as totaldia from sales v where v.status="1" group by v.date order by day(v.date) desc limit 15');
        $totales=DB::select('SELECT (select ifnull(sum(c.total),0) from purchases c where DATE(c.date)=curdate() and c.status="2") as totalcompra, (select ifnull(sum(v.total),0) from sales v where DATE(v.date)=curdate() and v.status="1") as totalventa');
  
        $productosvendidos=DB::select('SELECT p.barcode as code,
        sum(dv.quantity) as quantity, p.name as name , p.id as id , p.stock as stock from products p
        inner join sale_details dv on p.id=dv.product_id
        inner join sales v on dv.sale_id=v.id where v.status="1"
        and year(v.date)=year(curdate())
        group by p.barcode ,p.name, p.id , p.stock order by sum(dv.quantity) desc limit 10');
  
      // return dd($totales);
  
       return view('home', compact( 'comprasmes', 'ventasmes', 'ventasdia', 'totales', 'productosvendidos'));
    }


    public function indexPalmeras(){

        $comprasmes=DB::select('SELECT month(c.date) as mes, sum(c.total) as totalmes from purchases c where c.status="4" group by month(c.date) order by month(c.date) desc limit 12');
        $ventasmes=DB::select('SELECT month(v.date) as mes, sum(v.total) as totalmes from sales v where v.status="3" group by month(v.date) order by month(v.date) desc limit 12');
  
  
        // $comprasmes=DB::select('SELECT monthname(c.purchase_date) as mes, sum(c.total) as totalmes from purchases c where c.status="VALID" group by monthname(c.purchase_date) order by month(c.purchase_date) desc limit 12');
        // $ventasmes=DB::select('SELECT monthname(v.sale_date) as mes, sum(v.total) as totalmes from sales v where v.status="VALID" group by monthname(v.sale_date) order by month(v.sale_date) desc limit 12');
  
        $ventasdia=DB::select('SELECT DATE_FORMAT(v.date,"%d/%m/%Y") as dia, sum(v.total) as totaldia from sales v where v.status="3" group by v.date order by day(v.date) desc limit 15');
        $totales=DB::select('SELECT (select ifnull(sum(c.total),0) from purchases c where DATE(c.date)=curdate() and c.status="4") as totalcompra, (select ifnull(sum(v.total),0) from sales v where DATE(v.date)=curdate() and v.status="3") as totalventa');
  
        $productosvendidos=DB::select('SELECT p.barcode as code,
        sum(dv.quantity) as quantity, p.name as name , p.id as id , p.stock as stock from bodegas p
        inner join sale_details dv on p.id=dv.product_id
        inner join sales v on dv.sale_id=v.id where v.status="3"
        and year(v.date)=year(curdate())
       
        group by p.barcode ,p.name, p.id , p.stock order by sum(dv.quantity) desc limit 10');
  
      // return dd($totales);
  
       return view('indexPalmeras', compact( 'comprasmes', 'ventasmes', 'ventasdia', 'totales', 'productosvendidos'));

    }

    public function noAdmin(){


        return view('home');
    }



    public function show($id)
    {
        $product = Product::find($id);

        return view('showProduct', compact('product'));
    }



    


    public function showBodegas($id)
    {
        $bodega = Bodega::find($id);

        return view('showBodegas', compact('bodega'));
    }
}
