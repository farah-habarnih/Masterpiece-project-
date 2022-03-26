<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    use HasFactory;


    public static function addToCart($book_id, $quantity)
    {
        $book = Book::findOrFail($book_id);
        $cart = Session::get('cart', []);

        if (isset($cart[$book_id])) {
            $cart[$book_id]['quantity'] =$cart[$book_id]['quantity']+$quantity;
        } else {
            $cart[$book_id] = [
                "name" => $book->book_name,
                "quantity" => $quantity,
                "price" => $book->price,
                "image_url" => $book->image
            ];
        }
        Session::put('cart', $cart);
    }
    public static function addToCartFromShop($book_id)
    {
        $book = Book::findOrFail($book_id);
        $cart = Session::get('cart', []);
        $quantity=1;
        if (isset($cart[$book_id])) {
            $cart[$book_id]['quantity'] =$cart[$book_id]['quantity']+1;
        } else {
            $cart[$book_id] = [
                "name" => $book->book_name,
                "quantity" => $quantity,
                "price" => $book->price,
                "image_url" => $book->image
            ];
        }
        Session::put('cart', $cart);
    }
    public static function removeItem($item_id)
    {
        $cart = Session::get('cart');

        unset($cart[$item_id]);
        Session::put('cart', $cart);
    }


    public static function checkout($request)
    {
        $cart = Session::get('cart');
        $total = Cart::calculateTotalAmount($cart);

        $user = Auth::user();
        //dd($user->name);
        $order = Order::create([
            'name' => $user->name,
            'email' => $user->email,
            'town' => $request->town,
            'address' => $request->address,
            'zip' => $request->address,
            'phone' => $request->phone_number,
            'user_id' => $user->id,
            'comments' => $request->comments,
            'order_status' => 'Placed',
            'cart' => serialize($cart),
            'total' => $total
        ]);
        foreach ($cart as $key => $item):
            $book = Book::find($key);
            $new_quantity = $book->quantity - $item['quantity'];
        $book->update([
            'quantity' => $new_quantity
        ]);
        endforeach;
        Session::forget('cart');
    }

    /**
     * calculate the amount for current cart
     *
     * @param $cart
     * @return float|int
     */
    public static function calculateTotalAmount($cart)
    {
        $total = 0;
        foreach ($cart as $item):
            $total += $item['quantity'] * $item['price'];
        endforeach;

        return $total;
    }
}

