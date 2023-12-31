<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\cart;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();

        return View('product', ['products' => $data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return View('detail', ['product' => $data]);
    }

    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
}
