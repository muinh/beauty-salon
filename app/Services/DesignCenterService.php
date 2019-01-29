<?php

namespace App\Services;

use App\Bags\AppBag;
use App\Models\{SalonLayout, SalonPicture, Showroom};
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class DesignCenterService
{
    /**
     * @return LengthAwarePaginator
     */
    public function getAllSalonLayouts()
    {
        return SalonLayout::query()->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getAllSalonPictures()
    {
        return SalonPicture::query()->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getAllShowrooms()
    {
        return Showroom::query()->paginate(AppBag::PAGINATION_SIZE);
    }
}
