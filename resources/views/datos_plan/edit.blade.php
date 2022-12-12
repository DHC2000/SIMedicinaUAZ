@extends('layouts.app_admin')

@section('content')
  <form action="{{ url('DatosPlan/'.$datos->id) }}" method="POST">
    @csrf
    {{method_field('PATCH')}}
    @include('datos_plan.form')
  </form>
@endsection
@include('includes.footerBST')
