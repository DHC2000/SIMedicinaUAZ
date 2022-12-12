<?php

namespace App\Http\Controllers;

use App\Models\datos_plan;
use App\Models\OfertaEducativa;
use App\Models\Materias;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class DatosPlanController extends Controller
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
       return view('ofertas.show',$ofertas);


        /*
        $ofertas['ofertas'] = OfertaEducativa::all();
        $plan['plan'] = OfertaEducativa::where('id',$id)->get();
        $datos['datos'] = datos_plan::where('id_plan',$id)->get();
        return view('ofertas.show',['datos'=>$datos,'plan'=>$plan,'ofertas'=>$ofertas]);*/

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

        return view('datos_plan.create',$ofertas);


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
        $dataPlan= request()->except('_token');
        echo response()->json($dataPlan);
        datos_plan::insert($dataPlan);
        //return response()->json($dataPlan);
        //return redirect('DatosPlan/create');
        return redirect('OfertaEducativa');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datos_plan  $datos_plan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $ofertas['ofertas'] = OfertaEducativa::all();
      $plan['plan'] = OfertaEducativa::where('id',$id)->first();
      $datos['datos'] = datos_plan::where('id_plan',$id)->first();
    //  $s1= Materias::where('id_semestre','1')->orderBy('materia','asc')->get();
      $s1= Materias::where('id_plan',$id)->where('id_semestre','1')->orderBy('materia','asc')->get();
      $s2= Materias::where('id_plan',$id)->where('id_semestre','2')->orderBy('materia','asc')->get();
      $s3= Materias::where('id_plan',$id)->where('id_semestre','3')->orderBy('materia','asc')->get();
      $s4= Materias::where('id_plan',$id)->where('id_semestre','4')->orderBy('materia','asc')->get();
      $s5= Materias::where('id_plan',$id)->where('id_semestre','5')->orderBy('materia','asc')->get();
      $s6= Materias::where('id_plan',$id)->where('id_semestre','6')->orderBy('materia','asc')->get();
      $s7= Materias::where('id_plan',$id)->where('id_semestre','7')->orderBy('materia','asc')->get();
      $s8= Materias::where('id_plan',$id)->where('id_semestre','8')->orderBy('materia','asc')->get();
      $s9= Materias::where('id_plan',$id)->where('id_semestre','9')->orderBy('materia','asc')->get();
      $s0= Materias::where('id_plan',$id)->where('id_semestre','10')->orderBy('materia','asc')->get();
      $sP= Materias::where('id_plan',$id)->where('id_semestre','11')->orderBy('materia','asc')->get();

      return view('ofertas.show',compact('plan','datos','s1','s2','s3','s4','s5','s6','s7','s8','s9','s0','sP'),$ofertas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datos_plan  $datos_plan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ofertas['ofertas'] = OfertaEducativa::all();
        //$datos['datos'] = datos_plan::findOrFail($id);
        $plan['plan']=OfertaEducativa::where('id',$id)->get();
        $oferta['oferta']=$id;
        $datos['datos'] = datos_plan::where('id_plan',$id)->get();
        return view('datos_plan.edit',compact('datos','plan'),$plan,$datos,$ofertas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\datos_plan  $datos_plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datos_plan $datos_plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datos_plan  $datos_plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(datos_plan $datos_plan)
    {
        //
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showData($id)
    {
        //
/*
        $ofertas['ofertas']= OfertaEducativa::all();
        $plan = OfertaEducativa::where('id',$id)->first();
        $datos = datos_plan::where('id_plan',$id)->first();
        $s1= Materias::where('id_plan',$id)->where('id_semestre','1')->orderBy('materia','asc')->first();
*/

        $ofertas['ofertas'] = OfertaEducativa::all();
        $plan['plan'] = OfertaEducativa::where('id',$id)->first();
        $datos['datos'] = datos_plan::where('id_plan',$id)->first();
      //  $s1= Materias::where('id_semestre','1')->orderBy('materia','asc')->get();
      $s1= Materias::where('id_plan',$id)->where('id_semestre','1')->orderBy('materia','asc')->get();
      $s2= Materias::where('id_plan',$id)->where('id_semestre','2')->orderBy('materia','asc')->get();
      $s3= Materias::where('id_plan',$id)->where('id_semestre','3')->orderBy('materia','asc')->get();
      $s4= Materias::where('id_plan',$id)->where('id_semestre','4')->orderBy('materia','asc')->get();
      $s5= Materias::where('id_plan',$id)->where('id_semestre','5')->orderBy('materia','asc')->get();
      $s6= Materias::where('id_plan',$id)->where('id_semestre','6')->orderBy('materia','asc')->get();
      $s7= Materias::where('id_plan',$id)->where('id_semestre','7')->orderBy('materia','asc')->get();
      $s8= Materias::where('id_plan',$id)->where('id_semestre','8')->orderBy('materia','asc')->get();
      $s9= Materias::where('id_plan',$id)->where('id_semestre','9')->orderBy('materia','asc')->get();
      $s0= Materias::where('id_plan',$id)->where('id_semestre','10')->orderBy('materia','asc')->get();
      $sP= Materias::where('id_plan',$id)->where('id_semestre','11')->orderBy('materia','asc')->get();

      return view('ofertas.show',compact('plan','datos','s1','s2','s3','s4','s5','s6','s7','s8','s9','s0','sP'),$ofertas);

      //  $materias['materias']= Materias::where('id_plan',$id)->where('id_semestre','1')->orderBy('materia','asc')->first();

/*
        echo json_encode($ofertas);
        echo '<br>';
        echo '<br>';

        echo json_encode($plan);
        echo '<br>';
        echo '<br>';

        echo json_encode($datos);

        */
        /*
        $ofertas['ofertas'] = json_encode($ofertas);
        $plan['plan'] = json_encode($plan);
        $datos['datos'] = json_encode($datos);*/
        //echo $id;
        //echo "show data";

      //  dd($datos_plan);
      //return view('ofertas.show',['plan'=>$plan,'datos'=>$datos,'s1'=>$s1],$ofertas);
      //return view('ofertas.show',$plan,$datos,$s1,$ofertas);
      //return view('ofertas.show',compact('plan','datos','materias','ofertas'),$ofertas);
    }

}
