@extends('layouts.master')

@section('title','ofertas')

@section('content')

<!--Barra de Navegación-->
<header class="header-nav">
    <nav>
        <ul class="nav-links" style="padding-top:13px">
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('productos') }}">Productos</a></li>
            <li class="link-selected"><a href="{{ route('ofertas') }}">Ofertas</a></li>
            <li><a href="{{ route('visitanos') }}">Visítanos</a></li>
            <li><a href="#">Ayuda</a></li>
        </ul>
    </nav>
</header>
<!--------------------------------------------------------------->

@endsection