@extends('site.layout')
@section('title', 'Atualizações')
@section('conteudo')
        <div class="novidades">
            <h1>Últimas Atualizações</h1>
            <h2>Com muita emoção <br> anunciamos o lançamento do nosso serividor<br> fique atento para não perder nada sobre este grande evento!</h2>
            <img src="{{ asset('img/update.png')}}" alt="Ilustração de uma partida de bad wars" class="ilustracao">
        </div>
@push('scripts')
    <script src="{{ asset('js/scripts.js') }}"></script>
@endpush
@endsection