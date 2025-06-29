@extends('site.layout')
@section('title', 'Home')
@section('conteudo')
<div class="home-banner">
    <img src="{{ asset('img/inicio.png')}}" alt="inicio" class="back-gound-home">
        <div class="texto-sobreposto">
        <h1>Bem-vindo ao Bradilerão</h1>
        <p>O lugar onde sua jornada se inicia</p>
    </div>
</div>
@push('scripts')
    <script src="{{ asset('js/scripts.js') }}"></script>
@endpush
@endsection