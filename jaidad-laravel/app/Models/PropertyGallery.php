<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyGallery extends Model
{
    use HasFactory;
    protected $table = 'property_gallery_images';
    protected $guarded = [];
    protected $casts =
    [
        'image_gallery' => 'array'
    ];

    public function setImageGalleryAttribute($value)
    {
        $this->attributes['image_gallery'] = json_encode($value) ;
    }
}
