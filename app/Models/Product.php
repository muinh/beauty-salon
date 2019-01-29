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
        'name', 'code', 'features', 'category_id', 'line_id', 'designer_id',
        'brand_id', 'dimensions_inch', 'dimensions_cm'
    ];

    public function brandId()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function categoryId()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function lineId()
    {
        return $this->belongsTo(Line::class, 'line_id', 'id');
    }

    public function designerId()
    {
        return $this->belongsTo(Designer::class, 'designer_id', 'id');
    }

    public function materials()
    {
        return $this->belongsTo(Material::class);
    }
}
