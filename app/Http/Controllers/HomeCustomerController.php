<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Material;
use App\Models\Review;
use App\Models\FarmerTransaction;
use App\Models\SellerTransaction;
use Illuminate\Http\Request;

class HomeCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $param;
    public function indexHome()
    {
        try {
            $this->param['getAllProduct'] = Product::where('stock', '>', '0')->take(3)->get();
            $this->param['getNewTransactionFarmer'] = FarmerTransaction::where('status_accept', 'pending')->count();
            $this->param['getNewTransactionSeller'] = SellerTransaction::where('status_accept', 'pending')->count();
            $this->param['getTransactionAccept'] = SellerTransaction::where('status_accept', 'accept')->where('prove_payment', null)->count();
            $this->param['getAllReview'] = Review::where('rating','>', '3')->take(3)->get();
            return view('home', $this->param);
            // return view('basic-trigger', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
    
    public function indexProduct()
    {
        try {
            $this->param['getAllProduct'] = Product::where('stock', '>', '0')->get();
            return view('product', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
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
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        try {
            $this->param['getDetailProduct'] = Product::find($product->id);
            $this->param['getDetailProductPrice'] = Product::find($product->id)->price;
            $this->param['getDetailReview'] = Review::where('product_id', $product->id)->get()->reverse();
            return view('product-detail', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }  
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
}
