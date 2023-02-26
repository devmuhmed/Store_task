<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\updateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        $response = $product->all();
        return apiResponse(ProductResource::collection($response));
    }

    public function store(StoreProductRequest $request)
    {
        $response = Product::create($request->validated());
        return apiResponse(ProductResource::make($response));
    }

    public function update(updateProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return apiResponse(ProductResource::make($product));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return apiResponse(new ProductResource($product));
    }
}
