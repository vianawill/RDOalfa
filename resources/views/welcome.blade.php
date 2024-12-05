@extends('layouts.app')

@section('content')

<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

<div class="container">

    <div class="card">
    <div class="card-body">
                    @if (Auth::check())
                        <div class="alert alert-success" role="alert">
                            {{ __('Você está logado!') }}
                        </div>
                    @else
                        <div class="alert alert-warning" role="alert">
                            {{ __('Você não está logado.') }} <br>
                            {{ __('Faça login ou se cadastre.') }}
                        </div>
                    @endif

                </div> 
    <p class="heading">Olá, {{ Auth::user()->name }}
    </p><p class="para">
    Pronto para gerar um novo RDO e otimizar seu dia?
    </p><a href="{{ url('/') }}">
    <button class="btn">Read more</button>
  </div>
</div>

@endsection
