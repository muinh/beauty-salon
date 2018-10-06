<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function showByCategory(Request $request)
    {
       $categoryId = $request->get('categoryId');

       return view('product.show-by-category', [
           'products' => $this->productService->getByCategory($categoryId)
       ]);
    }

    public function show(Request $request)
    {
        $productId = $request->get('productId');

        return view('product.show', [
            'product' => $this->productService->getById($productId)
        ]);
    }
}
