@if(sizeof($testimonial) > 0)
<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <section class="testimonial-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Customer <span>says</span></h3>
                        <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider owl-carousel">
                        @foreach($testimonial as $row)
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="{{asset('/images/'.$row->userimage)}}" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>{{$row->name}}</h5>
                                <span><i>{{$row->type}}</i></span>
                                <p class="pt-3">{{$row->description}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@else
<center>
    <h3><span class="style-change">No Testimonial Found</span></h3>
</center>
@endif