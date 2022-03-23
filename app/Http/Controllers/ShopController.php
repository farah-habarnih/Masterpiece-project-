<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));

    }

    /**
     * view all the products inside the shop
     * @return Application|Factory|View
     */
    public function productsList()
    {
        $books = Book::where('quantity', '<>', '')->get();
        $categories = Category::all();
        return view('list-products', compact('books','categories'));
    }

    /**
     * view specific product inside the shop
     * @param $product_id
     * @return Application|Factory|View
     */
    public function SingleProduct(Category $category, Book $book)
    {
        return view('single-product', compact('book'));
    }

    public function productsCategoryList(Category $category)
    {

        $categories = Category::all();
        $books = Book::where('quantity', '<>', '0')
            ->where('category_id', $category->id)->get();

        return view('list-category-products', compact('books', 'categories','category'));

    }
}
