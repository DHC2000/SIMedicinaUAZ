<?php

namespace App\Http\Controllers;
use App\Models\datos_plan;
use App\Models\OfertaEducativa;
use App\Models\Materias;

use Illuminate\Http\Request;

class PublicInfo extends Controller
{
    //
    public function home(){

        $ofertas['ofertas'] = OfertaEducativa::select('id','oferta')->orderBy('oferta','asc')->get();
        return view('index',$ofertas);
    }

    public function info($id)
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
    //$pdf= Materias::select('pdf')->where('id_plan',$id)->where('id_semestre','11')->orderBy('materia','asc')->get();

    return view('ofertas.user_view',compact('plan','datos','s1','s2','s3','s4','s5','s6','s7','s8','s9','s0','sP'),$ofertas);
    }
}
