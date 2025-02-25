<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $tagsIds = $data['tags'];
        $colorsIds = $data['colors'];

        unset($data['tags'], $data['colors']);

        $product->tags()->sync($tagsIds);
        $product->colors()->sync($colorsIds);

        $product->update($data);

        return view('admin.product.show', compact('product'));
    }
}
