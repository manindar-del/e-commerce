<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Order;
class BookingController extends \App\Http\Controllers\Controller
{
    public function index()
    {
      
        return view('admin.booking.index', [
            'title' => 'All booking',
            'seo_meta' => '',
            'orders' => Order::all(),
            
        ]);
    }
}
