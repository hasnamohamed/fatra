<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
}
