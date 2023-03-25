<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function create()
    {
//        $parentCategory = Category::where("parent_id", null)->get();
        $parentCategories = Category::whereNull("parent_id")->get();

        return view("admin.category.create", compact('parentCategories'));
    }

    public function store(CategoryCreateRequest $request)
    {
//        $request->validate([
//            "name" => ["required","min:2"],
//            "slug" => ["required","min:2","unique:categories"],
//            "order" => ["required","integer"]
////            "name" => "required|min:2"
//        ]);
//        $data = $request->only()
        $data = $request->except('_token');
//        $data['slug'] = Str::slug($request->slug != null ? $request->slug : $request->name);
        $data['slug'] = Str::slug(!is_null($request->slug) ? $request->slug : $request->name);
        $data['status'] = isset($request->status) ? 1 : 0;
        $data['feature_status'] = isset($request->feature_status) ? 1 : 0;
//        dd($data, $request->all(), isset($request->status));
//            $data = [s
//              "name" => $request->name,
//            ];
        Category::create($data);
        return redirect()->route("admin.category.list");
    }

    public function list()
    {
        $list = Category::with(['parentCategory'])->orderBy('order','DESC')->get();

        return view("admin.category.list", compact('list'));
    }
}
