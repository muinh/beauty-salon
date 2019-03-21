<?php

namespace App\Services;

use Illuminate\Database\Eloquent\{Builder, Collection, Model};
use Illuminate\Support\Facades\DB;

class CategoryService
{
    /**
     * @param string $locale
     * @return \Illuminate\Support\Collection
     */
    public function getAllCategories(string $locale = 'ru')
    {
        return DB::table('categories as ca')
            ->select('cotr.name as title', 'ca.id as id', 'ca.image as image', 'ca.slug as slug')
            ->leftJoin('content_translations as cotr', 'ca.id', '=', 'cotr.object_id')
            ->where('cotr.locale', '=', $locale)
            ->where('cotr.type', '=', 'category')
            ->get();
    }

    /**
     * @param int $id
     * @param string $locale
     * @return Builder|Builder[]|Collection|Model|null
     */
    public function getById(int $id, string $locale = 'ru')
    {
        return DB::table('categories as ca')
            ->select('cotr.name as title', 'ca.image as image', 'cotr.description as description', 'ca.id as id')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'ca.id')
            ->where('cotr.type', '=', 'category')
            ->where('cotr.locale', '=', $locale)
            ->where('ca.id', '=', $id)
            ->first();
    }

    /**
     * @param string|null $slug
     * @param string $locale
     * @return Model|\Illuminate\Database\Query\Builder|object|null
     */
    public function getBySlug(?string $slug, string $locale = 'ru')
    {
        return DB::table('categories as ca')
            ->select('cotr.name as title', 'ca.image as image', 'cotr.description as description', 'ca.id as id',
                'ca.slug as slug')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'ca.id')
            ->where('cotr.type', '=', 'category')
            ->where('cotr.locale', '=', $locale)
            ->where('ca.slug', '=', $slug)
            ->first();
    }
}
