<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\about;
use Image;

class aboutcontroller extends Controller
{
    //
   public function AboutPage()
    {
        $aboutPage = about::find(1);
        return view('admin.about_page.about_page_all',compact('aboutPage'));
    }

    public function UpdateAbout(Request $request)
    {
        $aboutPage = about::find(1);
        $about_id = $request->id;

        if($request->file('about_image')){
            $image = $request->file('about_image');
            $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(350,341)->save('upload/about_images/'.$name_gen);
            $save_url = 'upload/about_images/'.$name_gen;

            About::findorFail($about_id)->update([
                'title' => $request->title,
                'short_desc' => $request->short_desc,
                'about_image'=> $save_url,
            ]);

            $notification = array('message'=>'About Page Updated with Image Successfully','alert-type'=>'success');

            return redirect()->back()->with($notification);
        }else{
            About::findorFail($about_id)->update([
                'title' => $request->title,
                'short_desc' => $request->short_desc,
            ]);

            $notification = array('message'=>'About Page Updated without Image Successfully','alert-type'=>'success');

            return redirect()->back()->with($notification);
        }
    }

    public function About(){
        return view('frontend.about');
    }
}
