<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MountainsController extends Controller
{   //VietNam
    public function baden(){
        return view("client.mountain.Ba-Den");
    }
    public function chua(){
        return view("client.mountain.Chua");
    }
    public function langbiang(){
        return view("client.mountain.Langbiang");
    }
    public function chuachan(){
        return view("client.mountain.Chua-Chan");
    }
    public function fansipan(){
        return view("client.mountain.Fansipan");
    }
    public function pusilung(){
        return view("client.mountain.Pu-Si-Lung");  
    }
    public function phuluong(){
        return view("client.mountain.Phu-Luong");
    }
    public function raoco(){
        return view("client.mountain.Rao-Co");
    }

    //China
    public function taishan(){
        return view("client.mountain.Taishan");
    }
    public function huashan(){
        return view("client.mountain.Huashan");
    }
    public function hanshan(){
        return view("client.mountain.Hanshan");
    }
    public function hengshan(){
        return view("client.mountain.Hengshan");
    }
    public function songshan(){
        return view("client.mountain.Songshan");
    }
    public function wudang(){
        return view("client.mountain.Wudang");
    }
    public function qingcheng(){
        return view("client.mountain.Qingcheng");
    }
    public function laojun(){
        return view("client.mountain.laojun");
    }

    //india
    public function kanchenjunga(){
        return view("client.mountain.Kanchenjunga");
    }
    public function kabru(){
        return view("client.mountain.Kabru");
    }
    public function triund (){
        return view("client.mountain.Triund");
    }
    public function doddabetta(){
        return view("client.mountain.Doddabetta");
    }
    public function himalaya(){
        return view("client.mountain.Himalaya");
    }
    public function chembra (){
        return view("client.mountain.Chembra");
    }
    public function apharwat (){
        return view("client.mountain.Apharwat");
    }
    public function kodachadri (){
        return view("client.mountain.Kodachadri ");
    }

    //japan
    public function asahi(){
        return view("client.mountain.asahi");
    }
    public function fujisan(){
        return view("client.mountain.fujisan");
    }
    public function zao(){
        return view("client.mountain.zao");
    }
    public function asama(){
        return view("client.mountain.asama");
    }
    public function norikura(){
        return view("client.mountain.norikura");
    }

    //pakistan
    public function nangaparbat(){
        return view("client.mountain.nangaparbat");
    }
    public function k2(){
        return view("client.mountain.k2");
    }
    
}
