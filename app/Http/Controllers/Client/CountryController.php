<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function china(){
        return view("client.country.china");
    }
    public function india(){
        return view("client.country.india");
    }
    public function japan(){
        return view("client.country.japan");
    }

    public function pakistan(){
        return view("client.country.pakistan");
    }

    public function vietnam(){
        return view("client.country.vietnam");
    }
}
