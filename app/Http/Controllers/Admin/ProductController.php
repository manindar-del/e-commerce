<?php

namespace App\Http\Controllers\admin;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.Product.index', [
            'title' => 'All Products',
            'products' => Product::all(),
        ]);
    }


/**
     * Show the form for creating a new resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Product.create');

    }

    /**
     * Handle contact form
     *
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->check($request);
        $this->add($request);
        return redirect()->back()->with([
            'message' => 'Successfully save'
        ]);
    }

    /**
     * Validate incoming form data
     *
     * @param Request $request
     * @return void
     */
    private function check(Request $request)
    {
        $rules = [
            'name' => 'required',

        ];
        $request->validate($rules);
    }

    private function add(Request $request)
    {
       $this->product = Product::create([
           'name' => $request->name,
           'photo' => $request->photo,
           'price' => $request->price,
           'description' => $request->description

       ]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.Product.edit', [
            'title' => 'All Products',
            'product' => $product,
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back()->with(['ok' => true, 'msg' => ' Deleted']);
    }


/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
           
          ]);

          $product = Product::find($id);
          $product->name = $request->get('name');
          $product->photo = $request->get('photo');
          $product->price = $request->get('price');
          $product->description = $request->get('description');
          $type->save();


        return redirect()->back()->with(['ok' => true, 'msg' => 'Updated']);

    }


}

