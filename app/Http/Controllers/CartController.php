<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Book;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CartController extends Controller
{
    //

    /**
     *
     * view all the cart item
     * @return Application|Factory|View
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function viewCart()
    {
        $cart = session()->get('cart');

        Session::has('cart') ? Session::get('cart') : $cart = [];
        $total = Cart::calculateTotalAmount($cart); // calculate the total amount

        return view('view-cart', compact('cart','total'));
    }

    /**
     *
     * add item to the cart from the single product page
     * @param Request $request
     * @param $product_id
     * @return RedirectResponse
     */
    public function addToCart(Request $request, $book_id)
    {
        $request->validate([
            'quantity' => 'required'
        ]);
        $quantity = $request->input('quantity');

        Cart::addToCart($book_id, $quantity);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function addToCartFromShop($book_id)
    {
        Cart::addToCartFromShop($book_id);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * remove item from the current cart
     * @param $item_id
     * @return RedirectResponse
     */
    public function removeItem($item_id)
    {
        Cart::removeItem($item_id);
        return redirect()->back()->with('success', 'Product deleted from the cart successfully!');

    }

    /**
     * checkout page
     * @return Application|Factory|View
     */
    public function checkout(){
        Session::has('cart') ? $cart = Session::get('cart') : $cart = [];
        if (!empty($cart)){
            $cart = session()->get('cart');
            $total = Cart::calculateTotalAmount($cart);
            return view('checkout', compact('total'));
        }else{
            return redirect()->route('index');
        }
    }

    /**
     * place the order for the logged user
     * @return RedirectResponse
     */
    public function placeOrder(Request $request){
        //dd($request);
        Cart::checkout($request);
        return redirect()->back()->with('success', 'Your order has been submitted successfully, We will contact you soon');
    }
}
