<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return successResponse('success',$categories);
    }

    public function store(Request $request)
    {
        $validator = validator()->make($request->all(),[
            'name_ar' => 'required',
            'name_en' => 'required',
        ]);
        if($validator->fails()){
            return failedResponse($validator->errors()->first());
        }
        $category = Category::create($request->all());
        return successResponse('success',$category);
    }

    public function update(Request $request,$id)
    {
        $validator = validator()->make($request->all(),[
            'name_ar' => 'required',
            'name_en' => 'required',
        ]);
        if($validator->fails()){
            return failedResponse($validator->errors()->first());
        }
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return successResponse('success',$category);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return successResponse('success');
    }


}
