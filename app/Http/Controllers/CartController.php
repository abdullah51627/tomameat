<?php

namespace App\Http\Controllers;

use App\Helpers\ApiRes;
use App\Models\Product;
//use Darryldecode\Cart\Cart;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function cartList()
    {
        $cartItems = \Cart::getContent();
//
//        $product = Product::find(1);
//
//
//        if(\Cart::has($product->id)){
//            \Cart::update(
//                $product->id,
//                [
//                    'quantity' => \Cart::get($product->id)->quantity++,
//                ]
//            );
//        }
//         dd($cartItems);
        return view('front.cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        $product = Product::find($request->product_id);

        if(\Cart::has($product->id)){
            \Cart::update(
                $product->id,
                [
                    'quantity' => [
                        'relative' => false,
                        'value' => 1
                    ],
                ]
            );
        }

        \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
//            'attributes' => array(
//                'image' => $product->image,
//            )
        ]);
        toastr()->success('Product is Added to Cart Successfully!', 'success');

        $product->cartCount = \Cart::getTotalQuantity();
        return ApiRes::success("Product Added to cart",200,$product);
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
