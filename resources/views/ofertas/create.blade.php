@extends('layouts.app')

@section('content')
      <form action="{{ url('OfertaEducativa')}}" method="POST">
        @csrf
          @include('ofertas.form')
      </form>
  </div>
</div>
@include('includes.footerBST')
@endsection
