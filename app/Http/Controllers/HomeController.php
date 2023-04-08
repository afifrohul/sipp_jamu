<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $roleUser = \Auth::user()->roles->pluck('name')[0];
        if ($roleUser == 'admin') {
            return redirect('/back-admin/dashboard');
        } elseif ($roleUser == 'farmer') {
            return redirect('/back-farmer/dashboard');
        } elseif ($roleUser == 'seller') {
            return redirect('/back-seller/dashboard');
        } elseif ($roleUser == 'customer') {
            return redirect('/');
        } else {
            return redirect('/logout');
        }
    }
}
