<?php

namespace App\Services;

use App\Bags\AppBag;
use App\Models\{Showroom};
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class DesignCenterService
{
    /**
     * @param string $locale
     * @return LengthAwarePaginator
     */
    public function getAllSalonLayouts(string $locale = 'ru')
    {
        return DB::table('salon_layouts as sl')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', 'sl.id')
            ->where('cotr.type', '=', 'salon_layout')
            ->where('cotr.locale', '=', $locale)
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param string $locale
     * @return LengthAwarePaginator
     */
    public function getAllSalonPictures(string $locale = 'ru')
    {
        return DB::table('salon_pictures as sp')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', 'sp.id')
            ->where('cotr.type', '=', 'salon_picture')
            ->where('cotr.locale', '=', $locale)
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param string $locale
     * @return LengthAwarePaginator
     */
    public function getAllShowrooms(string $locale = 'ru')
    {
        return DB::table('showrooms as sh')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', 'sh.id')
            ->where('cotr.type', '=', 'showroom')
            ->where('cotr.locale', '=', $locale)
            ->paginate(AppBag::PAGINATION_SIZE);
    }
}
