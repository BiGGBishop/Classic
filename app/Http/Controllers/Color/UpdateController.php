<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\UpdateRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Color $color)
    {
        $data = $request->validated();
        $color->update($data);

        return view('admin.color.show', compact('color'));
    }
}
