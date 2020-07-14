<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $sql = 'select * from veiculos limit 8';

        $veiculo=\DB::select($sql);


        $sqls = 'select * from veiculos where id>8 limit 8';

        $veiculoT=\DB::select($sqls);
                    
        return view('home',compact('veiculo','veiculoT'));
       
        
    }
}
