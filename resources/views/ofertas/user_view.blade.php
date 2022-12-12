@extends('layouts.app_user')
@section('content')
<div class="container mt-3 mb-3">

@foreach($plan as $p)

  <h1 class="mb-5 mt-5">{{$p->oferta ?? 'No se encontro el Plan'}}</h1>
@endforeach

@foreach($datos as $dato)
  <div class="card border-info">
      <div class="card-body border-info">

        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Objetivo</p>
                </div>
            </div>
          </div>
          <div class="col-md-9">
              <div class="border-info ">
                <textarea class="form-control" name="name" rows="8" cols="80">{{$dato->objetivo}}</textarea>
              </div>
          </div>
        </div>

      </div>
  </div>

  <div class="card border-info">
    <div class="card-body border-info">
        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Misión</p>
                </div>
            </div>
          </div>
            <div class="col-md-9">
                <div class="border-info ">
                  <textarea class="form-control" name="name" rows="8" cols="80">{{$dato->objetivo}}</textarea>
                </div>
            </div>
        </div>
      </div>
  </div>

  <div class="card border-info">
    <div class="card-body border-info">
        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Visión</p>
                </div>
            </div>
          </div>
            <div class="col-md-9">
                <div class="border-info ">
                  <textarea class="form-control" name="name" rows="8" cols="80">{{$dato->vision}}</textarea>
                </div>
            </div>
        </div>
      </div>
  </div>
  <div class="card border-info">
    <div class="card-body border-info">
        <div class="row">
          <div class="col-md-3" >
            <div class="">
                <div class="">
                  <p>Valores</p>
                </div>
            </div>
          </div>
            <div class="col-md-9 border-info">
              <textarea class="form-control" name="name" rows="8" cols="80">
                    {{$dato->valores}}
              </textarea>
            </div>
        </div>
      </div>
  </div>

  <div class="card border-info">
    <div class="card-body border-info">
        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Perfil de Ingreso</p>
                </div>
            </div>
          </div>
            <div class="col-md-9">
                <div class="border-info ">
                      <textarea class="form-control" name="name" rows="8" cols="80">{{$dato->perfil_in}}</textarea>
                </div>
            </div>
        </div>
      </div>
  </div>

  <div class="card border-info">
    <div class="card-body border-info">
        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Perfil de Egreso</p>
                </div>
            </div>
          </div>
            <div class="col-md-9">
                <div class="border-info ">
                  <textarea class="form-control" name="name" rows="8" cols="80">{{$dato->perfil_eg}}</textarea>
                </div>
            </div>
        </div>
      </div>
  </div>

  <div class="card border-info">
    <div class="card-body border-info">
        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Requisitos de Ingreso</p>
                </div>
            </div>
          </div>
            <div class="col-md-9">
                <div class="border-info ">
                  <textarea class="form-control" name="name" rows="8" cols="80">{{$dato->requisitos_in}}</textarea-->
                  <!--p>{{preg_replace("/\s\s+/"," ",$dato->requisitos_in)}}</p-->

                </div>
            </div>
        </div>
      </div>
  </div>

  <div class="card border-info">
    <div class="card-body border-info">
        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Requisitos de Egreso</p>
                </div>
            </div>
          </div>
            <div class="col-md-9">
                <div class="border-info ">
                  <!--textarea class="form-control" name="name" rows="8" cols="80">{{$dato->requisitos_eg}}</textarea-->
                  <p>{{preg_replace("/\s\s+/"," ",$dato->requisitos_eg)}}</p>
                </div>
            </div>
        </div>
      </div>
  </div>

  <div class="card border-info">
    <div class="card-body border-info">
        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Titulo a Obtener</p>
                </div>
            </div>
          </div>
            <div class="col-md-9">
                <div class="border-info ">
                      <p>{{$dato->titulo}}</p>
                </div>
            </div>
        </div>
      </div>
  </div>
@endforeach
  <div class="card border-info">
      <div class="card-body border-info">
          <div class="row">
            <div class="col-md-12">
              <div class="">
                    <p class="text-center">Plan de estudio</p>
              </div>
            </div>
          </div>
        </div>
  </div>

