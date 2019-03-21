<?php

namespace App\Services;

use App\Bags\AppBag;
use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\{Builder, Collection, Model};
use Illuminate\Database\Query\Builder as IlluminateBuilder;
use Illuminate\Support\Collection as IlluminateCollection;
use Illuminate\Support\Facades\DB;

class ProductService
{
    /**
     * @param int $productId
     * @param string $locale
     * @return Builder|Builder[]|Collection|Model|IlluminateCollection
     */
    public function getById(int $productId, string $locale = 'ru')
    {
        $hasTranslations = DB::table('content_translations as cotr')
            ->where('cotr.type', '=', 'product')
            ->where('cotr.locale', '=', $locale)
            ->where('cotr.object_id', '=', $productId)
            ->count();

        $qb = DB::table('products as pr')
            ->select('pr.main_image as mainImage',
                'ca.id as categoryId', 'ca.slug as categorySlug', 'li.id as lineId', 'li.slug as lineSlug',
                'pr.id as id', 'ca.title as categoryTitle', 'pr.code as code', 'de.slug as designerSlug',
                'pr.features as features', 'li.name as lineTitle', 'de.id as designerId', 'de.name as designerName',
                'pr.dimensions_cm as dimensionsCm', 'pr.dimensions_inch as dimensionsInch', 'pr.images as images'
            )
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'pr.id')
            ->leftJoin('categories as ca', 'ca.id', '=', 'pr.category_id')
            ->leftJoin('lines as li', 'li.id', '=', 'pr.line_id')
            ->leftJoin('designers as de', 'de.id', '=', 'pr.designer_id')
            ->where('pr.id', '=', $productId);

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
     * @param string $locale
     * @return IlluminateCollection
     */
    public function getLastProducts(string $locale = 'ru')
    {
        return DB::table('products as pr')
            ->select('pr.category_id as categoryId', 'ca.slug as categorySlug', 'pr.id as id', 'pr.main_image',
                'pr.name as name', 'ca.title as categoryTitle', 'br.title as brandName', 'cotr.name as translationName',
                'cotr_cat.name as categoryTranslationName')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'pr.id')
            ->leftJoin('content_translations as cotr_cat', 'cotr_cat.object_id', '=', 'pr.category_id')
            ->leftJoin('categories as ca', 'ca.id', '=', 'pr.category_id')
            ->leftJoin('brands as br', 'br.id', '=', 'pr.brand_id')
            ->where('cotr.type', '=', 'product')
            ->where('cotr.locale', '=', $locale)
            ->where('cotr_cat.locale', '=', $locale)
            ->where('cotr_cat.type', '=', 'category')
            ->orderBy('pr.created_at', 'desc')
            ->get()
            ->take(AppBag::MAX_SLIDER_PRODUCTS);
    }

    /**
     * @return Builder[]|Collection
     */
    public function getRandomProducts()
    {
        return Product::query()
            ->with('brandId')
            ->inRandomOrder()
            ->get()
            ->take(AppBag::MAX_RANDOM_PRODUCTS);
    }

    /**
     * @param string $categorySlug
     * @param string $locale
     * @return LengthAwarePaginator
     */
    public function getByCategory(string $categorySlug, string $locale = 'ru')
    {
        return DB::table('products as pr')
            ->select('pr.id as id', 'pr.main_image as mainImage', 'br.color as brandColor', 'ca.id as categoryId',
                'cotr.name as name', 'cotr.description as description', 'ca.slug as categorySlug')
            ->leftJoin('brands as br', 'br.id', '=', 'pr.brand_id')
            ->leftJoin('categories as ca', 'ca.id', '=', 'pr.category_id')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'pr.id')
            ->where('cotr.type', '=', 'product')
            ->where('cotr.locale', '=', $locale)
            ->where('ca.slug', '=', $categorySlug)
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param int $brandId
     * @param string $categorySlug
     * @return LengthAwarePaginator
     */
    public function getByBrandAndCategory(int $brandId, string $categorySlug)
    {
        return DB::table('products as pr')
            ->select('pr.category_id as categoryId', 'pr.id as id', 'pr.main_image as mainImage', 'br.color as brandColor',
                'pr.name as name', 'ca.slug as categorySlug')
            ->leftJoin('brands as br', 'br.id', '=', 'pr.brand_id')
            ->leftJoin('categories as ca', 'ca.id', '=','pr.category_id')
            ->where('ca.slug', '=', $categorySlug)
            ->where('pr.brand_id', '=', $brandId)
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param string $lineSlug
     * @param string $locale
     * @return LengthAwarePaginator
     */
    public function getByLine(string $lineSlug, string $locale = 'ru')
    {
        return DB::table('products as pr')
            ->select('cotr.name as name', 'cotr.description as description', 'pr.category_id as categoryId',
                'li.id as id', 'pr.main_image as mainImage', 'br.color as brandColor', 'ca.slug as categorySlug')
            ->leftJoin('brands as br', 'br.id', '=', 'pr.brand_id')
            ->leftJoin('categories as ca', 'ca.id', '=', 'pr.category_id')
            ->leftJoin('lines as li', 'li.id', '=', 'pr.line_id')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'pr.id')
            ->where('cotr.type', '=', 'product')
            ->where('cotr.locale', '=', $locale)
            ->where('li.slug', '=', $lineSlug)
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param string $slug
     * @param string $locale
     * @return LengthAwarePaginator
     */
    public function getByDesigner(string $slug, string $locale = 'ru')
    {
        return DB::table('products as pr')
            ->select('pr.category_id as categoryId', 'pr.id as id', 'pr.main_image as mainImage', 'cotr.name as name',
                'br.color as brandColor', 'ca.slug as categorySlug')
            ->leftJoin('designers as de', 'de.id', '=', 'pr.designer_id')
            ->leftJoin('brands as br', 'br.id', '=', 'pr.brand_id')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'pr.id')
            ->leftJoin('categories as ca', 'ca.id', '=','pr.category_id')
            ->where('cotr.type', '=', 'product')
            ->where('cotr.locale', '=', $locale)
            ->where('de.slug', '=', $slug)
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param $product
     * @param string $locale
     * @return Builder[]|Collection|IlluminateBuilder[]|IlluminateCollection
     */
    public function getSimilarProducts($product, string $locale)
    {
        return DB::table('products as pr')
            ->select(
                'pr.category_id as categoryId', 'pr.id as id', 'pr.main_image as mainImage', 'cotr.name as name',
                    'br.color as brandColor', 'pr.images as images', 'ca.slug as categorySlug'
                )
            ->leftJoin('brands as br', 'br.id', '=', 'pr.brand_id')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'pr.id')
            ->leftJoin('categories as ca', 'ca.id', '=','pr.category_id')
            ->where('category_id', '=', $product->categoryId)
            ->where('pr.id', '!=', $product->id)
            ->where('cotr.type', '=', 'product')
            ->where('cotr.locale', '=', $locale)
            ->take(AppBag::MAX_SLIDER_PRODUCTS)
            ->get();
    }

    /**
     * @param $product
     * @return Builder[]|Collection|IlluminateBuilder[]|IlluminateCollection
     */
    public function getSameLineProducts($product)
    {
        return DB::table('products as pr')
            ->select(
                'pr.category_id as categoryId', 'pr.id as id', 'pr.main_image as mainImage', 'pr.name as name',
                'br.color as brandColor', 'pr.images as images', 'ca.slug as categorySlug'
            )
            ->leftJoin('brands as br', 'br.id', '=', 'pr.brand_id')
            ->leftJoin('categories as ca', 'ca.id', '=','pr.category_id')
            ->where('line_id', '=', $product->lineId)
            ->where('pr.id', '!=', $product->id)
            ->take(AppBag::MAX_SLIDER_PRODUCTS)
            ->get();
    }

    public function searchByNameOrCode(string $term)
    {
        return DB::table('products as pr')
            ->select('pr.main_image as mainImage', 'pr.category_id', 'pr.id', 'pr.name', 'br.color as brandColor', 'cotr.name as translatedName')
            ->leftJoin('brands as br', 'br.id', '=', 'pr.brand_id')
            ->leftJoin('content_translations as cotr', 'cotr.object_id', '=', 'pr.id')
            ->where('pr.name', 'like', sprintf('%%%s%%', $term))
            ->where('pr.code', '=', $term)
            ->orWhere(function($query) use ($term) {
                $query->where('cotr.name', 'like', sprintf('%%%s%%', $term))
                    ->where('cotr.type', '=', 'product');
            })
            ->get();
    }
}
