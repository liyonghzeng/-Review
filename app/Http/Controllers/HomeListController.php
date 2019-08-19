<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;


class HomeListController extends Controller
{
    public function index(Request $request)
    {
        $user_name=$request->input('user_name');
        $user_pwd=$request->input('pwd');

    }
}