@if(isset($s1))
  <div class="card border-info">
    <div class="card-body border-info">
        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Primer Semestre</p>
                </div>
            </div>
          </div>

            <div class="col-md-9">
                <div class="border-info ">
                    <div class="">
                      <ul>
                        @foreach($s1 as $s1)
                        <li><a href="{{isset($s1->pdf)?asset('storage').'/'.$s1->pdf:''}}" target="_blank">{{$s1->materia}}</li></a>
                        @endforeach
                      </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
  @endif

  @if(isset($s2))
    <div class="card border-info">
      <div class="card-body border-info">
          <div class="row">
            <div class="col-md-3">
              <div class="">
                  <div class="">
                    <p>Segundo Semestre</p>
                  </div>
              </div>
            </div>

              <div class="col-md-9">
                  <div class="border-info ">
                      <div class="">
                        <ul>
                          @if(isset($s2))
                          @foreach($s2 as $s2)
                          <li><a href="{{isset($s2->pdf)?asset('storage').'/'.$s2->pdf:''}}" target="_blank">{{$s2->materia}}</li></a>
                          @endforeach
                          @endif
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
@endif

@if(isset($s3))
    <div class="card border-info">
      <div class="card-body border-info">
          <div class="row">
            <div class="col-md-3">
              <div class="">
                  <div class="">
                    <p>Tercer Semestre</p>
                  </div>
              </div>
            </div>

              <div class="col-md-9">
                  <div class="border-info ">
                      <div class="">
                        <ul>
                          @foreach($s3 as $s3)
                            @if(strlen($s3->materia) > 0)
                            <li><a href="{{isset($s3->pdf)?asset('storage').'/'.$s3->pdf:''}}" target="_blank">{{$s3->materia}}</li></a>
                              @endif
                            @endforeach
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
@endif

@if(isset($s4))
    <div class="card border-info">
      <div class="card-body border-info">
          <div class="row">
            <div class="col-md-3">
              <div class="">
                  <div class="">
                    <p>Cuarto Semestre</p>
                  </div>
              </div>
            </div>

              <div class="col-md-9">
                  <div class="border-info ">
                      <div class="">
                        <ul>
                          @foreach($s4 as $s4)
                            @if(strlen($s4->materia) > 0)
                            <li><a href="{{isset($s4->pdf)?asset('storage').'/'.$s4->pdf:''}}" target="_blank">{{$s4->materia}}</li></a>
                            @endif
                          @endforeach
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
@endif

@if(isset($s5))
    <div class="card border-info">
      <div class="card-body border-info">
          <div class="row">
            <div class="col-md-3">
              <div class="">
                  <div class="">
                    <p>Quinto Semestre</p>
                  </div>
              </div>
            </div>

              <div class="col-md-9">
                  <div class="border-info ">
                      <div class="">
                        <ul>
                          @foreach($s5 as $s5)
                            @if(strlen($s5->materia) > 0)
                          <li><a href="{{isset($s5->pdf)?asset('storage').'/'.$s5->pdf:''}}" target="_blank">{{$s5->materia}}</li></a>
                            @endif
                          @endforeach
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
@endif

@if(isset($s6))
     <div class="card border-info">
      <div class="card-body border-info">
          <div class="row">
            <div class="col-md-3">
              <div class="">
                  <div class="">
                    <p>Sexto Semestre</p>
                  </div>
              </div>
            </div>

              <div class="col-md-9">
                  <div class="border-info ">
                      <div class="">
                        <ul>
                          @foreach($s6 as $s6)
                            @if(strlen($s6->materia) > 0)
                          <li><a href="{{isset($s6->pdf)?asset('storage').'/'.$s6->pdf:''}}" target="_blank">{{$s6->materia}}</li></a>
                            @endif
                          @endforeach
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>

@endif

@if(isset($s7))
    <div class="card border-info">
      <div class="card-body border-info">
          <div class="row">
            <div class="col-md-3">
              <div class="">
                  <div class="">
                    <p>Septimo Semestre</p>
                  </div>
              </div>
            </div>

              <div class="col-md-9">
                  <div class="border-info ">
                      <div class="">
                        <ul>
                          @foreach($s7 as $s7)
                            @if(strlen($s7->materia) > 0)
                          <li><a href="{{isset($s7->pdf)?asset('storage').'/'.$s7->pdf:''}}" target="_blank">{{$s7->materia}}</li></a>
                            @endif
                          @endforeach
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>

@endif

