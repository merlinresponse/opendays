<?php

namespace App\Http\Controllers;

use App\Shop;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        
        return view('shops.index', compact('shops'));
    }
    
    public function show($id)
    {
    
    $shop = Shop::find($id);
    return $card;
        
    }
    
    
}
