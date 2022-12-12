<?php

namespace App\Http\Controllers;

use App\Models\OfertaEducativa;
use Illuminate\Http\Request;


class OfertaEducativaController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $ofertas['ofertas'] = OfertaEducativa::select('id','oferta')->orderBy('oferta','asc')->get();
      //  $ofertas['ofertas'] = json_encode($ofertas);
        //$ofertas['ofertas'] = (object)$ofertas;
      //  dd($ofertas);
      //return view('index',$ofertas);

        return view('ofertas.index',$ofertas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ofertas['ofertas'] = OfertaEducativa::all();
        return view('ofertas.create',$ofertas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$dataOferta = request()->all();
        $dataOferta = request()->except('_token');
        OfertaEducativa::insert($dataOferta);

        //return response()->json($dataOferta);
        return redirect('DatosPlan/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OfertaEducativa  $ofertaEducativa
     * @return \Illuminate\Http\Response
     */
    public function show(OfertaEducativa $ofertaEducativa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OfertaEducativa  $ofertaEducativa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ofertas['ofertas'] = OfertaEducativa::all();
        $oferta['oferta'] = OfertaEducativa::findOrFail($id);
        return view('ofertas.edit', compact('oferta'),$ofertas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OfertaEducativa  $ofertaEducativa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $oferta['oferta'] = request()->except(['_token','_method']);
        OfertaEducativa::where('id','=',$id)->update($oferta);
        $ofertas['ofertas'] = OfertaEducativa::all();
        return view('ofertas.index',$ofertas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfertaEducativa  $ofertaEducativa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$plan = OfertaEducativa::find($ofertaEducativa)->delete();
        OfertaEducativa::destroy($id);
        return redirect('OfertaEducativa');
    }

  
}
