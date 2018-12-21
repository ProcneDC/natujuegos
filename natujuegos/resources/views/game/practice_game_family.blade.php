@extends('base_site')

@section('title', 'Natujuegos')

@section('content')
   

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card text-center">
                      <div class="card-body">
                        <h5 class="card-title">GRUPOS DE FAMILIAS</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <div class="container-circles">
                            <div class="circle">
                                <p>Familia</p>
                            </div>
                            <div class="circle">
                                <p>Familia</p>
                            </div>
                            <div class="circle">
                                <p>Familia</p>
                            </div>
                            <div class="circle">
                                <p>Familia</p>
                            </div>
                            <div class="circle">
                                <p>Familia</p>
                            </div>
                            <div class="circle">
                                <p>Familia</p>
                            </div>
                            <div class="circle">
                                <p>Familia</p>
                            </div>
                            <div class="circle">
                                <p>Familia</p>
                            </div>
                            <div class="circle">
                                <p>Familia</p>
                            </div>
                            <div class="circle">
                                <p>Familia</p>
                            </div>



                            
                        </div>


                        <a href="#" class="btn btn-primary">Jugar</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
pelagico
maritimo
patagonico
pampas buenos-aires
puna amarillo norte
estepa amarillo sur
selva-paranaense s10 verde misiones
espinal 11 verde claro entre rios, etc
chaco humedo rojo
chaco seco naranja
yungas violeta
monte marron centro
malvinas
-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
    
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>

@endsection
