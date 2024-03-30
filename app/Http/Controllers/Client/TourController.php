<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Join;
use App\Models\User;
use App\Models\MemberJoin;
use App\Models\Mountain;
use DB;
class TourController extends Controller
{
    public function show()
    {
        $join = Join::get();
        $memberjoin = MemberJoin::get();
        return view("client.home.tour",[
            'joins' =>$join,
            'memberjoins'=>$memberjoin
        ]);
    }
    public function showvalidate()
    {
        
        $memberjoin = MemberJoin::get();
        return view("client.home.validated",[
            
            'memberjoins'=>$memberjoin
        ]);
    }
    public function showrejected()
    {   $memberjoin = MemberJoin::get();
        return view("client.home.rejected",[
            'memberjoins' =>$memberjoin,
        ]);
    }
    public function waiting()
    {
        $join = Join::get();
        $memberjoin = MemberJoin::get();
        return view("client.home.waiting",[
            'joins' =>$join,
            'memberjoins'=>$memberjoin
        ]);
    }
}
