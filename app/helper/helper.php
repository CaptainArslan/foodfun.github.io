<?php
use Illuminate\Support\Facades\DB;
use App\Models\Dishes;

    function print_data($array)
    {
        echo "<div align='left'><pre>";
        if(is_array($array))
            print_r($array);
        else
            echo $array;
        echo "</pre></div>";
    }

    function get_dishes()
    {
        // $dishes = Dishes::all()->take(6);
        // $dishes = Dishes::all()->where('deleted_at', '=', '');
        $dishes = Dishes::all();
        return $dishes;
    }

    function updated_dishes()
    {
        $dishes = DB::select("SELECT * FROM `dishes` ORDER BY created_at ASC LIMIT 3");
        return $dishes;
    }

    function special_dishes()
    {
        // $dishes = DB::select("SELECT * FROM dishes where type='S'");
        $dishes = Dishes::where('type', 'S');
        return $dishes;
    }

    function testimonial()
    {
        $testimonial = DB::select("SELECT * FROM `testimonial`");
        return $testimonial;
    }

?>