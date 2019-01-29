<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\{Builder, Collection, Model};

class CategoryService
{
    /**
     * @return Category[]|Collection
     */
    public function getAllCategories()
    {
        return Category::all();
    }

    /**
     * @param $id
     * @return Builder|Builder[]|Collection|Model|null
     */
    public function getById($id)
    {
        return Category::query()->find($id);
    }
}
