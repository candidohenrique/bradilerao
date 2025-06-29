@extends('site.layout')
@section('title', 'Temporada')
@section('conteudo')
    <div class="infos">
        <h1>Temporadas </h1>
        <h2>A 1° temporada está chegando <br> juntamente com diversas novidades <br> fique por dentro de tudo. Não perca as  novidades!</h2>
        <img src="{{asset('img/temporada.png')}}" alt="Imagem sobre a temporada" class="temporada">
    </div>
@push('scripts')
    <script src="{{ asset('js/scripts.js') }}"></script>
@endpush
@endsection