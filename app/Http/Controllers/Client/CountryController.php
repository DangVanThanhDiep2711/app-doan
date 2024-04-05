<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Mountain;

class CountryController extends Controller
{
    public function country($id){
        $mountain = Mountain::with('country')->where('country_id', $id)->get();
       
       dd($mountain);
        return view("client.country.country"
        ,[
            
            'mountains' =>$mountain
        ]);
    }

}
