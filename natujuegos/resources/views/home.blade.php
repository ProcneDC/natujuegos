@extends('base_site')

@section('title', 'Natujuegos')

@section('content')
   

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenide</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card text-center">
                      <div class="card-body">
                        <h5 class="card-title">USUARIO</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="{{ url('game') }}" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                    <div class="card text-center mt-3">
                      <div class="card-body">
                        <h5 class="card-title">TUTORIAL</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
