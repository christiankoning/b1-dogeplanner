<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Carbon\Carbon;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin/products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin/products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreProductRequest $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:64',
            'price' => 'required|numeric|min:1',
            'description',
            'discount' => 'required|numeric|min:0',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('Gefeliciteerd!','Wandeling aangemaakt!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return Response
     */
        public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return Response
     */
    public function edit(Product $product)
    {
        return view('admin/products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $request->validate([
            'name' => 'required|min:4|max:64',
            'description' => '',
            'price' => 'required|numeric|min:1',
            'discount' => 'required|numeric|min:0',
        ]);

        $request['updated_at'] = Carbon ::now()->toDateTimeString();
        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('Gefeliciteerd!','Product aangepast!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('Gefeliciteerd!','Product verwijderd!');
    }
}
