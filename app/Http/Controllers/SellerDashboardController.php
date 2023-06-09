<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Material;
use App\Models\SellerTransaction;
use Illuminate\Http\Request;

class SellerDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware(['role:penjual']);
    // }

    private $param;
    public function index()
    {
                
        try {
            $this->param['getCountProduct'] = Product::where('seller_id', auth()->user()->id)->count();
            $this->param['getCountMaterial'] = Material::where('user_id', auth()->user()->id)->count();
            $this->param['getCountMaterialStock'] = Material::where('user_id', auth()->user()->id)->pluck('stock');
            $this->param['getCountTransaction'] = SellerTransaction::all()->count();
            $this->param['getCountTransactionPending'] = SellerTransaction::where('status_accept', 'pending')->count();
            
            return view('seller.pages.dashboard.dashboard', $this->param);
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
