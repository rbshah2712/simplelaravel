@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Blog Category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Blog Category</li>
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
            <form method="post" action="{{route('update.blog',$BlogEdit->id)}}"  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="id" value="{{$BlogEdit->id}}"/>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" class="form-control" type="text" value="{{$BlogEdit->title}}"  id="title">
                    @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="categoryid" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select name="blogcategory_id" class="form-control" aria-label="Default select example" id="blogcategory_id">
                        <option selected="">Open this select menu</option>
                        @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ $cat->id == $BlogEdit->blogcategory_id ? 'selected' : '' }}>{{ $cat->blog_category }}</option>
                        @endforeach
                        </select>
                   
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input name="description" class="form-control" type="text" value="{{$BlogEdit->description}}"  id="description">
                    @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input name="image" class="form-control" type="file" value=""  id="image">
                    @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="showImage" class="col-sm-2 col-form-label">  </label>
               <div class="col-sm-10">
                   <img id="showImage" class="rounded avatar-lg" src="{{url($BlogEdit->image)}}" alt="{{$BlogEdit->title}}">
               </div>
           </div>
            <!-- end row -->
     
            
            <div class="row mb-3">
              <div class="col-3">
            <input type="submit" class="btn btn-block btn-primary" value="Update Blog">
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
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

   
  $(function(){
    $('#blogcategoryform').validate({
      rules:{
        title : {
          required : true,
        },
      },
      messages:{
        title:{
          required:'Please Enter Category Name',
        },
      },
      errorElement: 'span',
      errorPlacement: function(error,element){
        error.addClass('invalid-feedback');
        $(element).parents('.form-group').append(error);
      },
      highlight: function(element,errorClass,validClass){
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element,errorClass,validClass){
        $(element).removeClass('is-invalid');
      },
    });

  });
  </script>
@endsection 
