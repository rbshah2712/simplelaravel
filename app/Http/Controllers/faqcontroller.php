<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class faqcontroller extends Controller
{
    //
    public function FAQPage(){
        $faqs = FAQ::all();
        return view('admin.FAQ.faq_view',compact('faqs'));
    }

    public function ShowFAQ(){
        return view('admin.FAQ.add_faq');
    }

    public function AddFAQ(Request $request){
        $request->validate(['title' => 'required','description' => 'required'],['title.required' => 'Title is Required','description.required' => 'Description is Required']);
        FAQ::insert([
            'title' => $request->title,
            'description' => $request->description,
            'created_at'=>Carbon::now(),
            
        ]);
        $notification = array('message'=>'FAQ Inserted Successfully','alert-type'=>'success');
        return redirect()->route('home.faq')->with($notification);
    }

    public function EditFAQ($id){
        $FAQedit = FAQ::findOrFail($id);
        return view('admin.FAQ.edit_faq',compact('FAQedit'));

    }

    public function UpdateFAQ(Request $request){
        $request->validate(['title' => 'required','description' => 'required'],['title.required' => 'Title is Required','description.required' => 'Description is Required']);
        $faq_id = $request->id;
        FAQ::findOrFail($faq_id)->update([
        'title' => $request->title,
        'description' => $request->description,
        'updated_at'=>Carbon::now(),
                
            ]);
            $notification = array('message'=>'FAQ Updated Successfully','alert-type'=>'success');
            return redirect()->route('home.faq')->with($notification);
           

    }

    public function DeleteFAQ($id){
        FAQ::findOrFail($id)->delete();
        $notification = array('message'=>'FAQ Deleted Successfully','alert-type'=>'success');
        return redirect()->route('home.faq')->with($notification);

    }

    public function FAQ(){
        return view('frontend.faq');
    }
}
