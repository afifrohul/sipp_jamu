<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $param;
    public function index()
    {
        try {
            $this->param['getAllProduct'] = Product::all();
            return view('seller.pages.product.page-list-product', $this->param);
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
        $this->validate($request,
        [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ],
        [
            'required' => 'Tolong isi kolom ini. Data harus diisi lengkap!',
        ],
        [
            'name' => 'Nama',
            'description' => 'Deskripsi'
        ]);

        try {
            $date = date('H-i-s');
            $random = \Str::random(5);

            $product = new Product();
            $product->name = $request->name;
            $product->description = $request->description;
            $product->seller_id = 3;
            $product->price = $request->price;
            $product->stock = $request->stock;
            if ($request->file('image')) {
                $request->file('image')->move('assets/upload/product', $date.$random.$request->file('image')->getClientOriginalName());
                $product->image = $date.$random.$request->file('image')->getClientOriginalName();
            } else {
                $product->image = "default.png";
            }
            $product->save();

            return redirect('/back-seller/product')->withStatus('Berhasil menambah data.');

        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        try {
            $this->param['getDetailProduct'] = Product::find($product->id);
            return view('seller.pages.product.page-edit-product', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request,
        [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ],
        [
            'required' => 'Tolong isi kolom ini. Data harus diisi lengkap!',
        ],
        [
            'name' => 'Nama',
            'description' => 'Deskripsi',
            'price' => 'Harga',
            'stock' => 'Stok'
        ]);

        try {
            $date = date('H-i-s');
            $random = \Str::random(5);

            $product = Product::find($product->id);
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->stock = $request->stock;
            if ($request->file('image')) {
                $request->file('image')->move('assets/upload/product', $date.$random.$request->file('image')->getClientOriginalName());
                $product->image = $date.$random.$request->file('image')->getClientOriginalName();
            } 
            $product->save();

            return redirect('/back-seller/product')->withStatus('Berhasil mengubah data.');

        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            Product::find($product->id)->delete();
            return redirect('/back-seller/product')->withStatus('Berhasil menghapus data.');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
