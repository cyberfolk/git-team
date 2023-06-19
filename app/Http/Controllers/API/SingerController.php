<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Singer;

class SingerController extends Controller
{
    public function index()
    {

        $singers = Singer::all();

        return response()->json([
            'success' => true,
            'singers' => $singers,
        ]);
    }
}
