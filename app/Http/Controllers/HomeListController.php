<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;


class HomeListController extends Controller
{
    public function index(Request $request)
    {
        $data= $request->input("data");
        $json_data=json_decode($data);
        $method='AES-128-CBC';
        $key = '123456';
        $iv = '123456789asdfghj';
        $cc= openssl_decrypt($json_data,$method,$key,$options=0,$iv);

    }
}
