<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        Product::firstOrCreate([
            'title' => $data['title'],
            'description' => $data['description'],
            'price' => $data['price'],
            'amount' => $data['amount'],
            'category_id' => $data['category_id']
            ] ,$data);

        return redirect()->route('product.index');
    }
}
