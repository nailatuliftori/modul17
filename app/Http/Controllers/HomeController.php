<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\EmployeesChart;

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
    // public function index()
    // {
    //     $pageTitle = 'home';
    //     return view('home', ['pageTitle' => $pageTitle]);
    // }
    public function index(EmployeesChart $chart)
        {
            $pageTitle = 'Home';
            return view('home',[
                   'pageTitle' => $pageTitle, 
                   'chart' => $chart->build()
            ]);
       
        }   

    // public function login()
    // {
    //     return redirect()->route('login');
    // }
}