@extends('layouts.master')

@section('title','visitanos')

@section('content')

<!--Barra de Navegación-->
<header class="header-nav">
    <nav>
        <ul class="nav-links" style="padding-top:13px">
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('productos') }}">Productos</a></li>
            <li><a>Ofertas</a></li>
            <li class="link-selected"><a href="{{ route('visitanos') }}">Visítanos</a></li>
            <li><a href="#">Ayuda</a></li>
        </ul>
    </nav>
</header>
<!--------------------------------------------------------------->

<H2 align="center" style="padding: 20px;">Vísitanos en nuestra sede</H2>
<div class="containter">
    <img src="https://i.imgur.com/rHqi73N.png" title="source: imgur.com" class="img-fluid maps">
    <h6>Google Maps</h6>
</div>

@endsection