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
    public function dis($id){
        $data=Vcard::find($id);
        $data->delete();
        return redirect()->route("home");
    }
    public function search(Request $req){
      
        $data['vcard']=Vcard::where("name",'like',"%{$req->search}%")->get();
        $data['vcard']=Vcard::where("contact",'like',"%{$req->search}%")->get();
        return view("home",$data);
        // echo  $data['vcard'];
    }
    public function edit($id){
        $data['vcard']=Vcard::find($id);
        return view('update',$data);
    }
    public function update(Request $req,$id){
       $req->validate([
            'name'=>'required',
            'contact'=>'required'
        ]);
        $data = Vcard::find($id);
        $data->name = $req->name;
        $data->contact = $req->contact;
        $data->save();
        return redirect()->route("home");
    }
}
