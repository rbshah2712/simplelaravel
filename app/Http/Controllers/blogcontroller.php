<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\blogcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;

class blogcontroller extends Controller
{
    //
    public function BlogPage (){
        $BlogCategory = blogcategory::orderBy('blog_category','ASC')->get();
        $Blogmain = Blog::orderBy('created_at','DESC')->limit(3)->get();
        $Blogs =  Blog::orderBy('created_at','ASC')->latest()->paginate(2);
        return view('frontend.blog',compact('BlogCategory','Blogmain','Blogs'));
    }

    public function ShowBlogDetails ($id){
        $BlogCategory = blogcategory::orderBy('blog_category','ASC')->get();
        $Blogmain = Blog::orderBy('created_at','DESC')->limit(3)->get();
        $counter = Blog::findorFail($id);
        $counter->page_count = $counter->page_count + 1;
                Blog::findorFail($id)->update([
                'page_count'=>$counter->page_count,
                ]);
        $BlogDetails = blog::findOrFail($id);
        return view('frontend.blog_details',compact('BlogDetails','Blogmain','BlogCategory'));
    }


    public function ShowBlogCategory(){
        return view('admin.blog.add_blogcategory');
    }

    public function AddBlog(){
        $categories = blogcategory::orderBy('blog_category','ASC')->get();
        return view('admin.blog.add_blog',compact('categories'));
    }

    public function AddBlogCategory(Request $request){
        $request->validate(['title'=>'required'],['title'=>'Title is required']);
        blogcategory::insert([
            'blog_category'=>$request->title,
            'created_at'=>Carbon::now(),
        ]);
        $notification = array('message'=>'Blog Category Inserted Successfully','alert-type'=>'success');
        return redirect()->route('view.blogcategory')->with($notification);
        
    }

    public function StoreBlog(Request $request){

        $request->validate(['title' => 'required','description' => 'required','image' => 'required'],['title.required' => 'Title is Required','description.required' => 'Description is Required','image.required' => 'Image is Required']);
        if($request->file('image')){
            $image = $request->file('image');

        //    foreach($image as $multi_image) {

                $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(350,350)->save('upload/blog_images/'.$name_gen);
                $save_url = 'upload/blog_images/'.$name_gen;
                Blog::insert([
                'title' => $request->title,
                'blogcategory_id'=>$request->blogcategory_id,
                'description' => $request->description,
                'image'=> $save_url,
                'created_at'=>Carbon::now(),
                
            ]);
             //   }
            $notification = array('message'=>'Blog Inserted with Image Successfully','alert-type'=>'success');
            return redirect()->route('view.blog')->with($notification);
        
           }else{
                Blog::insert([
                'blogcategory_id'=>$request->blogcategory_id,
                'title' => $request->title,
                'description' => $request->description,
                'created_at'=>Carbon::now(),
                
            ]);
            $notification = array('message'=>'Blog Inserted without Image Successfully','alert-type'=>'success');
            return redirect()->route('view.blog')->with($notification);
           }
    }//End Method

    public function ViewBlogCategory(){
        $BlogCategory = blogcategory::all();
        return view('admin.blog.blogcategory_view',compact('BlogCategory'));
    }

    public function ViewBlog(){
        $Blog = blog::all();
        return view('admin.blog.blog_view',compact('Blog'));
    }

    public function EditBlogCategory($id){
        $BlogCategoryEdit = blogcategory::findOrFail($id);
        return view('admin.blog.edit_blogcategory',compact('BlogCategoryEdit'));
    }

    public function EditBlog($id){
        $BlogEdit = blog::findOrFail($id);
        $categories = blogcategory::orderBy('blog_category','ASC')->get();
        return view('admin.blog.edit_blog',compact('BlogEdit','categories'));
    }

    public function UpdateBlog(Request $request){
        $blogs_id = $request->id;
        if($request->file('image')){
            $image = $request->file('image');

        //    foreach($image as $multi_image) {

                $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(350,350)->save('upload/blog_images/'.$name_gen);
                $save_url = 'upload/blog_images/'.$name_gen;
                Blog::findOrFail($blogs_id)->update([
                'blogcategory_id'=>$request->blogcategory_id,
                'title' => $request->title,
                'description' => $request->testi_desc,
                'image'=> $save_url,
                'updated_at'=>Carbon::now(),
                
            ]);
             //   }
            $notification = array('message'=>'Blog Updated with Image Successfully','alert-type'=>'success');
            return redirect()->route('view.blog')->with($notification);
        
           }else{
                    Blog::findOrFail($blogs_id)->update([
                    'blogcategory_id'=>$request->blogcategory_id,
                    'title'=>$request->title,
                    'description'=>$request->description,
                    'updated_at'=>Carbon::now(),
                ]);
                    $notification = array('message'=>'Blog Updated without Image Successfully','alert-type'=>'success');
                    return redirect()->route('view.blog')->with($notification);
                }
   }

    public function DeleteBlog($id){
        $blog_del = blog::findOrFail($id);
        $blog_rec = $blog_del->image;
        unlink($blog_rec);
        blog::findOrFail($id)->delete();
        $notification = array('message'=>'Blog Deleted Successfully','alert-type'=>'success');
        return redirect()->route('view.blog')->with($notification);

    }

    public function UpdateBlogCategory(Request $request){
         $blog_id = $request->id;
         blogcategory::findOrFail($blog_id)->update([
            'blog_category'=>$request->title,
            'updated_at'=>Carbon::now(),
        ]);
            $notification = array('message'=>'Blog Category  Updated Successfully','alert-type'=>'success');
            return redirect()->route('view.blogcategory')->with($notification);
    }

    public function DeleteBlogCategory($id){
       
        blogcategory::findOrFail($id)->delete();
        $notification = array('message'=>'Blog Category Deleted Successfully','alert-type'=>'success');
        return redirect()->route('view.blogcategory')->with($notification);

    }


  
}
