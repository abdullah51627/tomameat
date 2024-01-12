<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'created_by',
        'status', //active, inactive
    ];

    public function createdBy(){
        return $this->belongsTo(User::class,'created_by','id');
    }
}
