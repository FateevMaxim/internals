<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MainPage;
use App\Models\Product;
use Illuminate\Http\Request;

class ZehuaController extends Controller
{
    public function categories()
    {
        $categories = Category::query()
            ->where('parent_id', 1)->select('slug', 'name', 'image', 'parent_id')->get();
        return view('zehua.categories', compact('categories'));
    }

    public function products($slug): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $category = Category::query()->select('id', 'name')->where('slug', $slug)->first();
        $categoryName = $category->name;
        $products = Product::query()
            ->select('name', 'slug', 'image')
            ->where('category_id', $category->id)->get();
        return view('zehua.products', compact('products',  'categoryName'));
    }

    public function product($slug)
    {
        $product = Product::query()->where('slug', $slug)->first();
        return view('zehua.product', compact('product'));
    }
}
