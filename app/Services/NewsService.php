<?php
namespace App\Services;

use App\Bags\AppBag;
use App\Models\News;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\{Builder, Collection, Model};

class NewsService
{
    /**
     * @return LengthAwarePaginator
     */
    public function getAll()
    {
        return News::query()
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param $newsCategoryId
     * @return LengthAwarePaginator
     */
    public function getByCategory($newsCategoryId)
    {
        return News::query()
            ->where('news_category_id', '=', $newsCategoryId)
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param $newsId
     * @return Builder|Builder[]|Collection|Model|null
     */
    public function getById($newsId)
    {
        return News::query()->find($newsId);
    }

    /**
     * @return Builder[]|Collection
     */
    public function getLatest()
    {
        return News::query()
            ->orderBy('created_at', 'desc')
            ->get()
            ->take(AppBag::MAX_LATEST_NEWS);
    }
}
