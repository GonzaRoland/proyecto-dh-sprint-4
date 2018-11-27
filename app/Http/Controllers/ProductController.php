<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('regprod');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'prod_name' => 'required|string|max:255',
            'price' => 'required|integer|max:10000',
            'prod_description' => 'nullable|string|max:400',
            'stock' => 'required|integer|max:500',
            'genre_id' => 'required|integer',
        ]);

        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        
        if ($request->hasFile('image')) {
            $file = $request->image->store('prod_fotos', 'public');
            $fileName = $request->image->hashName();
            $filePath = 'storage/prod_fotos/' . $fileName;
            } else {$filePath = null;}

        
        $product = new Product([
            'prod_name' => $request->input('prod_name'),
            'price' => $request->input('price'),
            'prod_description' => $request->input('prod_description'),
            'stock' => $request->input('stock'),
            'photopath' => $file,
            'genre_id' => $request->input('genre_id'),
        ]);

        

        $product->save();

        return view('dogo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('productdetail')->with('product', $product);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('editprod')->with('product', $product);
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
        $validator = Validator::make($request->all(), [
            'prod_name' => 'required|string|max:255',
            'price' => 'required|integer|max:10000',
            'prod_description' => 'nullable|string|max:400',
            'stock' => 'required|integer|max:500',
            'genre_id' => 'required|integer',
        ]);

        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        
        if ($request->hasFile('image')) {
            $file = $request->image->store('prod_fotos', 'public');
            $fileName = $request->image->hashName();
            $filePath = 'storage/app/public/prod_fotos/' . $fileName;
            } else {$filePath = Product::find($id)->photopath;}

        
        $product = Product::find($id)->update([
            'prod_name' => $request->input('prod_name'),
            'price' => $request->input('price'),
            'prod_description' => $request->input('prod_description'),
            'stock' => $request->input('stock'),
            'photopath' => $file,
            'genre_id' => $request->input('genre_id'),
        ]);

        

        
        return redirect('/');
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

    public function addToCart(Request $request)
    {    	    	
        //$request->session()->flush();
        //return redirect()->back();
        //dd("Resetié la sesión");
        //dd($products);
        //dd($request->session()->all());
        //dd($request->session()->has('cart.products'));
        if ($request->session()->has('cart.products') == false) {
            //dd('No está el carrito en la sesión en la sesión');
            //$request->session()->put('cart.products', []);
            //$request->session()->save();
            $request->session()->push('cart.products', [
                'id' => $request->product_id,
                'stock' => $request->stock,
            ]);
            $request->session()->save();
            return redirect()->back();

        }


        //$request->session()->push('cart.products', [
        //    'id' => $request->product_id,
        //    'stock' => $request->stock,
        //]);
        //$request->session()->save();



        $products = $request->session()->get('cart.products');
        //dd($products);
        //$request->session()->flush();
        //dd($request->session());

        //foreach ($products as $key => $value) {
        //    $ids[] = $products[$key]["id"];
        //}

        //if(in_array($request->product_id, $ids)) {
            //dd($products);
            $yaExiste = "Este producto ya esta";
            $esNuevo = "Este producto es nuevo";
            foreach ($products as $key => $value) {
                //$id = $products[$key]["id" ];
                //dd($request->product_id);
                if ($request->product_id == $products[$key]["id"]) {
                    //dd($yaExiste);
                    //dd($products);
                    //dd($key);
                  //$nuevoStock = $products[$key]["stock"] + $request->stock;
                  $sessionStockPath = 'cart.products.'.$key.'.stock';
                  $sessionStockValue = $request->session()->get($sessionStockPath);
                  $requestStockValue = $request->stock;
                  //dd($requestStockValue);
                  //dd($sessionStockValue);  
                  //dd($sessionStockRequest);
                  $nuevoStock = $sessionStockValue + $requestStockValue;
                  //dd($nuevoStock);  
                  $request->session()->put($sessionStockPath, $nuevoStock); 
                  //dd($products);
                  
                  $request->session()->save();
                  //dd($request->session()->all());
                  return redirect()->back();  
                } 
                
            }                
                            
                    //dd($request->stock);
                    $request->session()->push('cart.products', [
                    'id' => $request->product_id,
                    'stock' => $request->stock,
                    
                ]);
                
                $request->session()->save();
                
                //dd($products);
                return redirect()->back();
            }



            }
            //dd($products);
            //$request->session()->flush();
            //$request->session()->save();
            //dd($products);
            //return redirect()->back();

        //}

    	//$request->session()->push('cart.products', [
    	//	'id' => $request->product_id,
    	//	'stock' => $request->stock,
        //]);
        //$request->session()->save();
        //return redirect()->back(//);
    

