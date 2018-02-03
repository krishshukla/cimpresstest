<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class BlogController extends Controller
{
    public function index()
    {
		/* commented since not worked
		$client = new GuzzleHttp\Client();
		$res = $client->get('http://127.0.0.1:8000/api/articles/1', ['auth' =>  ['user', 'pass']]);
		echo $res->getStatusCode(); // 200
		echo $res->getBody();
        */
		
		$url = env('APP_URL')."/api/articles/1";
		$blogData = json_decode(file_get_contents($url), true);
		return view("blogmain", ["blogData"=>$blogData]);
	}
}
