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
                        <h5 class="card-title">ECOREGIONES</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

 <div class="container">
        <div id="mapa">

<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 291 477" style="enable-background:new 0 0 291 477;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#CDE3F1;}
    .st1{fill:#FFFFFF;stroke:#A00505;stroke-width:0.5;stroke-miterlimit:10;}
    .st2{fill:#8CB3C1;}
    .st3{fill:#8AB6C9;}
    .st4{fill:#FEFEFE;}
    .st5{fill:#F6F6F3;}
    .st6{fill:#EAE473;}
    .st7{fill:#39272D;}
    .st8{fill:#F5F5E3;}
    .st9{fill:#F9F6B4;}
    .st10{fill:#96CB88;}
    .st11{fill:#CAD590;}
    .st12{fill:#EB8A80;}
    .st13{fill:#F9BD74;}
    .st14{fill:#C2A0C5;}
    .st15{fill:#CEB8B0;}
</style>
<g>
    <path id="pelagico"  data-toggle="tooltip" data-placement="bottom" title="Mar pelágico" class="st0" d="M183.7,170l29.5,15.4l33.6,24c0,0-3,32.9-53.9,47.6c-21,6,4,14-9.2,25.8c-30.5,27-15,44-15,44
    s127,2.9,78.1,68.3c-53.9-9.8-43.2,22-43.2,22S185,451.7,103,446c0-20,2-30,2-30s16,0.7,8-3s-9-12-9-12l-19-34l37-179.7L183.7,170z"
    />

    <path id="maritimo"  data-toggle="tooltip" data-placement="bottom" title="Zona marítima" class="st1" d="M126.5,429c0,0,43-4.8,39.9-11.7c-3.1-6.9-47-6.9-47-6.9s-24.9-37.1-15.7-40.3c9.2-3.2,35.8-24.4,36.3-31.9
    c0.8-12.1-4.8-26.7-4.8-26.7c1.9-29.7,12.6-25.8,12.6-25.8s13.6-4,10.6-13.8c-2.9-9.9,12.7-22.8,12.7-22.8l1.8-10.9
    c0,0,36.1-7.9,39.7-10.9c3.7-3,15.1-21.8,13.3-29.7c-1.9-7.9-38.2-29.7-38.2-29.7l-84,89L82,355l13.5,34.7l18.4,22.7L126.5,429z"/>

    <path id="patagonico"  data-toggle="tooltip" data-placement="bottom" title="Bosques andino patagónico" class="st2" d="M136.4,415.9c-1.6-0.3-3.3-0.4-4.4-1.9c-3,0.1-5.8-0.2-8.3-2c-1-0.7-2.5-0.8-3.7-1.2c-0.3,0.1-0.7,0.1-1,0.2
        c-1.1,1-2.5,0.5-3.8,0.6c-0.1,0-0.3,0-0.4,0L108,406l-20-32l-28-13l-3.2-3.9c1.5-2,2.5-4.4,3.1-6.9c1.2-4.6,2-9.3,3.3-13.9
        c0.2-0.8,0.3-1.4,0.3-2.1c1.6,0.5,3.5,1.2,5.4,1.8c1-1.9,2.1-3.8,3.1-5.6c-2-2.1-4-4.2-6-6.4c0.8-1.5,1.7-2.9,2.5-4.4
        c0-0.2,0-0.4-0.1-0.6c2.1-3.7,1.8-5.3-0.3-8.7c0.1-5.1,0.4-10.3-0.7-15.3c-0.8,0-1.3,0.3-1.8,0.8c-1-7.2-1.9-14.4-2.9-21.6
        c4.7-0.4,9.5-0.8,14.2-1.3c0.3-0.6,0.2-1.1-0.4-1.5c-4.5-1.5-9-0.8-13.5-0.5c0.1-0.1,0.2-0.2,0.3-0.3c1.1-3,2-5.9-0.9-8.2
        c0.1,0,0.1,0,0.2,0c1.9-1.4,1.9-3.6,2.5-5.6c2-7.7,3.5-15.6,5.1-23.4c1.1-5.5-0.1-8-5.1-11.1c-2.8-0.6-4.1,0.8-4.4,3.4
        c-0.2,0.6-0.1,1.1,0.3,1.5c0.7,1.9,1.4,3.8,2.2,6.1c-2.1,1.3-4.2,2.6-6.3,3.9c-0.2,2.5,2.5,4.3,0.6,7c-3.6,5-2.8,10.9-2.5,16.7
        c0.6,3.6,1.2,7.1,1.8,10.7c-0.5,1-1,2.1-1.4,3.1c-2.2-1.5-3.3-0.7-3.3,1.8c0,1.1,0.9,2.2,0.7,3.2c-0.6,3.9,1,6.4,3.6,7.2
        c0.8,5.2,1.4,9.8,2.1,14.5c1.2,0.3,2.5,0.5,3.8,0.8c0,0.1-0.1,0.2-0.1,0.3c1.4,3.1,0.5,5.6-0.7,8.5c-2.1,5.2-2.3,7.9-0.1,10.1
        c-0.4,1-0.8,1.9-0.9,3c-0.4,2.6-0.2,5.3-0.1,7.9c-1.2,1.3-2.3,2.6-3.5,4c-3.5,3.7-1.9,7.1,1.4,10.5c-2.1,1.3-3.9,2.2-4.2,4.4
        c-1,1.5-2.1,3.1-3.1,4.6c-3.2,3.4-6.8,6.7-5.3,12.2c0.2,0.6-1,1.3-1.4,2c-0.7,1.3-1.7,2.7-0.4,4.1c1.3,1.4,2.4,0,3.5-0.6
        c3.9,0.9,7.8,1.9,11.6-0.5c-0.2-0.5-0.4-1-0.6-1.6L85,380l16,15l6.2,17.9c-1.7,0.5-3.3,1.2-4.8,2.3c-0.6,1.4-0.6,2.8,0.4,4.1
        c1.9,1.4,4.1,1.1,6.3,1c9.2-0.3,18.3,2,27.5,0.5c1.6-0.4,3.6-0.8,3.6-2.8C140.2,415.8,138,416.2,136.4,415.9z"/>


    <path id="pampas"  data-toggle="tooltip" data-placement="bottom" title="Pampas" class="st6" d="M217,197.9c-5.9-0.7-7.6-3.2-5.9-8.6c2.2-5.2-1.9-9.5-4.3-11.2c-3.7-2.6,1.3-0.1-8.7-6.1c-1.5-0.9-4.4-3-6-3.5
        c-3.8-1.1-11.1-5-15-7.6c-0.6-1-1.7-1.4-2.8-1.7c-2.7,0.4-5.1-1.7-7.8-1c-3.1,0.5-5.9,1.8-9,2.4c-0.9,0.4-1.5,1.2-2,2
        c-0.3,0.3-0.5,0.7-0.8,1c-3.5,0.8-7.2,1.3-10.1,3.1c-4.9,3-8.9,7.3-9.7,13.7c-0.3,2.3-1.8,4.4-2.8,6.6c0.3,0,0.7,0,1,0
        c0,4.3-0.5,8.7,0,13c0.6,4.3,2.4,8.5,3.2,12.8c0.8,4.2,3.2,7,6.7,9.2c0.9-0.1-1.6-0.5-1.4-0.9c0,0.2,2,2.3,2.1,2.5c0,0,1,0,1,0.1
        c0,0.8,0.1-0.5,0.3,0.3c0.1,0.5,0.4,1,0.7,1.4c2.6,2.4,6.1,2.9,9.1,4.5c2.1,0.1,3,2.9,5.4,2.4c3.9,0.4,7.9,0.7,11.8,1.1
        c0.5-0.2,0.9-0.3,1.4-0.5c8.7-2.6,17.7-4.5,26.5-6.9c4.6-0.8,8.7-2.4,11.1-6.8c2-4.8,6.4-8.1,8.2-13
        C220.2,202.8,221.5,199.5,217,197.9z"/>


    <path id="puna"  data-toggle="tooltip" data-placement="bottom" title="Puna" class="st8" d="M110.8,39.7c-0.1-0.5-0.2-0.9-0.3-1.3c-1.3-1.8,0.7-5.9-3.2-5.7c-3.9,0.2-6.5-1.9-9.4-3.7
            c-0.3,0.7-0.6,1.3-1,2c1.4,2.1-0.6,2.4-1.7,3.2c-3.2,2.2-5.4,5-6.3,8.8c0.6,1,1.8,2.1,1.7,3c-0.2,2.7-1,5.3-1.6,8
            c-0.2,3.1-2.7,4.1-4.9,5.4c-2,1.2-4.1,2.3-6.2,3.4C74,66,76.2,69,78.1,72c-2.4,0.7-2.6,2.8-1.2,6.8c0.5,1.6,0.9,3.2,1.2,4.8
            c-1.6,2.6-1.7,5.1,0.6,7.3c1.7,1.7,0.9,3.4-0.8,3.8c-4.7,1.2-4.1,5.1-5,8.1c0.3,0.3,0.6,0.6,1,0.7c-1,0.3-2,0.9-2.8,2.2
            c-1.7,3.2-3.6,6.2-5,9.5c-1.1,2.7-1.5,5.6-2.2,8.4c0.6,2.2,1.4,4.3,1.6,6.7c0.5,5.2-3.3,8.9-4.4,13.6c-1.2,5,1.7,15.1,6.2,17.9
            c0.1,0.1,0.3,0.1,0.4,0.1c-0.2,2.3-0.4,4.6-0.5,6.8c2.5,0.3,4.7,0.5,3.1,4.2c-0.6,1.4,0.1,3.5,0.4,5.2c0.2,1.6,0.1,2.6-1,4.2
            c-2.2,3.4-4,7.5-4.4,11.4c-0.4,4,1.1,8.1,1.7,12.2c-0.6-0.2-1.2-0.5-1.3-0.6c0,0,0,0,0,0c-2,1.2-3.3,2-4.5,2.8
            c-2.3,5.9-1.9,11.8,0.1,17.6c0.7-1.6,1.1-3.6,3.7-2.8c-1.2-5.3,0.4-7.6,5.6-8.2c0.9-0.1,1.7-0.7,2.6-1.1c0.9,0.7,1.9,1.5,2.8,2.2
            c0.6-0.4,1.3-0.8,1.9-1.3c0.3-1.9,0.1-4.4,1.2-5.5c2.2-2.3,2-4.7,2-7.3c0-5.1-0.4-10.1,0-15.2c0.2-3.3,0.4-6.4-1.2-9.5
            c-1.2-2.5-2.6-5.6-2.2-8.1c0.5-3.2,2.9-6.1,4.3-9.1c0.4-0.9,0.1-2,0.2-3c0.4-0.4,0.7-0.7,1.1-1.1c0.7-1.2,0.6-2.5,0.5-3.9
            c-0.8-6.5,0.2-12.3,6.6-15.8c0.9-0.5,1.4-1.4,1.7-2.4c0-0.2,0-0.5-0.1-0.7c0.3-0.1,0.7-0.2,1-0.4c4.8-6.5,2.7-14,3.1-21.2
            c0-0.8-0.4-1.4-1-1.9c0.6-0.4,1.2-0.8,1.7-1.4c2-7.3,5.6-14.3,5.5-22.1c-0.4-0.6-1.1-1.2-1.7-1.7c0.6-0.2,1.2-0.8,1.9-1.9
            c0.5-0.8,0.8-1.8,1-2.7c0.8-1.8,1.9-3.6,1.7-5.6c-0.6-4.2,0.5-8.2,1.9-12.1c0.2-0.9,0.2-1.7,0-2.4c0.1,0.3,0.3,0.5,0.5,0.8
            c3.3-3.4,0-7.1,0.9-10.4c-0.2-2.4,2.6-2.1,3.3-3.8C112.5,43.9,110.7,41.9,110.8,39.7z"/>
    
    <path id="estepa" data-toggle="tooltip" data-placement="bottom" title="Estepa" class="st9" d="M145.1,271c-1.6-2.1-3.5-0.4-5.1,0.7c0,0.3-0.7,0.7-1.9,1.2c-1.5-3.5-12.6,5.2-13.1,5.1
        c-3.6,4.1-4.8,19.3-8,23.7c-3.1,4.2-7,4.9-11.3,2.2c-3.5-2.2-6.9-4.6-10.9-5.8c-2.2-0.7-4.5-1.7-4.6-4.6
        c-0.4-6.5-2.5-12.6-3.8-18.8c-0.3-1.9-1.1-2.9-2.5-3.2c0.4-0.1,0.8-0.2,1.1-0.3c0.2-1.5-0.2-2.4-1.2-3.1c-0.6-1.3-1.1-2.6-1.7-3.9
        c-0.7-1.3-1.4-2.6-1.9-3.9c-2-4.7-5.2-9.4-0.2-14.2c1.7-2,1.4-4.3,0.8-6.5c-2.1-7.7-5.7-15.1-4-23.4c-0.8-1.5-2-2.5-3.8-2.6
        c-1.6,0.1-3.3,0.2-4.8,0.7c-4.2,1.4-5.5,5.3-3,9c4,2.6,5.4,6.2,4,10.8c-0.7,2.2-1.2,4.4-1.7,6.7c-1,5.4-2,10.9-2.9,16.4
        c-0.8,1.7-1.6,3.4-2.5,5c0.1,3,0.2,6,0.3,9c1,0.3,2,1,2.9,1c0.1,0,0.2,0,0.3,0c-1,0.3-2,0.9-2.9,1.7c-2.2,8.7,0.2,16.9,2.3,25.2
        c3.8,5.4,2.6,11.6,2.8,17.6c0,1.2-0.4,2.2-1.1,3.1c-0.9,1-1.6,2.1-1.5,3.6c-0.3,1.3-0.7,2.6-1,3.9c-0.1,0-0.2,0.1-0.3,0.3
        c-0.1,0.1-0.1,0.2,0,0.3c-0.3,0.2-0.5,0.4-0.6,0.8c-0.3,0.7-0.7,1.4-1,2.1c0,10.6-1.5,20.7-9.3,28.8c-3.7,3.9-3.6,6.5,0.7,9.8
        c1.6,1.2,3.6,1.8,4.6,3.7c0.4,0.6,0.7,1.3,1,2c0.9,5.4,0.1,11.5,6.4,14.5c4.4,1.8,8.8,1.3,13.3,0.6c2.9-1.7,5.9-1.8,9-0.9
        c2.1,0.6,4.3,1.1,6.6,1.3c-0.1,0.1-0.2,0.1-0.3,0.2l3,2.4c0.5,4.7,3.5,8.7,4,13.4c0.2-0.8,0.7,1.1,1.3,3c0.3,1.9,0.5,3.8,0.8,5.7
        c4.7-0.8,9.5-1.6,14.2-2.5c0.6-0.1,1.1-1.1,1.7-1.6c-1-0.3-2-0.7-3-1c-0.8-0.6-1.7-1.2-2.5-1.7c-3.3-3.7-6.6-7.4-9.5-10.8
        c0.2-0.6,1-2.1,0.8-2.6c-0.8-1.6-2-2.8-3-4.1c-0.5-0.9-0.9-1.5-1.4-2c-0.1-0.8-0.4-2-1-3.5c-0.7-1.5-1.6-2.9-2.2-4.4
        c-2.9-6.7-2.7-7.6,2.5-12.7c0.4-0.3,0.6-0.8,0.8-1.2c0.2-1,0-1.7-0.6-2.1c5,1.6,5.7,0.9,8.7-4.3c0.2-0.4,0.5-0.8,0.7-1.3
        c0-3.4,1.7-5.6,4.1-8c3.6-3.4,8.5-5.1,11.7-9.1c1.2-2.2,1-4.8,1.9-7.1c1.4-3.9-0.6-5.4-4.1-6.1c-2.4-0.4-5,0.3-7.1-1.6
        c-4.1-2.3-7.2-5.5-9.5-9.4c4-1.3,4-6.1,7.1-8.2c2.7-2.1,5.6-3.4,9.1-3.5c1.3,0,3.1,0,3.5-1.3c1.5-4.5,6-8.3,3.9-13.8
        c3.4-5.3,5.6-9.2,6.9-12c2.7,0,5.3-0.1,6.3,0c1.3-0.7,3.7-1.4,3.7-2.2C146.8,274.9,146.3,272.5,145.1,271z M98.3,364.3
        c-0.2,0-0.4-0.1-0.4,0c-0.1,0.7-0.5-0.5,0.1-0.2c0.2,0.1,0.4,0.1,0.6,0.2C98.6,364.4,98.5,364.3,98.3,364.3z"/>

    <path id="selva-paranaense"  data-toggle="tooltip" data-placement="bottom" title="Selva paranaense" class="st10" d="M244.1,77.3c0-0.5,0.1-1,0-1.5c-0.7-2.9-1-6-2.3-8.7c-1.7-3.6-5.2-3.1-8.5-2.1c0.1-1.2,0.1-2,0.2-2.8
        c-0.4-0.1-0.8-0.1-1.2-0.2c-0.2,2.3-0.5,4.6-0.5,6.8c0,5.3-0.5,10.2-5.5,13.6c-2.3,1.6-4.1,3.8-6,5.5c-0.8,0.1-1.5,0.3-2.3,0.4
        c-0.2-0.2-0.3-0.3-0.5-0.5c-0.1,0.2-0.1,0.4-0.2,0.6c-0.5,0.1-1,0.2-1.5,0.3c0,0.2,0,0.5,0,0.7c0.2,0.4,0.3,0.8,0.5,1.1
        c-0.6,0.8-1.6,1.1-3.3,0.8c-0.9-0.2-2.2,1.4-3.2,2.1c-0.2,1.2,0.7,1.9,1.4,2.7c0.1,0.1,0.1,0.1,0.1,0.2c-0.3,1-1.4,1.4-3.3,1.5
        c-3.3,0.2-6.7,0.7-10,1.1c4.8,0,9.6,0,14.3,0c0.6,4-1.8,7.4-1.3,10.8c0.8-0.6,4.7-1.3,5.5-1.9c0,0,0,0,0,0c1.5-1.5,2.9-3.1,4.4-4.6
        c0.5-0.5,0.9-1,1.2-1.5c0.3-0.2,0.6-0.4,0.8-0.7c2.7-3.6,9.6-9.8,12.3-11.3c3.1-1.7,6.2-3.7,8.5-6.3
        C244.7,82.4,244,79.5,244.1,77.3z"/>

    <path id="espinal"  data-toggle="tooltip" data-placement="bottom" title="Espinal" class="st11" d="M212.3,98.4C208,99,204,97.6,200,99.2c-1.3,1.2-3.1,2.1-3.8,3.6c-2.4,5.5-8.5,8-14.2,8.2c0,0-0.1,0.1-0.1,0.1
        c-4.1-0.7-6.9,2-9.9,4.1c-7.7,5.2-9.4,15.5-17.5,20.4c-0.3,0.4-0.7,0.7-1,1.1c-7.9,5-15.8,9.9-23.7,14.9c-2.4,1.2-4.4,3-6.1,5.1
        c-0.9,1.1-1.4,2.3-1.7,3.6c-0.5-0.4-1.3-0.6-2.8-0.3c-4.9,3.2-9,7.1-10.5,13.1c-0.5,1.9-1.2,3.7-1.8,5.6c-0.5,2.6-1.7,5-0.4,7.7
        c1.5,3.1,1.5,6.4,1.3,9.7c0,0.8-0.1,1.5-0.1,2.3c0,0.1,0,0.1,0,0.2c-0.2,0-0.4,0.1-0.6,0.1c-2.3,0.5-3.4,2.1-3.4,4.3
        c0,3.5-1,6.9-0.4,10.3c5.8,8.4,11.5,16.8,22.6,18.9c2,0.6,4.2,0.7,6.3,1c-0.1,0.3-0.2,0.6-0.3,1.1c4.7,3,9.3,6,14,9
        c0.4,2.4,0.7,4.8,1.1,7.2c3,2.7,5.1,7,10.3,5.8c3.6-3.1,3.6-3.1,0.5-6.8c0.1-2.5,0.1-4.9,1.9-6.9c1.2-1.3,1-3.3,0.2-4.7
        c-1.8-2.9-2.5-6.4-5.1-8.8c-2.9-1.3-5.9-2.6-8.8-3.9c0-0.2,0-0.5,0-0.7c-0.8-1.2-1.6-2.4-2.8-3.3c-3.5-2.6-5.6-6.2-6.2-10.4
        c-1.1-6.8-4.7-13.3-3-20.5c0.2-0.9-0.1-2-0.7-2.8c-0.2-0.3-0.5-0.4-0.8-0.4c2.3-2.1,2.8-5.3,3.7-8.2c1.8-5.8,5.8-9.6,10.9-11.9
        c2.9-1.3,6-2.2,9.1-3.3c0.3-0.7,0.6-1.3,1-2l0,0c2.7-0.6,5.4-1.2,8.1-1.7c1.8-0.4,2.9,0.7,3.5-0.5c0.5,1.9,1.9,1,4.6,1.2
        c1,0.8,2,1.5,3,2.3c0.8,1,1.6,2,2.9,2.5c5.2,2,10.4,4,15.6,6.1c-0.3-3.1-1.9-7.6-0.5-9.1c3.4-3.6,1.5-7.3,2.1-10.9
        c0.4-2.6,0.2-5.2,0.5-7.8c0.4-3.5,0.9-7.1,1.3-10.6c0.1-0.6-0.8-1.2-1.2-1.8c0.3-1.1,0.3-1.9,0-2.6c0.4,0.6,0.7,1.2,1,1.9
        c0.9-1.7,1.9-3.5,2.8-5.2c4-5.3,8.1-10.7,12.1-16C213.8,105.6,211.9,102.4,212.3,98.4z"/>

    <path id="chaco-humedo"  data-toggle="tooltip" data-placement="bottom" title="Chaco húmedo" class="st12" d="M210.6,94.9c-0.5-0.3-1.1-0.5-1.6-0.8c-7.5-2.5-14.8-5.9-22.9-2.2c1-2.3,4.9-6.6,5.9-8.9
        c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0-5.1,3.3-8.8,5.5-13c1-2,0.7-3.4-0.4-5c-1.5-0.9-2.8-2.1-4.4-2.7c-3.1-1.2-6.2-2.1-9.4-3.1
        c-2.1-0.1-3.7-2.6-6.1-1.2c-1.1,4.1-2.1,8.3-3.2,12.4c-0.4,0.8-0.6,1.5-0.7,2.2c-0.1-0.1-0.2-0.2-0.3-0.3c0,3.7,0,9.3,0,12.1
        c0.6,2.7,1.5,5.3,1.7,8c0.2,2.2-0.5,4.6-0.9,6.8c0.3,0.4,0.7,0.7,1,1.1c-2.7,3.8-3.1,8.4-3.8,12.7c-0.1,0.6,1.2,1.5,1.9,2.3
        c3.4-1.4,6.7-2.8,10.1-4.2c0.3,0.1,0.6,0.1,0.9,0.2c5.9,1.1,8.2,0.3,11.1-4.3c1.7-2.7,3.6-5,6.4-6.6c2.2-1.2,4.6-0.4,6.9-0.9
        C210.8,98.7,212.7,97.8,210.6,94.9z"/>

    <path id="chaco-seco"  data-toggle="tooltip" data-placement="bottom" title="Chaco seco" class="st13" d="M174.2,83.5c-0.8-1.3-0.6-7.4-0.4-11.8c0.4-0.4,0.8-0.9,1.1-1.4c1.8-3.9,2-8.1,2.9-12.2
        c-2.1-5.3-7.1-6-11.7-6.9c-2.8-0.5-6.1-0.4-8-2.1c-4-3.6-9.3-5.8-12.4-10.6c-0.5-0.8-1.4-2-2.9-1.2c-0.2,0.3-0.3,0.6-0.3,0.9
        c0.2-1.9,0-3.8-2.6-5c-2.5-2.9-5.4-4.6-9.4-3.1c-1,0.4-2.3,0.1-3.4,0.1c-3.5,5-5.1,10.9-8,16.2c0.1,2.2,1.6,2,3,2.2
        c-0.8,0.8-1.2,2.2-2.1,2.7c0-0.2,0-0.5,0.1-0.7c-1.3-0.2-1.7,1.1-2.7,1.5c-0.3,1.6-0.3,3.3-0.8,4.8c-0.5,1.5-1.2,2.9-1.9,4.3
        c-0.5,0.3-1,0.6-1.4,1c-2,3.1-3.5,6.4-4.3,10.1c-0.2,1.2,0.3,3.7,1,4.8c3.1,1,3.1-3.4,4.8-4.7c2-1.6,3.7-3.7,6.9-2.5
        c-0.2,2.6-2,3.4-3.7,4.4c-2.5,1.4-4.8,2.9-5.4,6c0,0.8,0.4,1.5,0.9,2.1c-2.9,1-1,4.4-2.5,6.2c-1.4,2.9-2.9,5.8-3.2,9.1
        c0.5,2.1,0.1,4.9,2.6,5.4c-0.4,0.3-0.8,0.7-1.2,1.1c-2.1,3-1.4,6.7-3,9.9c-0.7,0-1.3,0.4-1.9,0.9c-3.1,4.8-4.8,10.2-6.6,15.5
        c0.2,5.2-0.9,10.4,0.8,15.5c0.3,0.5,0.7,0.8,1.2,1c-0.6,3.3,0.7,2.8,2.6,4.4c-4.9-1.3-3.5,0.4-3.3,6.7c0.8,3.2,1.6,6.5,3.2,9.4
        c1.7,3,3.1,6.8,7.9,5.8c1.2-5.4,5.5-8.4,9-12c1-1.4,4.6-0.4,5-0.9c-1.2-2,2.3-4.3,3-6c0.7-0.7,1.4-1.4,2.1-2.1
        c0.3,0,0.6,0.1,0.9,0.1c8.6-4.4,16.6-9.8,24.5-15.4c0.5-0.6,1-1.2,1.1-2c0,0-0.6,1.4-0.6,1.4c2.4-1.4,6-3.9,7.1-6
        c2.9-5.6,6.7-10.4,10.8-14.9c-1.6-5.3,1.7-9.8,2.4-14.7c-0.2-0.6-0.5-1-1-1.2c0.1,0,0.1-0.1,0.2-0.1
        C176.2,93.8,177.3,88.6,174.2,83.5z"/>

    <path id="yungas"  data-toggle="tooltip" data-placement="bottom" title="Yungas" class="st14" d="M120.1,53.1l1.4-2.4c0.8-0.1,1.7-0.1,2.3-0.5c1.1-0.6,2-1.4,2.9-2.1c-0.4-0.5-0.8-1-0.8-1.1h-4.7
        c1.2-1.8,2.7-3.6,3.7-5.5c1.8-3.7,3.4-7.6,5.1-11.3c-3.7-0.3-5.8,0.8-6,4.2c-0.1,1.1-1.6,2.2-2.4,3.1c-2.5-2.1-4.4-3.7-6.3-5.3
        c-1.8,1.1-4.3-0.7-6.3,1.3c0.1,1.7-0.8,3.7,0.3,5.7c0.1,0.4,0.1,0.7,0.2,1.1c0.3,1.9,0.7,3.9,1,5.8c-1.3,1.3-5.1,0.1-4.6,3.2
        c1.2,4.3,2.7,8.7,0.4,13.1c-1.6,2.6-2.4,5.5-3,8.4c-0.4,2-0.8,4.3,2.3,5c-1.6,0.5-2.9,1.3-1.5,2.7c2,1.8,1.4,3.4,1.5,5.2
        c0,1.2,0.2,2.6,2.1,2.7c-0.3,0.2-0.6,0.5-0.9,0.7c-0.3,0.3-0.7,0.6-1,0.9c-0.1,0-0.1,0-0.2-0.1c-0.8,0.3-1.1,1-1.9,1.2
        c-4.3,5.7,0.3,11.3,0.6,17c0.1-1.7,1.4-1.7,1.6-4c1.7,1.6,1.7,1.8,3,3c0.9-0.4,3-2,2-5c-3.6-0.8-3.1-0.2-2.9-2.7
        c1.3-2.8,2.5-5.5,3.8-8.3c0.8-2.3,1.6-4.7,2.4-7c-0.4-0.6-0.7-1.3-1.1-1.9c2.3-1.7,4.4-3.7,7.1-4.9c3.5-1.5,5.5-3.4,5.5-7.7
        c-3.3,0.7-6.7,0.7-9,2c-2.8,1.6-4.7,4.4-7,6.6c-0.1-1.4-0.3-2.7-0.4-4.1c1.7-3.3,3.5-6.7,5.2-10C117.3,59.4,120,56.7,120.1,53.1z"
        />

    <path id="monte"  data-toggle="tooltip" data-placement="bottom" title="Monte" class="st15" d="M151.7,254c-1.4-1.3-3.7-1.7-3.3-4.3c-0.2-2.4,0.2-4.9-1.3-7c-5-3.6-10.5-6.4-15.5-10c-2-0.8-4.1-1-6.2-1
        c0.2-0.2,0.5-0.3,0.7-0.6c-4.9-0.4-8.4-3.3-11.6-6.6c-3.7-3.7-7-7.6-10.5-11.5c-0.4-4.2,0.3-8.4,0.9-12.4c0.7-0.9,1.6-1.8,2.6-2.2
        c0.9-0.4,1.1-1.1,1.2-2c-0.6-4.7-0.5-9.3-1.8-13.7c1.6-1.4,0.3-3.3,1-4.7c0.7-1.7,1.3-3.4,2-5.1c-1-0.5-2.1-0.9-3-1.5
        c-4.7-3.4-4.9-9.1-7-13.7c0.1-1.8,0.2-3.5,0.3-5.3c1.4-0.3,2.7-0.5,3.5-0.6c-1.4-2.1-2.7-3.9-3.9-5.7c-0.2-5.1-0.5-11.9-0.7-17.4
        c2-4.5,4-9.1,6-13.6c0.6-0.4,1.3-0.7,1.9-1.1c0.9-3.3,1.9-6.6,2.8-9.8c-0.1-2.4-1.2-3.9-3.5-4.3c-1.4,1.7-0.5-0.3-1.3,1.1
        c1-5.3-0.5-7,1.4-12.2c-0.1-0.1-0.2-0.2-0.2-0.3c0.3-0.2,0.6-0.4,1-0.6c0.1-0.3,0.1-0.6,0.1-0.8c0.3,0,0.5-0.1,0.8-0.1
        c0.9,0.3,1.1,0,0.9-0.9c-0.1-2.8-0.3-5.7-0.4-8.6c-0.7,0.4-1.4,0.9-2,1.3c-0.2-0.1-0.4-0.2-0.5-0.4c0.7-1.1,1.4-2.1,2.2-3.2
        c-0.8-1.2-2.5-2.5-2.3-3.5c0.6-3,2-5.9,3.1-8.8c-0.6-1.1-0.8-3.2-2.7-1c-0.9,2.7-3.5,6.6-3.2,9.2c0.4,3.5,0.8,5.4-0.8,8.3
        c-0.6,1.6-1.1,3.1-1.7,4.8c-1.1-0.9-1.8-1.5-2.5-2.1c-0.5,3.2,1.3,4,4,3.9c-0.7,1.1-2.1,2.6-1.8,3.1c2,3.8-0.8,6.7-1.7,9.8
        c-0.8,3-1.9,6-2.9,9c-0.6,0.4-1.1,0.8-1.7,1.2c0,3.4-0.8,7.1,0.3,10.1c2,5.4-1.2,9.4-2.4,13.9c-0.3,0.3-0.4,0.7-0.4,1.2
        c-6.6,2.6-9.6,7.7-9.4,14.7c0,2.1,0.6,4.2,1,6.3c-0.1,0.1-0.3,0.2-0.4,0.3c-0.5,0.5-1,1.1-1.2,1.8c-0.8,3.1-2.9,5.6-3.8,8.7
        c-0.5,1.7-1.9,3.5-1,5.2c4.9,8.9,1.9,18.6,3,27.9c0.4,3.6,0.1,7.3-2.1,10.5c-1,1.5-1.5,3.4-0.6,5.3c-0.5,0.2-0.9,0.6-1.1,1.2
        c0.2,3.6-2.8,7-0.6,10.7c0.6,1,1,2.3,1.3,3.5c1.1,4.8,2,9.7,3.1,14.5c-0.1,0.1-0.3,0.2-0.4,0.4c-3.6,3.8-3.9,7.9-1.5,12.6
        c1.2,2.3,2.6,4.5,3.6,7c0.6,1.4,0.9,3,2,4.2c1.1,3,2.3,6.3,2,6.9c1.2,4.7,2.3,9.3,3.5,14c0.2,0.8,0.3,1.6,0.3,2.4
        c0,4,1.9,6.1,5.5,7.5c3.9,1.5,7.8,3.2,11.1,5.7c2.1,1.6,3.6,2.9,6.1,1.5c2.1-1.2,5-2,5.9-3.9c1.3-2.6,2.4-4.3,5.2-5.3
        c1.3-0.5,2.1-2.4,3-3.7c0.9-1.3,1.7-2.7,2.5-4.1c3.2-1.7,4.9-5.1,8.3-6.6c1.3-0.6,1.3-2.1,0.9-3.5c-0.5-1.7,3.2-3.8,2.3-4.8
        c1.4-3.8-4.9-6.7-10-8.8c0-0.7,0-1.4-0.1-2c-0.3-2.9-0.9-5.8-1.4-9.5c3.7,1,6.1,1.7,8.6,2.4c4.4,1.5,8.8,3.4,13.6,1.5
        C153.5,257.5,154,256.1,151.7,254z M98.7,130c-0.1,0.9-0.2,1.8-0.2,2.3C98.4,131.5,98.5,130.7,98.7,130z"/>

    <polygon id="malvinas"  data-toggle="tooltip" data-placement="bottom" title="Malvinas" points="162.4,393 172.6,395.4 178.2,394.2 183.7,397.5 178.2,399.5 174.9,403.1 170.1,398 166,400.5 166.7,398    "/>
</g>
</svg>


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