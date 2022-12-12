<?php

namespace App\Http\Controllers;

use App\Models\Materias;
use App\Models\OfertaEducativa;
use App\Models\Semeste;

use Illuminate\Http\Request;

class MateriasController extends Controller
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
    public function index()
    {
        //
        $ofertas['ofertas'] = OfertaEducativa::all();
        $semestres['semestres']=Semeste::all();

        //dd($semestres);
        //return view('carga_academica.index',['semestres'=>$semestres,'ofertas'=>$ofertas]);
        return view('carga_academica.index',$semestres,$ofertas);

        //dd($semestres);
      //  dd($ofertas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $carga= request()->except('_token');
        //$disk='public';


        if($request->hasFile('pdf')){
          $doc=$request->file('pdf');
          //$name='pdf'.time().'.'.$doc->guessExtension();
          //$rute=(public_path().'/Documents/'.$doc->getClientOriginalName());
          if($doc->guessExtension()=='pdf'){
            $carga['pdf']=$request->file('pdf')->store('uploads','public');
            //$doc->move(public_path().'/Documents/',$doc->getClientOriginalName());

          //  $doc->storeAs('',$doc->getClientOriginalName(),$disk);
          //  copy($doc,$rute);
            Materias::insert($carga);

          }else {
            dd("El documento no es PDF");
          }
          //$doc->move(puclic_path().'/Documents/'.$doc->getClientOriginalName())
        }
        // echo response()->json($carga);
        //return response()->json($carga);
        return redirect("OfertaEducativa");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function show(Materias $materias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function edit(Materias $materias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materias $materias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materias $materias)
    {
        //
    }
}
