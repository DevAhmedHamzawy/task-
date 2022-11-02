<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index($sort, $search)
    {
        if($sort == 'restaurant')
        {
            return response()->json(
                ['message'=>'successful', 'data' => Restaurant::where('name', 'like', '%'.$search.'%')->get()],
                200);
        }

        else {

            return response()->json(
                ['message'=>'successful', 'data' => Item::where('name', 'like', '%'.$search.'%')->get()],
                200);

        }
    }
}
