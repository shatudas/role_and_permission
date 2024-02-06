<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    function __construct()
    {

    $this->middleware('permission:product-list|product-create|product-edit|product-delete',['only' => ['index','show']]);
    $this->middleware('permission:product-create', ['only' => ['create','store']]);
    $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
    $this->middleware('permission:product-delete', ['only' => ['destroy']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::latest()->paginate(5);
        return view('backend.products.index',compact('products'))->with('i', (request()->input('page', 1) - 1) *5 );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request()->validate([
            'name'   =>'required',
            'detail' =>'required'
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success','Product Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $products)
    {

        return view('backend.products.show',compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        return view('backend.products.edit',compact('product'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Product $product)
    {

        $request()->validate([
            'name'   =>'required',
            'detail' =>'required'
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success','Product Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        $product->delete();

        return view('products.index')->with('success', 'Product Deleted Successfully');

    }


}
