<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>River</title>
    
    {{-- River assets  --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">
        <div class="logo mr-auto"></div>
    </div>
</header>

<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
        <h1>Example Demo</h1>
    </div>
</section>

<main id="main">
    <div class="mt-5"></div>
    <section id="intro" class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 d-flex align-items-stretch">
                    <div class="section-title">
                        <span>01</span>
                        <h2>Heading</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat.</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-3"></div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <a href="#booking" class="btn" style="border: 1px solid #000;">Book Now</a>
                </div>
            </div>
    
            <div class="mt-5 mb-5">&nbsp;</div>
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <img src="{{ asset('images/water.png') }}" class="img-fluid">
                </div>
                
                <div class="col-lg-1 col-md-2">
                    <hr class="thick">
                </div>
                
                <div class="col-lg-4 col-md-4">
                    <span>02</span>
                    <h4>Lorem ipsum dolor sit amet, consetetur.</h4>
                </div>
            </div>
        </div>
    </section>
    
    <section id="booking" class="section-1">
        <div class="container">
            <div class="mt-5 mb-5">&nbsp;</div>
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="section-title">
                        <span>03</span>
                        <h2>Heading</h2>
                        <h4>Lorem ipsum dolor sit amet, consetetur.</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua, vero eos et accusam et justo duo dolores et ea rebum.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 offset-lg-2">
                    <booking-form></booking-form>
                    
                </div>
            </div>
    
            <div class="mt-2 mb-5">&nbsp;</div>
            <booking-lists></booking-lists>
            
            <div class="mt-2 mb-5">&nbsp;</div>
            
        </div>
    </section>
</main>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
