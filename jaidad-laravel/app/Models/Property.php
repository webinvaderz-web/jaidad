<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    protected $guarded = ['id'];
    use HasFactory;

    public function property_gallery()
    {
        return $this->hasOne(PropertyGallery::class);
    }
    public function features()
    {
        return $this->hasOne('\App\Models\Feature','id','feature_id');
    }
    public function agent()
    {
        return $this->hasOne('\App\Models\Feature','id','agent_id');
    }
    public function feature_details()
    {
        return $this->belongsToMany(FeatureDetail::class,'property_feature_detail','property_id','feature_detail_id');
    }
}
