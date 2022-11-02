<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function show()
    {
        return response()->json(['message' => 'successful', 'data' => Setting::whereId(1)->get()], 200);
    }
}
