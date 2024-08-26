<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class VueController extends Controller
{
    public function index()
    {
        return view('admin.vue.index');
    }
}
