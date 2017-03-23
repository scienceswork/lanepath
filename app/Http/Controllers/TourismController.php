<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourismController extends Controller
{
    /**
     * 旅游首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('tourism.index');
    }
}
