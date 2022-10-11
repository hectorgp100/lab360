@extends('web.layouts.base')

@section('title')
Inicio
@endsection

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://p4.wallpaperbetter.com/wallpaper/616/547/693/landscapes-nature-lakes-1920x1080-nature-lakes-hd-art-wallpaper-preview.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://p4.wallpaperbetter.com/wallpaper/616/547/693/landscapes-nature-lakes-1920x1080-nature-lakes-hd-art-wallpaper-preview.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://p4.wallpaperbetter.com/wallpaper/616/547/693/landscapes-nature-lakes-1920x1080-nature-lakes-hd-art-wallpaper-preview.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="row" id="home-services">
    <div class="col-md-4">
        <div class="home-services-item" style="background-image: url('https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg')">
            <h2>
                Lorem ipsum
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="home-services-item" style="background-image: url('https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg')">
            <h2>
                Lorem ipsum
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="home-services-item" style="background-image: url('https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg')">
            <h2>
                Lorem ipsum
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-10 offset-md-1" id="home-main-text">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
    </div>
</div>

<div class="row">
    <div class="col-md-12" id="green-back">
        Ut accumsan augue vitae<br>tellus placerat cursus.
        <br><br>
        <img src="{{asset('web-assets/img/arrow-down.png')}}" width="60">
    </div>
</div>

<div class="row">
    <div class="col-md-4 home-services-item-2">
        <img src="https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg">
        <div>
            <h2>
                Lorem ipsum
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
    <div class="col-md-4 home-services-item-2">
        <img src="https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg">
        <div>
            <h2>
                Lorem ipsum
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
    <div class="col-md-4 home-services-item-2">
        <img src="https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg">
        <div>
            <h2>
                Lorem ipsum
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
    <div class="col-md-4 home-services-item-2">
        <img src="https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg">
        <div>
            <h2>
                Lorem ipsum
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
    <div class="col-md-4 home-services-item-2">
        <img src="https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg">
        <div>
            <h2>
                Lorem ipsum
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
    <div class="col-md-4 home-services-item-2">
        <img src="https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg">
        <div>
            <h2>
                Lorem ipsum
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
    <div class="col-md-4 home-services-item-2">
        <img src="https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg">
        <div>
            <h2>
                Lorem ipsum
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
    <div class="col-md-4 home-services-item-2">
        <img src="https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg">
        <div>
            <h2>
                Lorem ipsum
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
    <div class="col-md-4 home-services-item-2">
        <img src="https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg">
        <div>
            <h2>
                Lorem ipsum
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
</div>

<div class="row" id="green-back-2">
<div class="col-md-4">
        <div>
            <img src="https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg">
            <h2>
                Lorem ipsum
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
    <div class="col-md-4">
        <div>
            <img src="https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg">
            <h2>
                Lorem ipsum
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
    <div class="col-md-4">
        <div>
            <img src="https://amilcarkraudy.org/wp-content/uploads/2018/11/computer-blue-opacity-background.jpg">
            <h2>
                Lorem ipsum
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy nibh.tt
            </p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12" id="back-image-full">
    </div>
</div>

@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('.carousel').carousel();
    });
</script>
@endsection