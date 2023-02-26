<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $response = CategoryResource::collection($categories);
        return apiResponse($response);
    }

    public function store(ApiCategoryRequest $request)
    {
        $category = Category::create($request->all());
        return apiResponse($category);
    }

    public function update(ApiCategoryRequest $request,Category $category)
    {
        $category->update($request->all());
        return apiResponse($category);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return apiResponse($category);
    }

}
