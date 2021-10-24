<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class BackEndController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

}
