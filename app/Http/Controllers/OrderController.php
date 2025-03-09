<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Events\OrderPlaced;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create() {
        return view('create');
    }

    public function save(Request $request){
        $validatedData = $request->validate([
            'item' => 'required|string',
            'quantity' => 'required|integer'
        ]);

        $newOrder = Order::create($validatedData);

        event(new OrderPlaced($newOrder));

        return redirect(route('order.create'))->with('success', 'Order Successfully Created');
    }
}
