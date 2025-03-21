<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function add() {
        return view('addOrder');
    }

    function add1(Request $request) {
        $request->validate([
            'FullName' => ['required'],
            'NoTelp' => ['required'],
            'Address' => ['required'],
            'Email' => ['required', 'email'],
            'StartRental' => ['required', 'date'],
            'EndRental' => ['required', 'date'],
            'KTP' => ['required', 'image'],
            'SIM' => ['required', 'image']
        ]);

        $ktpfilename = $request->file('KTP')->getClientOriginalName();
        $request->file('KTP')->storeAs('/public'.'/'.$ktpfilename);

        $simfilename = $request->file('SIM')->getClientOriginalName();
        $request->file('SIM')->storeAs('/public'.'/'.$simfilename);

        Order::create([
            'FullName' => $request->FullName,
            'NoTelp' => $request->NoTelp,
            'Address' => $request->Address,
            'Email' => $request->Email,
            'StartRental' => $request->StartRental,
            'EndRental' => $request->EndRental,
            'KTP' => $ktpfilename,
            'SIM' => $simfilename
        ]);

        return redirect('/display');
    }
}
