@extends('layouts.app')

@section('content')
      <form action="{{ url('OfertaEducativa/'.$oferta->id)}}" method="POST">
        @csrf
        {{method_field('PATCH')}}
          @include('ofertas.form')
      </form>
  </div>
</div>
@include('includes.footerBST')
@endsection
