@extends('frontend.sub_master')
@section('sub')
@section('title')
Blog Details
@endsection

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">
                                <span class="color-green"><a href="garden-category.html" title="">Gardening</a></span>

                                <h3>{{$BlogDetails->title}}</h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="garden-single.html" title="">21 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Jessica</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i>{{$BlogDetails->page_count}} </a></small>
                                </div><!-- end meta -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="{{url($BlogDetails->image)}}" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">  
                                <div class="pp">
                                    <p>{{$BlogDetails->description}}</p>
                                </div><!-- end pp -->

                                
                            </div><!-- end content -->

                            <div class="blog-title-area">
                                <div class="tag-cloud-single">
                                    <span>Tags</span>
                                    <small><a href="#" title="">lifestyle</a></small>
                                    <small><a href="#" title="">colorful</a></small>
                                    <small><a href="#" title="">trending</a></small>
                                    <small><a href="#" title="">another tag</a></small>
                                </div><!-- end meta -->
                            </div><!-- end title -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                         <hr class="invis1">
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        @foreach($Blogmain as $blog)
                                        <a href="{{route('blog.details',$blog->id)}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{url($blog->image)}}" alt="{{$blog->title}}" class="img-fluid float-left">
                                                <h5 class="mb-1">{{$blog->title}}</h5>
                                                <small>{{Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</small>
                                            </div>
                                        </a>
                                          @endforeach  
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                           
                           

                            <div class="widget">
                                <h2 class="widget-title">Popular Categories</h2>
                                <div class="link-widget">
                                    <ul>
                                        @foreach($BlogCategory as $cat)
                                        @php
                                            $BlogCount = App\Models\Blog::where('blogcategory_id','=',$cat->id)->count();
                                        @endphp
                                        <li><a href="#">{{$cat->blog_category}} <span>({{$BlogCount}})</span></a></li>
                                        @endforeach
                                    </ul>
                                </div><!-- end link-widget -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
    </div><!-- end wrapper -->

    @endsection