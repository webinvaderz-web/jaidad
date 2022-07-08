<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];
    protected $table = 'cities';
    use HasFactory;

    public function property()
    {
        return $this->hasOne(Property::class,'id','city_id');
    }
}
