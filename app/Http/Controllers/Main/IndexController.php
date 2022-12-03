<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke()
    {
        $product_cont = Product::all()->count();
        return view('main.index', compact('product_cont'));
    }
}
