<?php

namespace App\Http\Controllers;

use App\Bill;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PayController extends Controller
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
        $bills = Bill::all();
        return view('list.list', compact('bills'));
    }

    public function bills($id)
    {
        $uId = Auth::id();

        $bill = Bill::find($id);

        DB::table('users')
            ->where('id', $uId)
            ->update(['budget' => Auth::user()->budget - $bill->price]);


        DB::table('bills')
            ->where('id', $id)
            ->delete();

        return view('home');
    }

}
