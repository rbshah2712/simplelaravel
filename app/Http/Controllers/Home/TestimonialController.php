<?php

namespace App\Http\Controllers\Home;

use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\TestimonialSlide;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Queue\Middleware\WithoutOverlapping;

class TestimonialController extends Controller
{
    //Start method
  

    public function ViewTestimonial(){

        $testiSlides = TestimonialSlide::all();
        return view('admin.testimonial.testimonial_view',compact('testiSlides'));
    } //End Method

    public function TestimonialPage(){
        return view('admin.testimonial.add_testimonial');
    }

    public function EditTestimonial($id){
        $testiSlide = TestimonialSlide::findOrFail($id);
        return view('admin.testimonial.edit_testimonial',compact('testiSlide'));

    }

    public function AddTestimonial(Request $request){

        $request->validate(['title' => 'required','testi_desc' => 'required','testi_image' => 'required'],['title.required' => 'Title is Required','testi_desc.required' => 'Description is Required','testi_image.required' => 'Image is Required']);
        if($request->file('testi_image')){
            $image = $request->file('testi_image');

        //    foreach($image as $multi_image) {

                $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(350,350)->save('upload/testi_images/'.$name_gen);
                $save_url = 'upload/testi_images/'.$name_gen;
                TestimonialSlide::insert([
                'title' => $request->title,
                'testi_desc' => $request->testi_desc,
                'testi_image'=> $save_url,
                'created_at'=>Carbon::now(),
                
            ]);
             //   }
            $notification = array('message'=>'Testimonial Inserted with Image Successfully','alert-type'=>'success');
            return redirect()->route('home.viewtestimonial')->with($notification);
        
           }else{
                TestimonialSlide::insert([
                'title' => $request->title,
                'testi_desc' => $request->descr,
                
            ]);
            $notification = array('message'=>'Testimonial Inserted without Image Successfully','alert-type'=>'success');
            return redirect()->route('home.viewtestimonial')->with($notification);
           }
    }//End Method


    public function UpdateTestimonialSlider(Request $request){
        
        $request->validate(['title' => 'required','testi_desc' => 'required'],['title.required' => 'Title is Required','testi_desc.required' => 'Description is Required']);
        $testi_id = $request->id;

        if($request->file('testi_image')){
            
            $image = $request->file('testi_image');
            $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(194,156)->save('upload/testi_images/'.$name_gen);
            $save_url = 'upload/testi_images/'.$name_gen;

            TestimonialSlide::findorFail($testi_id)->update([
                'title' => $request->title,
                'testi_desc' => $request->testi_desc,
                'testi_image'=> $save_url,
                'updated_at'=>Carbon::now(),
            ]);

            $notification = array('message'=>'Testimonial Updated with Image Successfully','alert-type'=>'success');
            return redirect()->route('home.viewtestimonial')->with($notification);


        }else{
                TestimonialSlide::findorFail($testi_id)->update([
                'title' => $request->title,
                'testi_desc' => $request->testi_desc,
                'updated_at'=>Carbon::now(),
            ]);

            $notification = array('message'=>'Testimonial Updated without Image Successfully','alert-type'=>'success');
            return redirect()->route('home.viewtestimonial')->with($notification);
        }

    }//End Method


    public function DeleteTestimonial($id){
        $testi_del = TestimonialSlide::findOrFail($id);
        $testi_rec = $testi_del->testi_image;
        unlink($testi_rec);
        TestimonialSlide::findOrFail($id)->delete();
        $notification = array('message'=>'Testimonial Deleted Successfully','alert-type'=>'success');
        return redirect()->route('home.viewtestimonial')->with($notification);

    }
}
