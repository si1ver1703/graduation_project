<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;

class EditController extends Controller
{
    public function __invoke(Order $order)
    {
        return view('order.edit', compact('order'));
    }
}
