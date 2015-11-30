<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
//Best buy api key -> sds252jk62quyu9s3suwvnpr
class MainController extends Controller
{
    public $best_buy_key="";
    public function index(Request $request)
    {
        return view('main.index');
    }
    public function search_result()
    {
        $best_buy_key=  \App\AppConfig::where('key','best_buy_api_key')->first();   
        $text= Input::get('search-keyword');
        $bClient = new \GuzzleHttp\Client();
        $response=$bClient->request('GET','http://api.bestbuy.com/v1/products((name='.$text.'*)&new=true&active=true)?format=json&apiKey='.$best_buy_key->value)->getBody();
        //return json_decode($response,true)['products'];
        return view('main.search-result')->with('bestbuy',json_decode($response,true)['products']);
        //http://api.bestbuy.com/v1/products((search='.$text.')&salePrice<500&categoryPath.id=pcmcat209000050006)?show=name,sku,salePrice&format=json&apiKey='.$best_buy_key->value
        
        
    }
    public function login()
    {
       return view('main.login');
    }
    public function product_details()
    {
       return view('main.product-detail');
    }
    
    public function signup()
    {
       return view('main.signup');
    }

}
