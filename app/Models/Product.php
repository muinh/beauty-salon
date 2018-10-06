<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'main_image_id', 'features', 'category_id', 'line_id',
        'designer_id', 'brand_id', 'dimensions_inch', 'dimensions_cm'
    ];

    public function images()
    {

    }

    public function materials()
    {

    }
}
