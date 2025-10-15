<?php

namespace App\Http\Controllers\Visitor;

use App\Models\Visitor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use DateTime;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $visitors = Visitor::select(DB::raw('DATE_FORMAT(created_at, "%Y-%b-%d") as date'), DB::raw('count(*) as total'))->where('date', '>', today()->subMonth())->groupBy('date')->get();
        $visitors = DB::table('shetabit_visits')->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total'))
        ->groupBy('date')
        ->get();

        return $visitors;
        
        $chart_data = array();
        foreach ($visitors as $data)
        {
            // return $data;
            $ymd = DateTime::createFromFormat('Y-m-d', $data->date);
            array_push($chart_data, array($ymd->format('d.m.Y'), $data->total));
        }

        return view('visitor.dashboard', compact(['visitors', 'chart_data']));
    }
}