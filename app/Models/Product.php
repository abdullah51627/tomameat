<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function setKeywordsAttribute($value){
        return $this->attributes['keywords'] = serialize($value);
    }
    public function categoryRel(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
