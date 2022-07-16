<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MainModel extends Model
{
    use HasFactory;
    public function get_dishes($id=''){
        $condition = '';
        if($id!='')
        {
            $condition = 'where id='.$id;
        }
        $dishes = DB::select("SELECT * FROM dishes $condition");
        return $dishes;
    }

    public function updated_dishes()
    {
        $dishes = DB::select("SELECT * FROM dishes where type='S'");
        return $dishes;
    }
}
