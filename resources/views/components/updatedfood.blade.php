@if(sizeof($updated) > 0)
<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <section class="update-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Our <span>food</span> update</h3>
                        <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($updated as $row)
                <div class="col-md-4">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="{{asset('/images/'.$row->foodimage)}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="post-admin d-lg-flex mb-3">
                                <span class="mr-5 d-block mb-2 mb-lg-0"><i class="fa fa-user-o mr-2"></i>Admin</span>
                                <span><i class="fa fa-calendar-o mr-2"></i><!-- 18/09/2018  --> {{$row->created_at}}</span>
                            </div>
                            <h5>{{$row->special_tagline}}</h5>
                            <p>{{$row->description}}</p>
                            <a href="#" class="template-btn3 mt-2">read more <span><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@else
<center>
    <h3><span class="style-change">No Updated Dish Found</span></h3>
</center>
@endif