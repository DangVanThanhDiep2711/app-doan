<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Mountain;

class CountryController extends Controller
{
    public function china(){
        return view("client.country.china");
    }
    public function india(){
        return view("client.country.india");
    }
    public function japan(){
        $mountain = Mountain::get();
        return view("client.country.japan"
        ,[
            'mountains' =>$mountain
        ]);
    }

    public function pakistan(){
        return view("client.country.pakistan");
    }

    public function vietnam(){
        $mountain = Mountain::get();
       
        return view("client.country.vietnam"
        ,[
            'mountains' =>$mountain
        ]);
    }
}
