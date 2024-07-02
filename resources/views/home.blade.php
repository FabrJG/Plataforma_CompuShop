@extends('layouts.master')

@section('title','home')

@section('content')

<!--Barra de Navegación-->
<header class="header-nav">
    <nav>
        <ul class="nav-links" style="padding-top:13px">
            <li class="link-selected"><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('productos') }}">Productos</a></li>
            <li><a>Ofertas</a></li>
            <li><a href="{{ route('visitanos') }}">Visítanos</a></li>
            <li><a href="#">Ayuda</a></li>
        </ul>
    </nav>
</header>
<!--------------------------------------------------------------->

<main class="container mt-4">
    <!-- Carrusel de Productos -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-target="#carouselExampleCaptions" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-target="#carouselExampleCaptions" data-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-target="#carouselExampleCaptions" data-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div id="carousel-grid" class="d-flex justify-content-between align-items-center">
                    <div class="info">
                        <h4>ASUS RogStrix-G512LI</h4>
                        <p>Intel® Core™ i7-10750H <br> 8GB RAM DDR4 <br> 512 GB disco sólido M.2</p>
                        <h4>$211.025 + IVA 10,5%</h4>
                        <a href="#" class="btn btn-primary btn-sm">Agregar al carrito</a>
                    </div>
                    <!--<img src="./Images/ASUS/RogStrix-G512LI/front.jpg" class="rounded" alt="ASUS RogStrix-G512LI">-->
                </div>
            </div>
            <div class="carousel-item">
                <div id="carousel-grid" class="d-flex justify-content-between align-items-center">
                    <div class="info">
                        <h4>HP PavilionGaming-15</h4>
                        <p>Ryzen 5 4600H APU <br> 8GB RAM DDR4 <br> 250 GB disco sólido M.2</p>
                        <h4>$146.800 + IVA 10,5%</h4>
                        <a href="#" class="btn btn-primary btn-sm">Agregar al carrito</a>
                    </div>
                    <!--<img src="./Images/HP/PavilionGaming-15/front.jpg" class="rounded" alt="HP PavilionGaming-15">-->
                </div>
            </div>
            <div class="carousel-item">
                <div id="carousel-grid" class="d-flex justify-content-between align-items-center">
                    <div class="info">
                        <h4>DELL precision-7530-18</h4>
                        <p>Intel i7-8850H <br> 16GB RAM DDR4 <br> 500 GB disco sólido</p>
                        <h4>$325.713 + IVA 10,5%</h4>
                        <a href="#" class="btn btn-primary btn-sm">Agregar al carrito</a>
                    </div>
                    <!--<img src="./Images/DELL/precision-7530-18/side.jpg" class="rounded" alt="DELL precision-7530-18">-->
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</main>

</body>
</html>

@endsection