<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GuzzleHttp\Client;
//use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redis;


class HomeListController extends Controller
{
    //服务端
    public function index(Request $request)
    {
        $data= $request->input("data");
        $method='AES-128-CBC';
        $key = '123456';
        $iv = '123456789asdfghj';

        $cc= openssl_decrypt($data,$method,$key,$options=0,$iv);
        $json_data=json_decode($data);
        $key = 'token:'.$data['user_name'];
        $redis_data=Redis::get($key);
        if($redis_data){
            $cc = [
                'error'=>0,
                'token'=>$redis_data
            ];
            return json_encode($cc);


        }else{
            $cs = mt_rand(1,9999).time().'1234';
            Redis::set($key,$cs);
            $cc = [
                'error'=>0,
                'token'=>$cs
            ];
            return json_encode($cc);
        }
    }

    //客户端
    public function client(Request $request)
    {

        $name=$request->input('name');
        $pwd=$request->input('pwd');
        $data = [
            'user_name'=>$name,
            'pwd'=>$pwd
        ];
        $json_data=json_encode($data);
        $method='AES-128-CBC';
        $key = '123456';
        $iv = '123456789asdfghj';
        $cc= openssl_encrypt($json_data,$method,$key,$options=0,$iv);
     
        $client = new GuzzleHttp\Client();
        $res = $client->request('POST', 'http://12shop.com/client?name=111&pwd=11', $data);
//        echo $res->getStatusCod;
         dd($res);
    }

}
