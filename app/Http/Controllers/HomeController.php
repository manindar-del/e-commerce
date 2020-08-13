<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth', 'redirect_if_admin']);
    }

    /**
     * Show the application home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('template.index', [
            'title' => config('app.name'),
            
        ]);
    }

    public function book(Request $request)
    {
        
        //dd($productss);
        return view('agent.product.index', [
            'title' => config('app.name'),
            'seo_meta' => '',
            'products' => Product::all(),
            
            
        ]);

        
    }
    public function cart()
    {
        return view('agent.cart');
    }
    public function addToCart($id)
    {
        $products = Product::find($id);
 
        if(!$products) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "name" => $products->name,
                        "quantity" => 1,
                        "price" => $products->price,
                        "photo" => $products->photo
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $products->name,
            "quantity" => 1,
            "price" => $products->price,
            "photo" => $products->photo
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {

        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
        dd('cart');
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }

    }

}
