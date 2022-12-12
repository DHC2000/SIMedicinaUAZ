@extends('layouts.app_admin')
@section('content')
<div class="container mt-3 mb-3">
  <div class="card card-body">
      <form action="{{url('CargaAcademica')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
              <label for="inputPlanDeEstudio">Carga Academica</label>
                    <div class="row">
                      <select id="carga_plan" class="for-group col-4" name="id_plan">
                        <option selected>PLAN DE ESTUDIOS</option>
                        @foreach($ofertas as $plan)
                        <option value="{{$plan->id}}" >{{$plan->oferta}}</option>
                        @endforeach
                      </select>

                        <select class="for-group col-4" name="id_semestre">
                            <option selected>SEMESTRE</option>
                            @foreach($semestres as $semestre)
                            <option value="{{$semestre->id}}" >{{$semestre->semestre}}</option>
                            @endforeach
                          </select>
                          <div class="for-group col-1">
                             <button type="button" class="btn btn-outline-info create-semestre" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button>
                          </div>

                          <div class="for-group col-3">
                                <input type="text" class="form-control" placeholder="Materia" name="materia" required>
                          </div>

                          <div class="for-group col-6 mt-3">
                                <input type="file" class="form-control" placeholder="Documento pdf" name="pdf" required>
                          </div>
                        </div>
                  </div>
                  <button type="submit" class="btn btn-primary mb-2 mt-3">Guardar</button>
      </form>
  </div>
  </div>
  @include('semestre.modal_semestre')
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
