<?php

namespace App\Services;

use App\Bags\AppBag;
use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\{Builder, Collection, Model};
use Illuminate\Database\Query\Builder as IlluminateBuilder;
use Illuminate\Support\Collection as IlluminateCollection;

class ProductService
{
    /**
     * @param int $productId
     * @return Builder|Builder[]|Collection|Model
     */
    public function getById(int $productId)
    {
        return Product::query()->find($productId);
    }

    /**
     * @return Builder[]|Collection
     */
    public function getLastProducts()
    {
        return Product::query()
            ->with(['categoryId'])
            ->orderBy('created_at', 'desc')
            ->get()
            ->take(AppBag::MAX_SLIDER_PRODUCTS);
    }

    public function getRandomProducts()
    {
        return Product::query()
            ->with('brandId')
            ->inRandomOrder()
            ->get()
            ->take(AppBag::MAX_RANDOM_PRODUCTS);
    }

    /**
     * @param int $categoryId
     * @return LengthAwarePaginator
     */
    public function getByCategory(int $categoryId)
    {
        return Product::query()
            ->with(['brandId', 'categoryId'])
            ->where('category_id', '=', $categoryId)
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param int $brandId
     * @param int $categoryId
     * @return LengthAwarePaginator
     */
    public function getByBrandAndCategory(int $brandId, int $categoryId)
    {
        return Product::query()
            ->with(['brandId', 'categoryId'])
            ->where('category_id', '=', $categoryId)
            ->where('brand_id', '=', $brandId)
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param int $lineId
     * @return LengthAwarePaginator
     */
    public function getByLine(int $lineId)
    {
        return Product::query()
            ->with(['brandId', 'lineId'])
            ->where('line_id', '=', $lineId)
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param int $designerId
     * @return LengthAwarePaginator
     */
    public function getByDesigner(int $designerId)
    {
        return Product::query()
            ->where('designer_id', '=', $designerId)
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param $product
     * @return Builder[]|Collection|IlluminateBuilder[]|IlluminateCollection
     */
    public function getSimilarProducts($product)
    {
        return Product::query()
            ->where('category_id', '=', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(AppBag::MAX_SLIDER_PRODUCTS)
            ->get();
    }

    /**
     * @param $product
     * @return Builder[]|Collection|IlluminateBuilder[]|IlluminateCollection
     */
    public function getSameLineProducts($product)
    {
        return Product::query()
            ->where('line_id', '=', $product->line_id)
            ->where('id', '!=', $product->id)
            ->take(AppBag::MAX_SLIDER_PRODUCTS)
            ->get();
    }

    public function searchByNameOrCode(string $term)
    {
        return Product::query()
            ->where('name', 'like', sprintf('%%%s%%', $term))
            ->orWhere('code', '=', $term)
            ->get();
    }
}
