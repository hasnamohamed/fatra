<?php

namespace App\Http\Controllers\Backend;

class Home extends BackEndController
{
     public function index()
    {
        return view('back-end.home');
    }
}
