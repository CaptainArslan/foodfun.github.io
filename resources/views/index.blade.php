@extends('layout.app')
@section('title',"Home Food Fun")
@section('body-content')

<!-- <pre>
{{print_r($dishes)}}
</pre> -->
<!-- Header Component Starts -->
<x-mainpageheader />
<!-- Header Component End -->

<!-- Banner Area Starts -->
<section class="banner-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>the most interesting food in the world</h6>
                <h1>Discover the <span class="prime-color">flavors</span><br>
                    <span class="style-change">of <span class="prime-color">food</span>fun</span>
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<!-- Welcome Book a table Component Starts -->
<x-bookatable :data="$dishes" />
<!-- Welcome Book a table Component End -->

<!-- Food Component starts -->
@if(sizeof($dishes) > 0)
<section class="food-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-top">
                    <h3><span class="style-change">we serve</span> <br>delicious food</h3>
                    <p class="pt-3">They're fill divide i their yielding our after have him fish on there for greater man moveth, moved Won't together isn't for fly divide mids fish firmament on net.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($dishes as $dish)
            <x-ourdishes :dish="$dish" />
            @endforeach
        </div>
    </div>
</section>
@else
<center>
    <h3><span class="style-change">No Dish Found</span></h3>
</center>
@endif

<!-- Food Component End -->

<!-- Reservation Comonent Starts -->
<x-reservation />
<!-- Reservation Comonent End -->

<!-- Special Deshes Component Starts -->
<x-specialdishes />
<!-- Special Deshes Component End -->

<!-- Testimonial Component Starts -->
<x-testimonial />
<!-- Testimonial Component End -->

<!-- Update Food Component Starts -->
<x-updatedfood :updated="$updated_dishes" />
/>
class="table-area section-padding">
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

<!-- Footer Component Starts -->
<x-mainpagefooter />
<!-- Footer Component End -->
@stop()