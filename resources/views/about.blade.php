@extends('layout.app')
@section('title',"About Food Fun")
@section('body-content')
<!-- Preloader Starts -->
<!-- <div class="preloader">
        <div class="spinner"></div>
    </div> -->
<!-- Preloader End -->

<!-- Header Area Starts -->
<x-header />
<!-- Header Area End -->

<!-- Banner Area Starts -->
<section class="banner-area banner-area2 text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><i>About Us</i></h1>
                <p class="pt-2"><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<!-- Welcome Area Starts -->
<x-bookatable/>
<!-- Welcome Area End -->

<!-- Speccial Dishes Component Starts -->
<x-specialdishes/>
<!-- Speccial Dishes Component End -->

<!-- Testimonial Component Starts -->
<x-testimonial/>
<!-- Testimonial Component End -->

<!-- Footer component Starts -->
<x-footer/>
<!-- Footer component End -->

@stop()