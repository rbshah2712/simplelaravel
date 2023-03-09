@extends('frontend.sub_master')
@section('sub')
@section('title')
Blog
@endsection
<div class="services_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
            <h1 class="services_taital">Blog</h1>
        </div>
    </div>
</div>
</div>
        <section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                    @foreach($Blogmain as $blog)
                    <div @if($loop->index ==0) class="left-side" @elseif($loop->index==1) class="center-side" @else class="right-side hidden-md-down" @endif>
                        <div class="masonry-box post-media">
                             <img src="{{url($blog->image)}}" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        @php
                                        $category_name = DB::table('blogcategories')->select('blog_category')->where('id','=',$blog->blogcategory_id)->get();
                                        @endphp
                                        <span class="bg-aqua"><a href="blog-category-01.html" title="">{{$category_name[0]->blog_category}}</a></span>
                                        <h4><a href="garden-single.html" title="">{{$blog->title}}</a></h4>
                                        <small><a href="garden-single.html" title="">{{Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end left-side -->
                    @endforeach
                   
                </div><!-- end masonry -->
            </div>
        </section>

        <section class="bg-section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-list clearfix">
                                @foreach($Blogs as $bg)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{route('blog.details',$bg->id)}}" title="">
                                                <img src="{{url($bg->image)}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->
                                        @php
                                             $category_name = App\Models\BlogCategory::where('id','=',$blog->blogcategory_id)->get('blog_category');
                                        @endphp
                                    <div class="blog-meta big-meta col-md-8">
                                        @foreach($category_name as $category)
                                        <span class="bg-aqua"><a href="garden-category.html" title="">{{$category->blog_category}}</a></span>
                                        @endforeach
                                        <h4><a href="{{route('blog.details',$bg->id)}}" title="">{{$bg->title}}</a></h4>
                                        <p>{{$bg->description}}</p>
                                        <small><a href="{{route('blog.details',$bg->id)}}" title="{{$bg->title}}"><i class="fa fa-eye"></i> {{$bg->page_count}}</a></small>
                                        <small><a href="{{route('blog.details',$bg->id)}}" title="{{$bg->title}}">{{Carbon\Carbon::parse($bg->created_at)->diffForHumans() }}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">
                                @endforeach
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->
                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    {{$Blogs->links('vendor.pagination.custom')}}
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        @foreach($Blogmain as $blog)
                                        <a href="{{route('blog.details',$bg->id)}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{url($blog->image)}}" alt="" class="img-fluid float-left">
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
        @endsection