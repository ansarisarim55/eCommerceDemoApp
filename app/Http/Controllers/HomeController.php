<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\User;
use App\CartItem;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
