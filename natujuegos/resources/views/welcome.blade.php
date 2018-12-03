@extends('base')

@section('title', 'Natujuegos')

@section('content')

 <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                <a href="{{ url('/home') }}">Desafiar</a>
            @else
                <a href="{{ url('/memotest') }}">Memotest</a>
                <a href="{{ route('login') }}">Iniciar sesión</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Registrarse</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Natujuegos
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Reglas</a>
            <a href="https://laracasts.com">Foro</a>
            <a href="https://laravel-news.com">Contacto</a>
        </div>
    </div>
</div>

@endsection

