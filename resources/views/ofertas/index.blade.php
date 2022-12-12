@extends('layouts.app_admin')
@section('content')
<h1>Planes de Estudio</h1>

@foreach($ofertas as $oferta)
<h5>{{$oferta->oferta}}</h5>
   <form class="" action="{{ url('/OfertaEducativa/'.$oferta->id )}}" method="POST">
     @csrf
     {{method_field('DELETE')}}
         <button class="dropdown-item" type="submit" name="" onclick="return confirm('Quieres eliminar este registro?')">Eliminar</button>
   </form>
   <a href="{{ url('/DatosPlan/'.$oferta->implode('id').'/edit')}}">Editar</a>
   <br>
@endforeach
@endsection
@include('includes.footerBST')
