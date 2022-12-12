<?php

namespace App\Http\Controllers;
use App\Models\OfertaEducativa;


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
        //return view('home');
        $ofertas['ofertas'] = OfertaEducativa::select('id','oferta')->orderBy('oferta','asc')->get();
        return view('ofertas.index',$ofertas);


    }
}
