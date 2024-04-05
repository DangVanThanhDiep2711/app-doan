<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class BlogController extends Controller
{
    public function blog(){
        
        $country= Country::get();
        return view('client.home.homepage',[
            'countries' =>$country
        ]);
    }
}
