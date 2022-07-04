<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table='enquiry';
    protected $guarded = [];
    use HasFactory;

    public function property()
    {
        return $this->hasOne(Property::class,'id','property_id');
    }

}
