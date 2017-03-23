<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function show($id)
    {
        // 查找用户
        $user = User::findOrFail($id);
        // 渲染视图
        return view('user.show', compact('user'));
    }
}
