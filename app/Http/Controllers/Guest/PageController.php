<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Singer;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $singers = (Singer::all());
        return view('home', compact('singers'));
    }
}
