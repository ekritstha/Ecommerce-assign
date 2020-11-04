<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Models\Cart;
use App\Models\Models\Category;
use App\Models\Models\Product;
use App\Models\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }

    public function products()
    {
        $products =Product::paginate(9);
        return view('frontend.pages.products', compact('products'));
    }

    public function singleProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('frontend.pages.single-product', compact('product'));
    }

    public function category($slug)
    {
        $categoryId = Category::where('slug', $slug)->first()->id;
        $products = Product::where('category', $categoryId)->paginate(9);
        return view('frontend.pages.products', compact('products'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $qty = $request->quantity;
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id, $qty);

        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('frontend.pages.cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('frontend.pages.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function search(Request $request)
    {
        $query = $request->input("search");
        $products =Product::where('name', 'LIKE', '%' . $query . '%')->paginate(9);
        return view('frontend.pages.products', compact('products'));
    }

    public function checkout()
    {
        if (!Session::has('cart')) {
            return view('frontend.pages.cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('frontend.pages.checkout', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function postCheckout(OrderRequest $request)
    {
        if (!Session::has('cart')) {
            return view('frontend.pages.cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        try {
            $order = new Order();
            $order->cart = '';
            foreach ($cart->items as $item) {
                $order->cart = $order->cart . $item['item']->product_id . ' - ' . $item['qty'] . ' | ';
            }
            $order->totalPrice = $cart->totalPrice;
            $order->name = $request->input('name');
            $order->address = $request->input('address');
            $order->contact = $request->input('contact');
            $order->save();
        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('index')->with('success', 'Success');
    }
}
