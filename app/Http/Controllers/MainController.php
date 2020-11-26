<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{
    public function main() {
        $products = Product::get();
        $categories = Category::get();
        return view('main')->with('products', $products)->with('categories', $categories);
    }

    public function categories() {
        $categories = Category::get();
        //dd($categories);
        return view('categories')->with('categories', $categories);
    }

    public function category(Category $category ) {
        $categories = Category::get();
        $products = Product::where('category_id', $category->id)->get();
        return view('category')->with('products', $products)->with('category', $category)->with('categories', $categories);
    }

    public function products() {
        $products = Product::get();
        dd($products);
    }
}