@if(isset($s8))
    <div class="card border-info">
      <div class="card-body border-info">
          <div class="row">
            <div class="col-md-3">
              <div class="">
                  <div class="">
                    <p>Octavo Semestre</p>
                  </div>
              </div>
            </div>

              <div class="col-md-9">
                  <div class="border-info ">
                      <div class="">
                        <ul>
                          @foreach($s8 as $s8)
                            @if(strlen($s8->materia) > 0)
                          <li><a href="{{isset($s8->pdf)?asset('storage').'/'.$s8->pdf:''}}" target="_blank">{{$s8->materia}}</li></a>
                            @endif
                          @endforeach
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
@endif

@if(isset($s9))
    <div class="card border-info">
      <div class="card-body border-info">
          <div class="row">
            <div class="col-md-3">
              <div class="">
                  <div class="">
                    <p>Noveno Semestre</p>
                  </div>
              </div>
            </div>

              <div class="col-md-9">
                  <div class="border-info ">
                      <div class="">
                        <ul>
                          @foreach($s9 as $s9)
                            @if(strlen($s9->materia) > 0)
                          <li><a href="{{isset($s9->pdf)?asset('storage').'/'.$s9->pdf:''}}" target="_blank">{{$s9->materia}}</li></a>
                            @endif
                          @endforeach
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
@endif

@if(isset($s0))
    <div class="card border-info">
      <div class="card-body border-info">
          <div class="row">
            <div class="col-md-3">
              <div class="">
                  <div class="">
                    <p>Decimo Semestre</p>
                  </div>
              </div>
            </div>

              <div class="col-md-9">
                  <div class="border-info ">
                      <div class="">
                        <ul>
                          @foreach($s0 as $s0)
                            @if(strlen($s0->materia) > 0)
                          <li><a href="{{isset($s0->pdf)?asset('storage').'/'.$s0->pdf:''}}" target="_blank">{{$s0->materia}}</li></a>
                          @endif
                        @endforeach
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>

@endif

@if(isset($sP))

    <div class="card border-info">
      <div class="card-body border-info">
          <div class="row">
            <div class="col-md-3">
              <div class="">
                  <div class="">
                    <p>PAC</p>
                  </div>
              </div>
            </div>

              <div class="col-md-9">
                  <div class="border-info ">
                      <div class="">
                        <ul>
                          @foreach($sP as $sP)
                            @if(strlen($sP->materia) > 0)
                          <li><a href="{{isset($sP->pdf)?asset('storage').'/'.$sP->pdf:''}}" target="_blank">{{$sP->materia}}</li></a>
                          @endif
                        @endforeach
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
@endif

@foreach($datos as $dato)
  <div class="card border-info">
      <div class="card-body border-info">

        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Tipo de Sistema</p>
                </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="border-info ">
                  <div class="">
                    <p>{{$dato->sistema}}</p>
                  </div>
              </div>
          </div>
        </div>

      </div>
  </div>

  <div class="card border-info">
    <div class="card-body border-info">
        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Modalidad</p>
                </div>
            </div>
          </div>
            <div class="col-md-9">
                <div class="border-info ">
                    <div class="">
                      <p>{{$dato->modalidad}}</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>

  <div class="card border-info">
    <div class="card-body border-info">
        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Grado Academico</p>
                </div>
            </div>
          </div>
            <div class="col-md-9">
                <div class="border-info ">
                    <div class="">
                      <p>{{$dato->grado}}</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>

  <div class="card border-info">
    <div class="card-body border-info">
        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Responsable del Programa</p>
                </div>
            </div>
          </div>
            <div class="col-md-9">
                <div class="border-info ">
                    <div class="">
                      <p>{{$dato->responsable}}</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
  <div class="card border-info">
    <div class="card-body border-info">
        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Correo del Responsable</p>
                </div>
            </div>
          </div>
            <div class="col-md-9">
                <div class="border-info ">
                    <div class="">
                      <p>{{$dato->correo}}</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>

  <div class="card border-info">
    <div class="card-body border-info">
        <div class="row">
          <div class="col-md-3">
            <div class="">
                <div class="">
                  <p>Telefono del Responsable</p>
                </div>
            </div>
          </div>
            <div class="col-md-9">
                <div class="border-info ">
                    <div class="">
                      <p>{{$dato->telefono}}</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
@endforeach
</div>
@endsection
@include('includes.footerBST')
