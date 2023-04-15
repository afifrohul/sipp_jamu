<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
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
            $this->param['getAllMaterial'] = Material::all();
            return view('farmer.pages.material.page-list-material', $this->param);
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

            $material = new Material();
            $material->name = $request->name;
            $material->description = $request->description;
            $material->farmer_id = 2;
            $material->price = $request->price;
            $material->stock = $request->stock;
            if ($request->file('image')) {
                $request->file('image')->move('assets/upload/material', $date.$random.$request->file('image')->getClientOriginalName());
                $material->image = $date.$random.$request->file('image')->getClientOriginalName();
            } else {
                $material->image = "default.png";
            }
            $material->save();

            return redirect('/back-farmer/material')->withStatus('Berhasil menambah data.');

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        try {
            $this->param['getDetailMaterial'] = Material::find($material->id);
            return view('farmer.pages.material.page-edit-material', $this->param);
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
     * @param  \App\Models\Material $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
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

            $material = Material::find($material->id);
            $material->name = $request->name;
            $material->description = $request->description;
            $material->price = $request->price;
            $material->stock = $request->stock;
            if ($request->file('image')) {
                $request->file('image')->move('assets/upload/material', $date.$random.$request->file('image')->getClientOriginalName());
                $material->image = $date.$random.$request->file('image')->getClientOriginalName();
            } 
            $material->save();

            return redirect('/back-farmer/material')->withStatus('Berhasil mengubah data.');

        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        try {
            Material::find($material->id)->delete();
            return redirect('/back-farmer/material')->withStatus('Berhasil menghapus data.');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
