<?php
use Illuminate\Support\Facades\DB;

    function print_data($array)
    {
        echo "<div align='left'><pre>";
        if(is_array($array))
            print_r($array);
        else
            echo $array;
        echo "</pre></div>";
    }
    function get_dishes($id=''){
        $condition = '';
        if($id!='')
        {
            $condition = 'where id='.$id;
        }
        $dishes = DB::select("SELECT * FROM dishes $condition");
        return $dishes;
    }

    function updated_dishes()
    {
        $dishes = DB::select("SELECT * FROM dishes where type='S'");
        return $dishes;
    }
?>