<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\ProductsFilterRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdController extends Controller
{
    public function get()
    {
    	$products = Product::get();
    	return view('product',  compact('products'));
    }

    public  function index(ProductsFilterRequest $request)
    {
        $productsQuery = Product::query();

        if ($request->filled('price_from')){
            $productsQuery->where('price', '>=', $request->price_from);
        }

        if ($request->filled('price_to')){
            $productsQuery->where('price', '<=', $request->price_to);
        }

        $products = $productsQuery->paginate(12)->withPath("?".$request->getQueryString());
        return view('index', compact('products'));
    }

    public function category($code){
    	$category=Category::where('code', $code)->first();
        $products = Product::where('category_id', $category->id)->get();
    	return view('category', compact('category', 'products'));
    }

	public function categories(){
		$categories=Category::get();
		return view('categories', compact('categories'));
    }

}
