<?php
namespace App\Services;

use App\Bags\AppBag;
use App\Models\News;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\{Builder, Collection, Model};
use Illuminate\Support\Facades\DB;

class NewsService
{
    /**
     * @param string|null $locale
     * @return LengthAwarePaginator
     */
    public function getAll(?string $locale = 'ru')
    {
        return DB::table('news')
            ->select('news.id as id', 'news.name as name', 'news.content as content',
                'news.news_category_id as newsCategoryId', 'news.mainImage as mainImage', 'news.images as images',
                'news.created_at as created_at', 'news.updated_at as updated_at', 'nc.name as newsCategoryName',
                'cotr.name as newsTranslationName', 'cotr.description as newsContent', 'cotr_cat.name as newsCategoryTranslatedName')
            ->leftJoin('news_categories as nc', 'nc.id', 'news.news_category_id')
            ->leftJoin('content_translations as cotr', 'cotr.object_id',  '=', 'news.id')
            ->leftJoin('content_translations as cotr_cat', 'cotr_cat.object_id',  '=', 'nc.id')
            ->where('cotr.type', '=', 'news')
            ->where('cotr.locale', '=', $locale)
            ->where('cotr_cat.locale', '=',  $locale)
            ->where('cotr_cat.type', '=',  'news_category')
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param int $newsCategoryId
     * @param string|null $locale
     * @return LengthAwarePaginator
     */
    public function getByCategory(int $newsCategoryId, ?string $locale = 'ru')
    {
        return DB::table('news')
            ->select('news.id as id', 'news.name as name', 'news.content as content',
                'news.news_category_id as newsCategoryId', 'news.mainImage as mainImage', 'news.images as images',
                'news.created_at as created_at', 'news.updated_at as updated_at', 'nc.name as newsCategoryName',
                'cotr.name as newsTranslationName', 'cotr.description as newsContent', 'cotr_cat.name as newsCategoryTranslatedName')
            ->leftJoin('news_categories as nc', 'nc.id', 'news.news_category_id')
            ->leftJoin('content_translations as cotr', 'cotr.object_id',  '=', 'news.id')
            ->leftJoin('content_translations as cotr_cat', 'cotr_cat.object_id',  '=', 'nc.id')
            ->where('news.news_category_id', '=', $newsCategoryId)
            ->where('cotr.type', '=', 'news')
            ->where('cotr.locale', '=', $locale)
            ->where('cotr_cat.locale', '=',  $locale)
            ->where('cotr_cat.type', '=',  'news_category')
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param $newsId
     * @param string $locale
     * @return Builder|Builder[]|Collection|Model|null
     */
    public function getById(int $newsId, string $locale = 'ru')
    {
        $hasTranslations = DB::table('content_translations as cotr')
            ->where('cotr.type', '=', 'news')
            ->where('cotr.locale', '=', $locale)
            ->where('cotr.object_id', '=', $newsId)
            ->count();

        $qb = DB::table('news')
            ->select('news.name as name', 'news.content as content', 'news.news_category_id as newsCategoryId',
                'news.mainImage as mainImage', 'news.created_at as created_at', 'cotr.name as newsTranslationName',
                'cotr.description as newsContent', 'news.news_category_id', 'nc.name as newsCategoryName', 'news.images',
                'cotr_cat.name as newsCategoryTranslatedName')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'news.id')
            ->leftJoin('news_categories as nc', 'nc.id', 'news.news_category_id')
            ->leftJoin('content_translations as cotr_cat', 'cotr_cat.object_id',  '=', 'nc.id')
            ->where('news.id', '=', $newsId)
            ->where('cotr_cat.locale', '=',  $locale)
            ->where('cotr_cat.type', '=',  'news_category');

        if ($hasTranslations) {
            $qb->addSelect('cotr.name as name', 'cotr.description as description')
                ->where('cotr.type', '=', 'news')
                ->where('cotr.locale', '=', $locale);
        } else {
            $qb->addSelect('news.name as name');
        }

        return $qb->first();
    }

    /**
     * @param string $locale
     * @return \Illuminate\Support\Collection
     */
    public function getLatest(string $locale)
    {
        return DB::table('news as ne')
            ->select('ne.id as id', 'ne.images as images', 'ne.name as name', 'ne.created_at as createdAt', 'ne.content as content')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'ne.id')
            ->where('cotr.type', '=', 'news')
            ->where('cotr.locale', '=', $locale)
            ->orderBy('ne.created_at', 'desc')
            ->get()
            ->take(AppBag::MAX_LATEST_NEWS);
    }
}
