@extends('site.layout')
@section('title', 'Login')
@section('conteudo')
<div class="tamanho-login">
    <div class="container">
        <h1>Login</h1>
        <h2>Use suas credenciais do servidor:</h2>

        <form method="POST" action="/login">
            @csrf
            
            <div class="user">
                <label for="last_name">Usuário:</label>
                <input type="text" name="last_name" id="last_name" required placeholder="Ex: nickname"><br>
            </div>
            <div class="senha">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" required placeholder="Ex: senha"><br>
            </div>
                <button type="submit" class="button">Entrar</button>
        </form>

        @if ($errors->has('login'))
            <p style="color:red;">{{ $errors->first('login') }}</p>
        @endif
        @push('scripts')
        <script src="{{ asset('js/scripts.js') }}"></script>
    </div>
</div>
@endpush
@endsection
