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
            <li class="breadcrumb-item active">Blog Category</li>
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
            <form method="post" action="{{ route('update.blogcategory',$BlogCategoryEdit->id) }}" id="blogcategoryform">
                @csrf
              <input type="hidden" name="id" value="{{ $BlogCategoryEdit->id }}" id="id"/>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="form-group col-sm-10">
                    <input name="title" class="form-control" type="text" value="{{ $BlogCategoryEdit->blog_category }}"  id="title">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
              <div class="col-3">
            <input type="submit" class="btn btn-block btn-primary" value="Update Blog Category">
              </div>
            </div>
            </form>
        </div>
    </div>
</div> <!-- end col -->
</div>
</div>
</div>
<script>
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
