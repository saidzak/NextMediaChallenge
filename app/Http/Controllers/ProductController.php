<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('product',['categories'=>$categories,'products'=>$products,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('product',['categories'=>$categories,'products'=>$products,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category = $request->input('category');

        if ($request->hasFile('image')) {

            $request->file->store('product', 'public');

            $product = new Product([
                $product->image => $request->input('image')->hashName()
            ]);
        }
        $product->save();
        return redirect('/products');

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
        $products = Product::all();
        $categories = Category::all();
        return view('product',['categories'=>$categories,'products'=>$products,'product'=>$product,'layout'=>'show']);
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
        $products = Product::all();
        $categories = Category::all();
        return view('product',['categories'=>$categories,'products'=>$products,'product'=>$product,'layout'=>'edit']);

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
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->image = $request->input('image');
        $product->save();
        return redirect('/products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }

    public function sortbyname()
    {
        $products = Product::all();
        $categories = Category::all();
        $products = $products->sortBy(function($product){
            return strtolower ($product->name);
        });
        return view('product',['categories'=>$categories,'products'=>$products,'layout'=>'sortbyname']);
    }

    
    public function sortbyprice()
    {
        $products = Product::all();
        $categories = Category::all();
        $products = $products->sortBy(function($product){
            return ($product->price);
        });
        return view('product',['categories'=>$categories,'products'=>$products,'layout'=>'sortbyname']);
    }

    
    public function filterbycategory($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        // $products = Product::all()->where('category','=',$category->name)->get($this);
        $products = DB::table('Products')->where('category','=',$category->name)->get();

        
        return view('product',['categories'=>$categories,'products'=>$products,'layout'=>'sortbyname']);
    }
}
