
 <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                <a href="{{ url('/home') }}">Desafiar</a>
            @else
                <a href="{{ url('/home') }}">Jugar</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Registrarse</a>
                @endif
            @endauth
        </div>
    @endif
