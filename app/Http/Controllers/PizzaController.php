<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Pizza;
use Auth;
use App\Models\Order;
use Session;

class PizzaController extends Controller
{
    public function getIndex()
    {
        $pizzas = Pizza::all();
        return view('shop.index', ['pizzas' => $pizzas]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $pizza = Pizza::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($pizza, $pizza->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('shop.index');
    }
    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart' , ['pizzas' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['pizzas' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        Session::put('cart', $cart);
        return redirect()->route('pizza.shoppingCart');

    }
    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart -> removeItem($id);

        Session::put('cart', $cart);
        return redirect()->route('pizza.shoppingCart');
    }


    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);

    }
    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route('shop.shopping-cart');
        }


        $order = new Order();
        $order->status = $request->input('status');


        Auth::user()->orders()->save($order);

        
        return redirect()->route('shop.index')->with('success', 'Successfully purchased pizzas!');

    }

    public function removeOrder(Request $request){




    }



}
