<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
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
            $this->param['getDetailUser'] = User::where('id', \Auth::user()->id)->get();
            return view('customer.pages.profile.page-profile', $this->param);
            // return view('seller.pages.user.page-list-user', $this->param);
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
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        try {
            $this->param['getDetailUser'] = User::find($user->id);
            return view('customer.pages.profile.page-edit-profile', $this->param);
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request,
        [
            'name' => 'required',
            'full_name' => 'required',
            'no_hp' => 'required',
            'address' => 'required',
        ],
        [
            'required' => 'Tolong isi kolom ini. Data harus diisi lengkap!',
        ],
        [
            'name' => 'Nama',
            'full_name' => 'Nama Lengkap',
            'no_hp' => 'No Hp',
            'address' => 'Alamat',
        ]);

        try {
            $date = date('H-i-s');
            $random = \Str::random(5);

            $user = User::find($user->id);
            $user->name = $request->name;
            $user->full_name = $request->full_name;
            $user->no_hp = $request->no_hp;
            $user->address = $request->address;
            if ($request->file('image')) {
                $request->file('image')->move('assets/upload/user', $date.$random.$request->file('image')->getClientOriginalName());
                $user->image = $date.$random.$request->file('image')->getClientOriginalName();
            } 
            $user->save();

            return redirect('/back-customer/profile')->withStatus('Berhasil mengubah data.');

        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
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
