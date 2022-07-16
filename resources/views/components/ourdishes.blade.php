<!-- The whole future lies in uncertainty: live immediately. - Seneca -->
<div class="col-md-4 col-sm-6">
    <div class="single-food">
        <div class="food-img">
            <img src="{{asset('/images/'.$dish->image)}}" class="img-fluid" alt="">
        </div>
        <div class="food-content">
            <div class="d-flex justify-content-between">
                <h5>{{$dish->name}}</h5>
                <span class="style-change">${{$dish->price}}</span>
            </div>
            <p class="pt-3">{{$dish->description}}.</p>
        </div>
    </div>
</div>
