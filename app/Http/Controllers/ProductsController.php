<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =  Product::orderBy('created_at','desc')->paginate(0);
        return view('pages.dashboard')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'type' => 'required',
            'quantity' => 'required',
            'unit' => 'required',
            'image' => 'required'
        ]);
        $product = new Product;
        $product->name = $request->input('name');
        $product->type = $request->input('type');
        $product->quantity = $request->input('quantity');
        $product->unit = $request->input('unit');
        $product->image_url = $request->input('image');
        $product->user_lastEdited = auth()->user()->id;
        $product->save();

        return redirect('/dashboard')->with('success', 'Inventory Created');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $product = Product::find($id);
        return view('pages.show')->with('product', $product);
        
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    }
    public function update(Request $request, $id)
    {
        //
        $product = Product::find($id);
        $product->quantity = $request->input('quantity');
        $product->save();
 
        return redirect('/dashboard')->with('success', 'Inventory Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect('/dashboard')->with('success', 'Inventory Deleted');
    }
}
