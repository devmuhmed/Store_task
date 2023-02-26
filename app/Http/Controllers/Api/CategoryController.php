<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $categories)
    {
        $response = CategoryResource::collection($categories->all());
        return apiResponse($response);
    }

    public function store(ApiCategoryRequest $request)
    {
        $category = Category::create($request->validated());
        return apiResponse(CategoryResource::make($category));
    }

    public function update(UpdateCategoryRequest $request,Category $category)
    {
        $category->update($request->validated());
        return apiResponse(CategoryResource::make($category));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return apiResponse(CategoryResource::make($category));
    }

}
