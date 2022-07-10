@extends('layout.app')
@section('title',"Home Food Fun")
@section('body-content')
<!-- Preloader Starts -->
<!-- <div class="preloader">
    <div class="spinner"></div>
</div> -->
<!-- Preloader End -->

<!-- Header Area Starts -->
<x-header/>
<!-- Header Area End -->

<!-- Banner Area Starts -->
<section class="banner-area banner-area2 menu-bg text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><i>Our Menu</i></h1>
                <p class="pt-2"><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<!-- Food Area starts -->
<x-ourdishes/>
<!-- Food Area End -->

<!-- Table Area Starts -->
<section class="table-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-top2 text-center">
                    <h3>Book <span>your</span> table</h3>
                    <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="#">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                        <input type="text" id="datepicker">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <input type="text" id="datepicker2">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                        </div>
                        <input type="text">
                    </div>
                    <div class="table-btn text-center">
                        <a href="#" class="template-btn template-btn2 mt-4">book a table</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Table Area End -->

<!-- Footer Area Starts -->
<x-footer/>
<!-- Footer Area End -->
@stop()