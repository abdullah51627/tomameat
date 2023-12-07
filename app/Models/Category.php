<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $appends  = [
        'slugName',
    ];

    public function getSlugNameAttribute(){
        return Str::slug($this->name);
    }
    protected $guarded = [];

    public function products(){
        return $this->hasMany(Product::class,'category','id');
    }
}
