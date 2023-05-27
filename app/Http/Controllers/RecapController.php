<?php

namespace App\Http\Controllers;
use App\Models\SellerTransaction;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class RecapController extends Controller
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
            $this->param['getAllTransaction'] = SellerTransaction::where('status_accept', 'accept')->orWhere('status_accept', 'pending')->get();

            $this->param['getProductName'] = Product::pluck('name');
            $this->param['getProductStock'] = Product::pluck('stock');

            $this->param['getTransactionJan'] = SellerTransaction::where('status_accept', 'paid')->whereMonth('date', '01')->sum('total_price');
            $this->param['getTransactionFeb'] = SellerTransaction::where('status_accept', 'paid')->whereMonth('date', '02')->sum('total_price');
            $this->param['getTransactionMar'] = SellerTransaction::where('status_accept', 'paid')->whereMonth('date', '03')->sum('total_price');
            $this->param['getTransactionApr'] = SellerTransaction::where('status_accept', 'paid')->whereMonth('date', '04')->sum('total_price');
            $this->param['getTransactionMei'] = SellerTransaction::where('status_accept', 'paid')->whereMonth('date', '05')->sum('total_price');
            $this->param['getTransactionJun'] = SellerTransaction::where('status_accept', 'paid')->whereMonth('date', '06')->sum('total_price');
            $this->param['getTransactionJul'] = SellerTransaction::where('status_accept', 'paid')->whereMonth('date', '07')->sum('total_price');
            $this->param['getTransactionAug'] = SellerTransaction::where('status_accept', 'paid')->whereMonth('date', '08')->sum('total_price');
            $this->param['getTransactionSep'] = SellerTransaction::where('status_accept', 'paid')->whereMonth('date', '09')->sum('total_price');
            $this->param['getTransactionOkt'] = SellerTransaction::where('status_accept', 'paid')->whereMonth('date', '10')->sum('total_price');
            $this->param['getTransactionNov'] = SellerTransaction::where('status_accept', 'paid')->whereMonth('date', '11')->sum('total_price');
            $this->param['getTransactionDes'] = SellerTransaction::where('status_accept', 'paid')->whereMonth('date', '12')->sum('total_price');

            $this->param['totalQtyByProduct'] = DB::table('seller_transactions')
                ->select(DB::raw('SUM(qty) as total_qty'))
                ->groupBy('product_id')
                ->pluck('total_qty')
                ->map(function ($value) {
                    return (int) $value;
                });

            $currentMonth = Carbon::now()->month;
            $currentMonthFormatted = Carbon::now()->format('m');

            $this->param['totalQtyByProductThisMonth'] = DB::table('seller_transactions')
                ->select(DB::raw('SUM(qty) as total_qty'))->whereMonth('date', $currentMonthFormatted)
                ->groupBy('product_id')
                ->pluck('total_qty')
                ->map(function ($value) {
                    return (int) $value;
                });

            return view('farmer.pages.recap.page-list-recap', $this->param);
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
