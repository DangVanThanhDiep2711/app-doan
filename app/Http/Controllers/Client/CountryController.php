<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Mountain;

class CountryController extends Controller
{
    public function china(){
        $mountain = Mountain::get();
       
        return view("client.country.china"
        ,[
            'mountains' =>$mountain
        ]);
    }
    public function india(){
        $mountain = Mountain::get();
       
        return view("client.country.india"
        ,[
            'mountains' =>$mountain
        ]);
    }
    public function japan(){
        $mountain = Mountain::get();
<<<<<<< HEAD
=======
       
>>>>>>> 0d4b5581502ffee1b9527c0fa4e456f9dbfcb1fc
        return view("client.country.japan"
        ,[
            'mountains' =>$mountain
        ]);
    }

    public function pakistan(){
        $mountain = Mountain::get();
       
        return view("client.country.pakistan"
        ,[
            'mountains' =>$mountain
        ]);
    }

    public function vietnam(){
        $mountain = Mountain::get();
       
        return view("client.country.vietnam"
        ,[
            'mountains' =>$mountain
        ]);
    }
}
