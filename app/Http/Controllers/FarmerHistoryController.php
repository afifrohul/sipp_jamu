<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class FarmerHistoryController extends Controller
{
    private $param;
    public function index()
    {
        try {
            $this->param['getAllTransaction'] = Transaction::where('status_accept', 'paid')->orWhere('status_accept', 'decline')->get();
            return view('farmer.pages.transaction.page-list-history-transaction', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
