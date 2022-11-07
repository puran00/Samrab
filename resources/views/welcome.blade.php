@extends('layout.app')
@section('title')
    главная страница
@endsection
@section('main')
    <div class="container">
        <div class="row">
            <div class="coll-12 mt-5">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://64.media.tumblr.com/8e562d4a7f8a033c943955286b68223a/78e41a6766a6ee4c-66/s1280x1920/476e2124b51b9234c09359da504f6007a7807a28.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://64.media.tumblr.com/67a6796ca94538de2a03236a22bc56f2/78e41a6766a6ee4c-20/s1280x1920/faab5703e2304897a1cb121808ea04e07283a581.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>


    </div>
@endsection
