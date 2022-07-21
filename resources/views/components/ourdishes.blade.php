@if(sizeof($dish) > 0)
<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
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
                @foreach($dish as $row)
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="{{asset('/images/'.$row->foodimage)}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>{{$row->name}}</h5>
                                <span class="style-change">${{$row->price}}</span>
                            </div>
                            <p class="pt-3">{{$row->description}}</p>
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
    <h3><span class="style-change">No Dish Found</span></h3>
</center>
@endif