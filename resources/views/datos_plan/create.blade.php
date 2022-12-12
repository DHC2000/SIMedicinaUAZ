@extends('layouts.app_admin')

@section('content')
<div class="container mt-3 mb-3">

      <form action="{{ url('DatosPlan') }}" method="POST">

                   <div class="row form-group ">
                       <label for="inputState">Plan de Estudio</label>
                       <div class="col-md-11">
                           <select id="select_plan" class="form-control" name="id_plan">
                             <option class="" selected >Seleccionar...</option>
                             @foreach($ofertas as $oferta)
                                  <option value="{{ $oferta->id }}">{{$oferta->oferta}}</option>
                                @endforeach
                           </select>
                       </div>
                       <div class="for-group col-md-1">
                         <button type="button" class="btn btn-outline-info create-plan" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button>
                       </div>
                     </div>
        @csrf
          @include('datos_plan.form')
      </form>
</div>
@include('datos_plan.modal_plan');
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
