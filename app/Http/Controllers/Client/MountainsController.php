<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Join;
use App\Models\Mountain;
class MountainsController extends Controller
{
        
    public function baden(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.baden",[
            'mountains' => $mountain,
        ]);
    }
    public function chua(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.chua",[
            'mountains' => $mountain,
        ]);
    }
    public function langbiang(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.langbiang",[
            'mountains' => $mountain,
        ]);
    }
    public function chuachan(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.chuachan",[
            'mountains' => $mountain,
        ]);
    }
    public function taishan(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.taishan",[
            'mountains' => $mountain,
        ]);
    }
    public function huashan(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.huashan",[
            'mountains' => $mountain,
        ]);
    }
    public function hanshan(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.hanshan",[
            'mountains' => $mountain,
        ]);
    }
    public function hangshan(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.hangshan",[
            'mountains' => $mountain,
        ]);
    }
    public function dongshan(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.dongshan",[
            'mountains' => $mountain,
        ]);
    }
    public function asahi(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.asahi",[
            'mountains' => $mountain,
        ]);
    }
    public function fujisan(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.fujisan",[
            'mountains' => $mountain,
        ]);
    }
    public function kitadake(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.kitadake",[
            'mountains' => $mountain,
        ]);
    }
    public function zao(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.zao",[
            'mountains' => $mountain,
        ]);
    }
    public function asama(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.asama",[
            'mountains' => $mountain,
        ]);
    }
    public function hotakadake (Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.hotakadake",[
            'mountains' => $mountain,
        ]);
    }
    public function norikura(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.norikura",[
            'mountains' => $mountain,
        ]);
    }
    public function yari(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.yari",[
            'mountains' => $mountain,
        ]);
    }
    public function nangaparbat(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.nangaparbat",[
            'mountains' => $mountain,
        ]);
    }
    public function k2(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.k2",[
            'mountains' => $mountain,
        ]);
    }
    public function Kangchenjunga(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.kangchenjunga",[
            'mountains' => $mountain,
        ]);
    }
    public function doddabetta(Request $request){
        $mountain = Mountain::get();
        $mountain->id=$request->id;
        session(["mountain_id"=> $mountain->id]);
        return view("client.mountain.doddabetta",[
            'mountains' => $mountain,
        ]);
    }
    
}
