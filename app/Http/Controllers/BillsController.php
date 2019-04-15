<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Bill;


class BillsController extends Controller
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
        return view('bills.bills');
    }

    //Add bills to list

    public function insert(Request $request)
    {
        $name = $request->post('name');
        $price = $request->post('price');
        $id = Auth::id();

        DB::table('bills')->insert([
            ['name' => $name, 'price' => $price, 'userId' => $id]
        ]);

        return view('bills.bills');
    }
}
