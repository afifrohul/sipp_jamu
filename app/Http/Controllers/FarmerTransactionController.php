<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
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
            $this->param['getAllTransaction'] = Transaction::where('status_accept', 'accept')->orWhere('status_accept', 'pending')->get();
            return view('farmer.pages.transaction.page-list-transaction', $this->param);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit(Transaction $transaction)
    {
        try {
            $this->param['getDetailTransaction'] = Transaction::find($transaction->id);
            return view('farmer.pages.transaction.page-confirm-transaction', $this->param);
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function update(Request $request, Transaction $transaction)
    {
        try {
            $transaction = Transaction::find($transaction->id);
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
