<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show(Item $item)
    {
        return response()->json(['message' => 'successful', 'data' => $item], 200);
    }
}
