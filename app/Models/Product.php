<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "products";

    public function setKeywordsAttribute($value){
        return $this->attributes['keywords'] = serialize($value);
    }
    public function categoryRel(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function scopeSearch($query,$search){
        $query->where(function($q) use($search){
            $q->where("name",'like','%'.$search.'%');
            $q->orWhere("description",'like','%'.$search.'%');
            $q->orWhere("title",'like','%'.$search.'%');
            $q->orWhere("keywords",'like','%'.$search.'%');
            $q->orWhere("meta_description",'like','%'.$search.'%');
            $q->orWhere("additional_info",'like','%'.$search.'%');
        });

        return $query;
    }
}
