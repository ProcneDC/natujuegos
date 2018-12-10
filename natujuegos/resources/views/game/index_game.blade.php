@extends('base_site')
@section('title', 'Natujuegos')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
      @endif
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Adiviná</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

          <form action="" method="get" id="">
            @csrf
            <div class="form-check" id="check">
              <img src="{{ asset( $ave->photo  ) }}" width="300"><br>
              <input class="form-check-input" type="hidden" name="foto" value="{{ $ave->name }}">
              @foreach  ($respuestasDesordenadas as $respuesta)
              <input class="form-check-input" type="radio" value="{{ $respuesta->name }}" id="{{ $respuesta->name }}">
              <label class="form-check-label" for="{{ $respuesta->name }}">
                {{ $respuesta->name }}
              </label><br>
              @endforeach
            </div>
            <button onclick="chequear();"  class="btn btn-success">Listo!</button>
          </form>

          <div class="alert alert-success" id="caja" style="display: none;">
            Acertaste!
          </div>
          <div class="alert alert-warning" id="caja2" style="display: none;">
            Perdiste!
          </div>

        </div>
      </div>

      {{--
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Notificación</th>
            <th scope="col">Estado</th>
            <th scope="col">Sender</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @forelse ($aves as $ave)
            <th scope="row">{{ $ave->id }}</th>
            <td>{{ $ave->name }}</td>
            <td>{{ $ave->description }}</td>
            <td><img src="{{ asset( $ave->photo  ) }}" width="100"></td>
          </tr>
          @empty
          <th scope="row"></th>
          <td>
          No hay notificaciones aún</td>
          @endforelse
        </tr>
      </tbody>
    </table>
    --}}

  </div>
</div>
</div>
<script>
function chequear(){
  var valorave = $('input[name=foto]').attr('value');
  var valor = $('input[type=radio]:checked'). val();
  if (valor == valorave){
    var caja = $('#caja').css('display', 'block');
  }else{
    var caja2 = $('#caja2').css('display', 'block');
  }
}
</script>
@endsection