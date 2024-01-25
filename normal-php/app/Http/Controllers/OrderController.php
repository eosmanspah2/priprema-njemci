<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function updateState(Request $request, $orderId, $newState)
    {
        $order = Order::findOrFail($orderId);
        $order->transitionTo($newState);

        return response()->json(['message' => 'State updated successfully', 'new_state' => $order->state]);
    }
}
