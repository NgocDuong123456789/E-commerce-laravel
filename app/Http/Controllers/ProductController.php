<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return  view('product', compact('data'));
    }
    public function detail($id)
    {
        $data = Product::find($id);
        return view('detail', compact('data'));
    }
    public function addToCart(Request $request)
    {
        if (session()->has('user')) {
            $result = new cart;
            $result->user_id = session()->get('user')['id'];
            $result->product_id = $request->product_id;
            $result->save();
            return redirect('product');
        } else {
            return redirect('login');
        }
    }
    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
    public function cartList()
    {
        $userId = session()->get('user')['id'];
        $product = DB::table('cart')
            ->join('Product', 'cart.product_id', '=', 'Product.id')
            ->where('cart.user_id', $userId)
            ->select('Product.*', 'cart.id as cart_id')
            ->get();
        return view('cartList', compact('product'));
    }
    public function removeCart($cart_id)
    {
        Cart::destroy($cart_id);
        return redirect('cartList');
    }
}
