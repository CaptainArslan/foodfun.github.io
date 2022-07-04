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
            <div class="col-md-4 col-sm-6">
                <div class="single-food">
                    <div class="food-img">
                        <img src="assets/images/food1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h5>Mexican Eggrolls</h5>
                            <span class="style-change">$14.50</span>
                        </div>
                        <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-food mt-5 mt-sm-0">
                    <div class="food-img">
                        <img src="assets/images/food2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h5>chicken burger</h5>
                            <span class="style-change">$9.50</span>
                        </div>
                        <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-food mt-5 mt-md-0">
                    <div class="food-img">
                        <img src="assets/images/food3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h5>topu lasange</h5>
                            <span class="style-change">$12.50</span>
                        </div>
                        <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-food mt-5">
                    <div class="food-img">
                        <img src="assets/images/food4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h5>pepper potatoas</h5>
                            <span class="style-change">$14.50</span>
                        </div>
                        <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-food mt-5">
                    <div class="food-img">
                        <img src="assets/images/food5.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h5>bean salad</h5>
                            <span class="style-change">$8.50</span>
                        </div>
                        <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-food mt-5">
                    <div class="food-img">
                        <img src="assets/images/food6.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h5>beatball hoagie</h5>
                            <span class="style-change">$11.50</span>
                        </div>
                        <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
<footer class="footer-area">
    <div class="footer-widget section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-widget single-widget1">
                        <a href="index.html"><img src="assets/images/logo/logo2.png" alt=""></a>
                        <p class="mt-3">Which morning fourth great won't is to fly bearing man. Called unto shall seed, deep, herb set seed land divide after over first creeping. First creature set upon stars deep male gathered said she'd an image spirit our</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-widget single-widget2 my-5 my-md-0">
                        <h5 class="mb-4">contact us</h5>
                        <div class="d-flex">
                            <div class="into-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="info-text">
                                <p>1234 Some St San Francisco, CA 94102, US 1.800.123.4567 </p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="into-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="info-text">
                                <p>(123) 456 78 90</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="into-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="info-text">
                                <p>support@axiomthemes.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-widget single-widget3">
                        <h5 class="mb-4">opening hours</h5>
                        <p>Monday ...................... Closed</p>
                        <p>Tue-Fri .............. 10 am - 12 pm</p>
                        <p>Sat-Sun ............... 8 am - 11 pm</p>
                        <p>Holidays ............. 10 am - 12 pm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <span>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </span>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="social-icons">
                        <ul>
                            <li class="no-margin">Follow Us</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
@stop()