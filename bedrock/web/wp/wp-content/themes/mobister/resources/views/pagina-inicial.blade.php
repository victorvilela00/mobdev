{{--
  Template Name: Página Inicial
--}}

@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <div class="secao1">
        <h2><?php the_field('titulo_secao1') ?></h2>
      </div>
    </div>
  </div>
@endsection
