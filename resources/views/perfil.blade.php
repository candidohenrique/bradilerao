@extends('site.layout')
@section('title', 'Perfil')
@section('conteudo')

<div class="perfil-container">
  <div class="card-perfil">
    <div class="texto-estatisticas">
      <h1>Olá, {{ $user->last_name }}</h1>
      <h2>Suas Estatísticas nesta temporada:</h2>
    </div>

    <div class="grafico-container">
      @php
          $valores = [
              $stats->wins,
              $stats->kills,
              $stats->final_kills,
              $stats->looses,
              $stats->deaths,
              $stats->final_deaths,
              $stats->beds_destroyed,
              $stats->games_played
          ];

          $labels = [
              "Vitórias",
              "Eliminações",
              "Eliminações Finais",
              "Derrotas",
              "Mortes",
              "Mortes Finais",
              "Camas Destruídas",
              "Partidas Jogadas"
          ];
      @endphp

      <canvas id="graficoEstatisticas"
         data-valores='@json($valores)'
          data-labels='@json($labels)'>
      </canvas>
    </div>
  </div>
</div>

@push('scripts')
    <script src="{{ asset('js/scripts.js') }}"></script>
@endpush

@endsection
