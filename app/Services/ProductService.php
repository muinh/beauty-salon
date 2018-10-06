<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function getByCategory($categoryId)
    {
        return Product::query()->where('product.category_id', '=', $categoryId)->get();
    }

    public function getById($productId)
    {
        return Product::query()->find($productId);
    }
}
