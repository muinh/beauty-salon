<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'image', 'material_category_id'];

    public function materialCategoryId()
    {
        return $this->hasOne(MaterialCategory::class, 'id');
    }
}
