<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vcard;

class VcardController extends Controller
{
    public function home(Request $req){
        if($req->isMethod('post')){
            $data=$req->validate([
                'name'=>'required',
                'contact'=>'required'
            ]);
            Vcard::create($data);
        }
        $data["vcard"]=Vcard::all();
        return view("home",$data);
    }
}
