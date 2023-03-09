<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    //

    public function Contact(){
        return view('frontend.contact');
    }

    public function StoreMessage(Request $request){
        $request->validate(['Name'=>'required','Email'=>'required','Phone'=>'required','Message'=>'required'],
        ['Name.required'=>'Please enter name','Email.required'=>'Please enter email','Phone.required'=>'Please enter phone','Message.required'=>'Please enter message']);
        contact::insert([
            'name' => $request->Name,
            'email' => $request->Email,
            'phone' => $request->Phone,
            'message'=> $request->Message,
            'created_at' => Carbon::now(),

        ]);
        $notification = array('message'=>'Message sent successfully','alert-type'=>'success');
        return redirect()->route('home.contact')->with($notification);
    }

    public function ViewContact(){
        $allcontact = contact::all();
        return view('admin.contact_all',compact('allcontact'));
   }

   public function DeleteContact($id){
    contact::findOrFail($id)->delete();
    $notification = array('message'=>'Contact Deleted Successfully','alert-type'=>'success');
    return redirect()->route('viewall.contact')->with($notification);

}


}
