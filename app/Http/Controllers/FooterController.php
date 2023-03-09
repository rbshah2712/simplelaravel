<?php

namespace App\Http\Controllers;

use App\Models\footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    //
    public function FooterPage(){
        $Footer = footer::find(1);
        return view('admin.footer.footer',compact('Footer'));
    }

    public function UpdateFooter(Request $request){

        $footerid = $request->id;
        footer::findOrFail($footerid)->update([
            'copyright'=>$request->copyright,
            'linkedin'=>$request->linkedin,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'title'=>$request->title,
            'text'=>$request->text,
            'address'=>$request->address,

        ]);

        $notification = array('message'=>'Footer Updated Successfully','alert-type'=>'success');
        return redirect()->route('home.footer')->with($notification);
        }
}
