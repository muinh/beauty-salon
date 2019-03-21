<?php

namespace App\Services;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Collection;

class BrandsService
{
    /**
     * @return Brand[]|Collection
     */
    public function getAllBrands()
    {
        return Brand::all();
    }
}
