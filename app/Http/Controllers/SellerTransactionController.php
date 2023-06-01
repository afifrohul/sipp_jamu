<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SellerTransaction;
use App\Models\Product;
class SellerTransactionController extends Controller
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
            $this->param['getAllTransaction'] = SellerTransaction::where('status_accept', 'accept')->orWhere('status_accept', 'pending')->get()->reverse();
            return view('seller.pages.transaction.page-list-transaction', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function history()
    {
        try {
            $this->param['getAllTransaction'] = SellerTransaction::where('status_accept', 'paid')->orWhere('status_accept', 'decline')->get()->reverse();
            return view('seller.pages.transaction.page-list-history-transaction', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
    
    public function indexCustomer()
    {
        try {
            $this->param['getAllTransaction'] = SellerTransaction::where('user_id', \Auth::user()->id)->where('status_accept', 'accept')->orWhere('status_accept', 'pending')->get()->reverse();
            return view('customer.pages.transaction.page-list-transaction', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function historyCustomer()
    {
        try {
            $this->param['getAllTransaction'] = SellerTransaction::where('user_id', \Auth::user()->id)->where('status_accept', 'paid')->orWhere('status_accept', 'decline')->orWhere('status_accept', 'cancel')->get()->reverse();
            return view('customer.pages.transaction.page-list-history-transaction', $this->param);
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
     * @param  App\Models\Product $product
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        $this->validate($request,
        [
            'qty' => 'required|integer|min:1',
        ],
        [
            'required' => 'Tolong isi kolom ini. Data harus diisi',
            'min' => 'Kuantitas harus lebih besar dari 0'
        ],
        [
            'qty' => 'Kuantitas'
        ]);

        
        try {
            $product = \Request::segment(4);
            
            $transaction = new SellerTransaction();
            $transaction->user_id = auth()->user()->id;
            $transaction->product_id = $product;
            $transaction->qty = $request->qty;
            $transaction->total_price = $request->total_price;
            $transaction->status_accept = 'pending';
            $transaction->date = now();
            $transaction->save();

            return redirect('/product-detail/'.\Request::segment(4))->withStatus('Berhasil menambah pesanan produk. <a class="font-bold" href="/back-customer/transaction">Klik disini untuk melihat detail</a>');

        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
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

    public function confirm(SellerTransaction $transaction)
    {
        try {
            $this->param['getDetailTransaction'] = SellerTransaction::find($transaction->id);
            return view('seller.pages.transaction.page-confirm-transaction', $this->param);
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
    
    
    public function update(Request $request, SellerTransaction $transaction)
    {
        try {
            $date = date('H-i-s');
            $random = \Str::random(5);
            $transaction = SellerTransaction::find($transaction->id);
            $transaction->status_accept = $request->status_accept;
            if ($request->file('image')) {
                $request->file('image')->move('assets/upload/payment', $date.$random.$request->file('image')->getClientOriginalName());
                $transaction->prove_payment = $date.$random.$request->file('image')->getClientOriginalName();
            } 
            $transaction->save();
            return redirect('/back-customer/transaction')->withStatus('Berhasil memperbarui data.');
        } catch(\Throwable $e){
            return redirect('/back-customer/transaction')->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect('/back-customer/transaction')->withError($e->getMessage());
        }
        
    }
    
    public function edit(SellerTransaction $transaction)
    {
        try {
            $this->param['getDetailTransaction'] = SellerTransaction::find($transaction->id);
            return view('customer.pages.transaction.page-edit-transaction', $this->param);
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
    
    public function updateSeller(Request $request, SellerTransaction $transaction)
    {
        try {
            $transaction = SellerTransaction::find($transaction->id);
            $transaction->status_accept = $request->status_accept;
            $transaction->save();
            return redirect('/back-seller/transaction')->withStatus('Berhasil memperbarui data.');
        } catch(\Throwable $e){
            return redirect('/back-seller/transaction')->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect('/back-seller/transaction')->withError($e->getMessage());
        }

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
