<?php

namespace App\Http\Controllers;

use App\Models\MerchantProduct;
use App\Models\Product;
use App\Models\Merchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MerchantProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merchant_product = DB::table('merchant_product')
                                        ->join('merchant', 'merchant_product.merchant_id', '=' ,'merchant.id')
                                        ->join('product', 'merchant_product.product_id', '=' ,'product.id')
                                        ->join('category', 'product.category_id', '=' ,'category.id')
                                        ->select('merchant_product.*', 'product.name AS product_name', 'merchant.name AS merchant_name'
                                        , 'merchant_product.price', 'category.id AS category_id', 'category.name AS category_name')
                                        ->orderBy('category_name', 'ASC')
                                        //->where('merchant_product.deleted_at', '=NULL')
                                        ->get();

        return view('merchant_product.index', compact('merchant_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        $merchant = Merchant::all();
        return view('merchant_product.create', compact('product','merchant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'merchant_id' => 'required'
        ]);

        MerchantProduct::create($request->all());

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MerchantProduct  $merchantProduct
     * @return \Illuminate\Http\Response
     */
    public function show(MerchantProduct $merchantProduct)
    {
        $merchantProduct = DB::table('merchant_product')
                                        ->join('merchant', 'merchant_product.merchant_id', '=' ,'merchant.id')
                                        ->join('product', 'merchant_product.product_id', '=' ,'product.id')
                                        ->join('category', 'product.category_id', '=' ,'category.id')
                                        ->select('merchant_product.*', 'product.name AS product_name', 'merchant.name AS merchant_name'
                                        , 'merchant_product.price', 'category.id AS category_id', 'category.name AS category_name')
                                        //->orderBy('category_name', 'ASC')
                                        ->where('category_id', 2)
                                        ->get();
        return view('merchant_product.showbyid', compact('merchantProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MerchantProduct  $merchantProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(MerchantProduct $merchantProduct)
    {
        $product = Product::all();
        $merchant = Merchant::all();
        return view('merchant_product.edit', compact('merchantProduct','product','merchant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MerchantProduct  $merchantProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MerchantProduct $merchantProduct)
    {
        $merchantProduct->update([
            'price' => $request->input('price'),
            'merchant_id' => $request->input('merchant_id'),
            'product_id' => $request->input('product_id')
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MerchantProduct  $merchantProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(MerchantProduct $merchantProduct)
    {
        $merchantProduct->delete();

        return redirect('/merchant_product');
    }
}
