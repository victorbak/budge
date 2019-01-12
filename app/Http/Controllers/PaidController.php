<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PaidController extends Controller
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
        return view('paid.paid');
    }

    public function update(Request $request)
    {
        $value = $request->post('paid');
        $id = Auth::id();

        DB::table('users')
            ->where('id', $id)
            ->update(['budget' => Auth::user()->budget + $value]);

        return redirect()->to('/home');
    }
}
