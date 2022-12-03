<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use Illuminate\Support\Facades\DB;

class TopProductController extends Controller
{
    public function __invoke()
    {
        DB::table('products')->orderBy('id')->chunk(2, function ($top_products) {
            return $top_products;
        });
    }
}
