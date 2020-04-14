<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(12);
        return view('auth.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('auth.categories.form');
    }

    public function store(CategoryRequest $request)
    {
        $params = $request->all();
        unset($params['logo']);
        if ($request->has('logo')) {
            $params['logo'] = $request->file('logo')->store('categories');
        }
        Category::create($params);
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        return view('auth.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('auth.categories.form', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $params = $request->all();
        unset($params['logo']);
        if ($request->has('logo')) {
            Storage::delete($category->logo);
            $params['logo'] = $request->file('logo')->store('categories');
        }
        $category->update($params);
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
