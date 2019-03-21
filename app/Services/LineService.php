<?php

namespace App\Services;

use Illuminate\Database\Eloquent\{Builder, Collection, Model};
use Illuminate\Support\Facades\DB;

class LineService
{
    /**
     * @param string $locale
     * @return Collection|\Illuminate\Support\Collection
     */
    public function getAllLines(string $locale = 'ru')
    {
        return DB::table('lines as li')
            ->select('cotr.name as title', 'li.id as id', 'li.image as image', 'li.slug as slug')
            ->leftJoin('content_translations as cotr', 'li.id', '=', 'cotr.object_id')
            ->where('cotr.type', '=', 'line')
            ->where('cotr.locale', '=', $locale)
            ->get();
    }

    /**
     * @param $id
     * @param string $locale
     * @return Builder|Builder[]|Collection|Model|null
     */
    public function getById($id, string $locale = 'ru')
    {
        $hasTranslations = DB::table('content_translations as cotr')
            ->where('cotr.type', '=', 'product')
            ->where('cotr.locale', '=', $locale)
            ->where('cotr.object_id', '=', $id)
            ->count();


        $qb = DB::table('lines as li')
            ->select('cotr.name as name', 'li.image as image', 'cotr.description as description')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'li.id')
            ->where('cotr.type', '=', 'line')
            ->where('cotr.locale', '=', $locale)
            ->where('li.id', '=', $id);

        if ($hasTranslations) {
            $qb->addSelect('cotr.name as name', 'cotr.description as description')
                ->where('cotr.type', '=', 'product')
                ->where('cotr.locale', '=', $locale);
        } else {
            $qb->addSelect('pr.name as name', 'pr.features as description');
        }

        return $qb->first();
    }

    /**
     * @param string $slug
     * @param string $locale
     * @return Builder|Builder[]|Collection|Model|null
     */
    public function getBySlug(string $slug, string $locale = 'ru')
    {
        return DB::table('lines as li')
            ->select('cotr.name as name', 'li.image as image', 'cotr.description as description')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'li.id')
            ->where('cotr.type', '=', 'line')
//            ->where('cotr.locale', '=', $locale)
            ->where('li.slug', '=', $slug)
            ->first();
    }
}
