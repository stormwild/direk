@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
    <div class="row no-gutters">
        <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('img/1.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/2.jpg') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/3.jpg') }}" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/4.jpg') }}" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block text-uppercase">
                                    <h5>This must be my dream</h5>
                                    <p>New episodes every Thursday</p>
                                  </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>   
        </div>
    </div>
</div>    
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Direk</h1>
        <p class="lead">Filipino Independent Films</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>This is awesome :)</p>
        </div>
    </div>
</div>
@endsection
