@extends('standard')

@section('title', 'Loja de Páscoa')

@section('content')
<div class="text-center">
    <h1 class="display-4"> CoelhoChocolate</h1>
    <p class="lead mt-3">
        Bem-vindo ao melhor sistema de controle de chocolates e fornecedores 
    </p>

    <img src="{{ asset('easter-bunny.png') }}"
         class="img-fluid mt-4" 
         style="max-width: 150px;">
</div>
@stop
