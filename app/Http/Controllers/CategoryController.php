<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('category/index', ['categories' => $categories]);
    }
    public function create()
    {
        return view('category/create');
    }
    public function store(Request $request)
    {
        $category = new Category;
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();
        return redirect()->route('category_list');
    }
    public function edit($id)
    {
        $category = Category::where('id', $id)->get()->first();
        return view('category/edit', ['id' => $id, 'category' => $category]);
    }
    public function update($id, Request $request)
    {
        $category = Category::where('id', $id)->get()->first();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->update();
        return redirect()->route('category_list');
    }
    public function delete($id)
    {
        $category = Category::where('id', $id)->get()->first();
        $category->delete();
        return redirect()->route('category_list');
    }
}
