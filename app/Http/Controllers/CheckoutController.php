<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Order;
use App\Product;
use App\OrderItem;

use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{


   

    public function getCheckout()
    {
        return view('agent.checkout.index');
    }
    
   

    public function placeOrder(Request $request)
    {
       
        if(session('cart'))
        foreach(session('cart') as $id => $details)

        $order = Order::create([
            'order_number'      =>  'ORD-'.strtoupper(uniqid()),
            'user_id'           => auth()->user()->id,
            'status'            =>  'pending',
            'grand_total'       =>  $details['price'] * $details['quantity'],
            'item_count'        =>  $details['quantity'],
            'payment_status'    =>  0,
            'payment_method'    =>  null,
            'first_name'        =>  $request->first_name,
            'last_name'         =>  $request->last_name,
            'address'           =>  $request->address,
            'city'              =>  $request->city,
            'country'           =>  $request->country,
            'post_code'         =>  $request->post_code,
            'phone_number'      =>  $request->phone_number,
            'notes'             =>  $request->notes
        ]);
    
      
        if ($order) {
   
            
            //dd($items);
    
           
               
                $product = Product::find(1);
               
               
                $orderItem = OrderItem::create([
                
               
                     'product_id'    =>  $product->id,
                    'quantity'      =>  $details['quantity'],
                    'price'         =>   $details['price'] * $details['quantity']
                ]);
    
                $order->items()->save($orderItem);
            }
        
    
        return $order;
        // return redirect()->back()->with(['ok' => true, 'msg' => 'Updated']);
    }


    }

