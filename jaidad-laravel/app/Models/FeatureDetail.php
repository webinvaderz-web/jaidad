<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureDetail extends Model
{
    protected $guarded = [];
    protected $table = 'features_detail';
    use HasFactory;

    public function feature()
    {
        return $this->hasOne(Feature::class,'id','feature_id');
    }
    public function properties()
    {
        return $this->belongsToMany(Property::class,'property_feature_detail','feature_detail_id','property_id');
    }
}
