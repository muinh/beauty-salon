<?php

namespace App\Services;

use Illuminate\Database\Eloquent\{Builder, Collection, Model};
use Illuminate\Support\Facades\DB;

class DesignerService
{
    /**
     * @param string $locale
     * @return \Illuminate\Support\Collection
     */
    public function getAllDesigners(string $locale = 'ru')
    {
        return DB::table('designers as de')
            ->select('cotr.name as title', 'de.id as id', 'de.image as image', 'de.slug as slug')
            ->leftJoin('content_translations as cotr', 'de.id', '=', 'cotr.object_id')
            ->where('cotr.type', '=', 'designer')
            ->where('cotr.locale', '=', $locale)
            ->get();
    }

    /**
     * @param int $designerId
     * @param string $locale
     * @return Builder|Builder[]|Collection|Model|null
     */
    public function getById(int $designerId, string $locale = 'ru')
    {
        return DB::table('designers as de')
            ->select('cotr.name as name', 'de.image as image', 'cotr.description as description',
                'de.website as website', 'de.slug as slug')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'de.id')
            ->where('cotr.type', '=', 'designer')
            ->where('cotr.locale', '=', $locale)
            ->where('de.id', '=', $designerId)
            ->first();
    }

    /**
     * @param string $slug
     * @param string $locale
     * @return Builder|Builder[]|Collection|Model|null
     */
    public function getBySlug(string $slug, string $locale = 'ru')
    {
        return DB::table('designers as de')
            ->select('cotr.name as name', 'de.image as image', 'cotr.description as description',
                'de.website as website')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'de.id')
            ->where('cotr.type', '=', 'designer')
            ->where('cotr.locale', '=', $locale)
            ->where('de.slug', '=', $slug)
            ->first();
    }
}
