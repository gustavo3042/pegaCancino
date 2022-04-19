<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use Carbon\Carbon;

class ReportController extends Controller
{
    

    public function __construct(){

        $this->middleware('auth');
        $this->middleware('can:reports.day')->only(['reports_day']);
        $this->middleware('can:reports.date')->only(['reports_date']);
        $this->middleware('can:reports.dayPalmera')->only(['reports_dayPalmera']);
        $this->middleware('can:reports.datePalmera')->only(['reports_datePalmera']);
    
      }
    
    
    
      public function reports_day(){
            $sales = Sale::WhereDate('date', Carbon::today('America/Santiago'))
            ->Where('status',1)->get();
            $total = $sales->sum('total');
            $totalSinDesc = $sales->where('status',1)->sum('totalSinDesc');
            return view('report.reports_day', compact('sales', 'total','totalSinDesc'));
        }
        public function reports_date(){
            $sales = Sale::whereDate('date', Carbon::today('America/Santiago'))
           ->where('status',1)
            ->get();
            $total = $sales->where('status',1)->sum('total');
            return view('report.reports_date', compact('sales', 'total'));
        }
        public function report_results(Request $request){
            $fi = $request->fecha_ini. ' 00:00:00';
            $ff = $request->fecha_fin. ' 23:59:59';
            $sales = Sale::whereBetween('date', [$fi, $ff])
            ->where('status',1)
            ->get();
            $total = $sales->sum('total');
            return view('report.reports_date', compact('sales', 'total'));
        }


        public function reports_dayPalmera(){
            $sales = Sale::WhereDate('date', Carbon::today('America/Santiago'))
            ->where('status',3)->get();
            $total = $sales->sum('total');
            $totalSinDesc = $sales->where('status',3)->sum('totalSinDesc');
            return view('report.report_dayPalmera', compact('sales', 'total','totalSinDesc'));
        }


        public function reports_datePalmera(){
            $sales = Sale::whereDate('date', Carbon::today('America/Santiago'))
            ->where('status',3)
            ->get();
            $total = $sales->where('status',3)->sum('total');
            return view('report.report_datePalmera', compact('sales', 'total'));
        }
        public function report_resultsPalmera(Request $request){
            $fi = $request->fecha_ini. ' 00:00:00';
            $ff = $request->fecha_fin. ' 23:59:59';
            $sales = Sale::whereBetween('date', [$fi, $ff])
            ->where('status',3)
            ->get();
            $total = $sales->sum('total');
            return view('report.report_datePalmera', compact('sales', 'total'));
        }


}
