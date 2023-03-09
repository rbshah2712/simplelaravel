@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Portfolio Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Portfolio</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <form method="post" action="{{route('store.portfolio',$portfolio->id)}}" enctype="multipart/form-data">
                @csrf
                <input name="id" type="hidden" value="{{$portfolio->id}}"  id="id">
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" class="form-control" type="text" value="{{$portfolio->title}}"  id="title">
                </div>
            </div>
            <div class="row mb-3">
              <label for="descr" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                  <textarea name="descr" class="form-control" id="descr">{{$portfolio->descr}}</textarea>
              </div>
          </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="portfolio_image" class="col-sm-2 col-form-label">Portfolio Image </label>
                <div class="col-sm-10">
                <input name="portfolio_image" class="form-control" type="file"  id="portfolio_image">
                </div>
            </div>
            <!-- end row -->
              <div class="row mb-3">
                 <label for="showImage" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="{{url($portfolio->portfolio_image)}}" alt="{{$portfolio->title}}">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
              <div class="col-3">
            <input type="submit" class="btn btn-block btn-primary" value="Update Porfolio">
              </div>
            </div>
            </form>
        </div>
    </div>
</div> <!-- end col -->
</div>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
      $('#portfolio_image').change(function(e){
          var reader = new FileReader();
          reader.onload = function(e){
              $('#showImage').attr('src',e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
      });
  });
 </script>

@endsection 
