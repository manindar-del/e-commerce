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
            'products' => Product::all(),
         
            
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
        //dd('cart');
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



    ////////////////
        public function getAllProducts() {
           
            $products = Product::get()->toJson(JSON_PRETTY_PRINT);
            return response($products, 200);

          }
          
      
          public function createProduct(Request $request) {

    
                $product = new Product;
                $product->name = $request->name;
                $product->price = $request->price;
                $product->photo = $request->photo;
                $product->save();

                
             return response()->json([
                "message" => "product record created"
            ], 201);
          }
          
          
      
          public function getProduct($id) {

            if (Product::where('id', $id)->exists()) {
                $product = Product::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
                return response($product, 200);
              } else {
                return response()->json([
                  "message" => "Product not found"
                ], 404);
              }
          
            
          }
      
          public function updateProduct(Request $request, $id) {
           
            if (Product::where('id', $id)->exists()) {
                $product = Product::find($id);
                $product->name = is_null($request->name) ?  $product->name : $request->name;
                $product->price = is_null($request->price) ? $product->price : $request->price;
                $product->photo = is_null($request->photo) ? $product->photo : $request->photo;
                $product->save();
        
                return response()->json([
                    "message" => "records updated successfully"
                ], 200);
                } else {
                return response()->json([
                    "message" => "Product not found"
                ], 404);
                
            }


          }
      
          public function deleteProduct ($id) {

            if(Product::where('id', $id)->exists()) {
                $product = Product::find($id);
                $product->delete();
        
                return response()->json([
                  "message" => "records deleted"
                ], 202);
              } else {
                return response()->json([
                  "message" => "Product not found"
                ], 404);
              }
            }
           
          }





