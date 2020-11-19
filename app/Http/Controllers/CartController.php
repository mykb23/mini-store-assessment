<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Product $product)
    {
        // add the product to cart
        \Cart::add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(
                'currency' => $product->currency,
            ),
            'associatedModel' => $product
        ));
        return back();
        // return redirect()->route('cart.index');
    }

    public function index()
    {
        $cartItems = \Cart::getContent();
        return view('cart.index', compact('cartItems'));
    }

    public function destroy($itemId)
    {
        \Cart::remove($itemId);
        return back();
    }

    public function update($rowId)
    {
        \Cart::update($rowId, array(
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            ),
        ));

        return back();
    }
}
