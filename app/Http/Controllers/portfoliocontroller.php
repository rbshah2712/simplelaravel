<?php

namespace App\Http\Controllers;

use Image;
use App\Models\portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class portfoliocontroller extends Controller
{
    //

    public function PortfolioPage(){
        return view('admin.portfolio.portfolio');
    }

    public function ViewPortfolio(){
        $allportfolio = portfolio::all();
        return view('admin.portfolio.ViewAll',compact('allportfolio'));
   }

    public function EditPortfolio($id){
        $portfolio = portfolio::findOrFail($id);
        return view('admin.portfolio.edit_portfolio',compact('portfolio'));

    }

    public function ViewMoreImages($id){
        $image = $id;
        $moreimages = DB::table('portfolio_images')->select('id','portfolio_images','portfolio_id')->where('portfolio_id','=',$id)->get();
        return view('admin.portfolio.viewimages',compact('moreimages','image'));
    }

    
    public function AddMorePortfolio($id){
        $portfolioid = $id;
        $addmore = DB::table('portfolio_images')->select('id','portfolio_images','portfolio_id')->where('portfolio_id','=',$id)->get();
        //print_r($addmore);
        return view('admin.portfolio.addmore_portfolio',compact('addmore','portfolioid'));
    }

    public function DeletePortfolio($id){
        $port_del = portfolio::findOrFail($id);
        $port_rec = $port_del->portfolio_image;
        
        $moreimages = DB::table('portfolio_images')->select('id','portfolio_images')->where('portfolio_id','=',$port_del->id)->get();
        foreach($moreimages as $portfolio){
        if($portfolio->portfolio_images!=NULL){
          
                unlink($portfolio->portfolio_images);
                DB::table('portfolio_images')->select('id','portfolio_images')->where('portfolio_id','=',$id)->delete();
        }
    }
        unlink($port_rec);
        portfolio::findOrFail($id)->delete();
        $notification = array('message'=>'Porfolio Deleted Successfully','alert-type'=>'success');
        return redirect()->route('home.viewportfolio')->with($notification);

    }

    public function DeleteMoreImages($id){
        $moreimage = DB::table('portfolio_images')->select('portfolio_id','portfolio_images')->where('id','=',$id)->get();
        foreach($moreimage as $item){
            if($item->portfolio_images!=NULL){
                unlink($item->portfolio_images);
                DB::table('portfolio_images')->select('*')->where('id','=',$id)->delete();
            }
        
      //  }
}
        $notification = array('message'=>'Porfolio Image Deleted Successfully','alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function UpdatePortfolio(Request $request){
        $portfolio_id = $request->id;
        if($request->file('portfolio_image')){
            $image = $request->file('portfolio_image');

        //    foreach($image as $multi_image) {

                $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(350,350)->save('upload/portfolio_images/'.$name_gen);
                $save_url = 'upload/portfolio_images/'.$name_gen;
                portfolio::findOrFail($portfolio_id)->update([
                'title' => $request->title,
                'descr' => $request->descr,
                'portfolio_image'=> $save_url,
                'updated_at'=>Carbon::now(),
                
            ]);
             //   }
            $notification = array('message'=>'Porfolio Updated with Image Successfully','alert-type'=>'success');
            return redirect()->route('home.viewportfolio')->with($notification);
        
           }else{
                portfolio::findOrFail($portfolio_id)->update([
                'title' => $request->title,
                'descr' => $request->descr,
                'updated_at'=>Carbon::now(),
                
            ]);
            $notification = array('message'=>'Porfolio Updated without Image Successfully','alert-type'=>'success');
            return redirect()->route('home.viewportfolio')->with($notification);
           }

    }


   
    public function AddPortfolio(Request $request){
        if($request->file('portfolio_image')){
            $image = $request->file('portfolio_image');

        //    foreach($image as $multi_image) {

                $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(350,350)->save('upload/portfolio_images/'.$name_gen);
                $save_url = 'upload/portfolio_images/'.$name_gen;
                portfolio::insert([
                'title' => $request->title,
                'descr' => $request->descr,
                'portfolio_image'=> $save_url,
                'created_at'=>Carbon::now(),
                
            ]);
             //   }
            $notification = array('message'=>'Porfolio Inserted with Image Successfully','alert-type'=>'success');
            return redirect()->route('home.viewportfolio')->with($notification);
        
           }else{
                portfolio::insert([
                'title' => $request->title,
                'descr' => $request->descr,
                
            ]);
            $notification = array('message'=>'Porfolio Inserted without Image Successfully','alert-type'=>'success');
            return redirect()->route('home.viewportfolio')->with($notification);
           }
        }

        

        public function UpdateMorePortfolio(Request $request){
            $images_id = $request->id;
    
            if($request->file('portfolio_images')){
                $image = $request->file('portfolio_images');
    
                foreach($image as $multi_image) {
    
                    $name_gen =hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();
                    Image::make($multi_image)->resize(350,350)->save('upload/portfolio_images/moreportfolio_images/'.$name_gen);
                    $save_url = 'upload/portfolio_images/moreportfolio_images/'.$name_gen;
                    DB::table('portfolio_images')->insert([
                    'portfolio_id' => $images_id,
                    'portfolio_images'=> $save_url,
                    'updated_at'=>Carbon::now(),
                    
                ]);
                  }
                $notification = array('message'=>'Porfolio Inserted with Image Successfully','alert-type'=>'success');
                return redirect()->back()->with($notification);
            
               }

        }

        public function Portfolio(){
            return view('frontend.portfolio');
        }
    }

