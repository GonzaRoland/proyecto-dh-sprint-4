<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = [];
        $session_products = session('cart.products', $products);
        foreach ($session_products as $key => $value) {
            $product = Product::find($session_products[$key]['id']);
            $product->stock = $session_products[$key]['stock'];
            $products[] = $product; 
        }
        
        
        return view('cart')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }

    public function remove($id, Request $request)
    {   
        $products = collect($request->session()->get('cart.products'));
        $products->filter(function($value, $key) use ($id) {
            return $value['id'] == $id;
        })->keys()->each(function($item) use ($request) {
            $request->session()->forget("cart.products.$item");
        });
        
        return redirect()->back();
    }
    public function removeAll(Request $request){
        $request->session()->flush();
        return redirect()->back();
    }
}
