<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'image_id', 'material_category_id'];
}
