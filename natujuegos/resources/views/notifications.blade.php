@extends('base_site')

@section('title', 'Natujuegos')

@section('content')
   

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Notificaciones</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card text-center">
                      <div class="card-body">
                        <h5 class="card-title">Recibidas</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      </div>
                    </div>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Notificación</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Sender</th>
                          <th scope="col">Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                      @forelse ($notifications as $notification)

                          <th scope="row">{{ $notification->id }}</th>
                          <td>{{ $notification->message }}</td>
                          <td>Pendiente</td>

                          <td>{{ $notification['sender'][0]->name }}</td>

                          <td><a href="#" class="btn btn-primary">Go somewhere</a></td>
                          </tr>
                      @empty
                      <th scope="row"></th>
                      <td>
                          No hay notificaciones aún</td>
                      @endforelse
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
