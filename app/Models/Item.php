<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Item extends Model
{
    use HasFactory;

    public function category(){
        return $this->hasOne('category','id','category_id');
    }
}
