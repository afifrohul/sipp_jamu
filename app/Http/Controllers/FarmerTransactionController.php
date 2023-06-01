<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FarmerTransaction;
use App\Models\Material;
class FarmerTransactionController extends Controller
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
            $this->param['getAllTransaction'] = FarmerTransaction::where('status_accept', 'accept')->orWhere('status_accept', 'pending')->get();
            return view('farmer.pages.transaction.page-list-transaction', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function history()
    {
        try {
            $this->param['getAllTransaction'] = FarmerTransaction::where('status_accept', 'paid')->orWhere('status_accept', 'decline')->get();
            return view('farmer.pages.transaction.page-list-history-transaction', $this->param);
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
            
            $materialPrice = Material::find($request->material_id)->price;

            $transaction = new FarmerTransaction();
            $transaction->user_id = auth()->user()->id;
            $transaction->material_id = $request->material_id;
            $transaction->qty = $request->qty;
            $transaction->total_price = $request->qty/1000 * $materialPrice;
            $transaction->status_accept = 'pending';
            $transaction->date = now();
            $transaction->save();

            return redirect('/back-seller/material')->withStatus('Berhasil menambah pesanan bahan baku.');

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

    public function edit(FarmerTransaction $transaction)
    {
        try {
            $this->param['getDetailTransaction'] = FarmerTransaction::find($transaction->id);
            return view('farmer.pages.transaction.page-confirm-transaction', $this->param);
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function update(Request $request, FarmerTransaction $transaction)
    {
        try {
            $transaction = FarmerTransaction::find($transaction->id);
            $transaction->status_accept = $request->status_accept;
            $transaction->save();
            return redirect('/back-farmer/transaction')->withStatus('Berhasil memperbarui data.');
        } catch(\Throwable $e){
            return redirect('/back-farmer/transaction')->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect('/back-farmer/transaction')->withError($e->getMessage());
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
