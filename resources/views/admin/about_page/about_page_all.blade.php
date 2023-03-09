@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">About Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">About</li>
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
            <form method="post" action="{{ route('update.about',$aboutPage->id) }}" enctype="multipart/form-data" id="aboutform">
                @csrf
              <input type="hidden" name="id" value="{{ $aboutPage->id }}"/>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="form-group col-sm-10">
                    <input name="title" class="form-control" type="text" value="{{ $aboutPage->title }}"  id="title">
                </div>
            </div>
            <div class="row mb-3">
              <label for="short_desc" class="col-sm-2 col-form-label">Description</label>
              <div class="form-group col-sm-10">
                  <textarea name="short_desc" class="form-control" id="short_desc" cols="4" rows="6">{{ $aboutPage->short_desc }}</textarea>
              </div>
          </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="about_image" class="col-sm-2 col-form-label">About Image </label>
                <div class="form-group col-sm-10">
              <input name="about_image" class="form-control" type="file"  id="about_image">
                </div>
            </div>
            <!-- end row -->
              <div class="row mb-3">
                 <label for="showImage" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($aboutPage->about_image))? url($aboutPage->about_image):url('upload/no_image.jpg') }}" alt="{{$aboutPage->title}}">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
              <div class="col-3">
            <input type="submit" class="btn btn-block btn-primary" value="Update About Page">
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
      $('#about_image').change(function(e){
          var reader = new FileReader();
          reader.onload = function(e){
              $('#showImage').attr('src',e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
      });
  });
  
  
  $(function(){
    $('#aboutform').validate({
      rules:{
        title : {
          required : true,
        },
        short_desc : {
          required : true,
        },
        about_image : {
          extension : "jpg|jpeg|png",
        },
      },
      messages:{
        title:{
          required:'Please Enter Title',
        },
        short_desc:{
          required:'Please Enter Description',
        },
        about_image:{
          extension:'Please Enter Image with valid extension',
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

  $(function () {
    // short_desc
    $('#short_desc').summernote()

  });
</script>

@endsection 
