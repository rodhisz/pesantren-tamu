<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tamu = Tamu::orderBy('created_at','desc')->get()->take(5);

        $tamus = Tamu::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("month(created_at)"))
            ->pluck('count');

        $months = Tamu::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');

        //dd($months);
        $datas = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        foreach ($months as $index => $month) {
            $datas[$month - 1] = $tamus[$index];
        }

        return view('dashboard', compact('tamu','tamus','datas'));
    }

    public function dataTamu()
    {
        $tamu = Tamu::orderBy('created_at','desc')->get();

        return view('datatamu', compact('tamu'));
    }
}
