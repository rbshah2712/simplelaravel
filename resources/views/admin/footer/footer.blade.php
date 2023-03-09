@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Footer Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Footer</li>
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
            <form method="post" action="{{ route('update.footer',$Footer->id) }}" enctype="multipart/form-data" id="footerform">
                @csrf
              <input type="hidden" name="id" value="{{ $Footer->id }}"/>
            <div class="row mb-3">
                <label for="copyright" class="col-sm-2 col-form-label">CopyRight</label>
                <div class="form-group col-sm-10">
                    <input name="copyright" class="form-control" type="text" value="{{ $Footer->copyright }}"  id="copyright">
                </div>
            </div>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="form-group col-sm-10">
                    <input name="title" class="form-control" type="text" value="{{ $Footer->title }}"  id="title">
                </div>
            </div>
            <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Text</label>
                <div class="form-group col-sm-10">
                    <input name="text" class="form-control" type="text" value="{{ $Footer->text }}"  id="text ">
                </div>
            </div>
            <div class="row mb-3">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="form-group col-sm-10">
                    <input name="address" class="form-control" type="text" value="{{ $Footer->address }}"  id="address">
                </div>
            </div>
            <div class="row mb-3">
              <label for="linkedin" class="col-sm-2 col-form-label">Linkedin</label>
              <div class="form-group col-sm-10">
                  <textarea name="linkedin" class="form-control" id="linkedin">{{ $Footer->linkedin }}</textarea>
              </div>
          </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email </label>
                <div class="form-group col-sm-10">
              <input name="email" class="form-control" type="email"  id="email" value="{{ $Footer->email }}">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Phone </label>
                <div class="form-group col-sm-10">
              <input name="phone" class="form-control" type="text"  id="phone" value="{{ $Footer->phone }}">
                </div>
            </div>
             
            </div>
            <!-- end row -->
            <div class="row mb-3">
              <div class="col-3">
            <input type="submit" class="btn btn-block btn-primary" value="Update Footer">
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
    $('#footerform').validate({
      rules:{
        copyright : {
          required : true,
        },
        title : {
          required : true,
        },
        text : {
          required : true,
        },
        address : {
          required : true,
        },
        linkedin : {
          required : true,
        },
        email : {
          required : true,
        },
        phone : {
          required : true,
        },
      },
      messages:{
        copyright:{
          required:'Please Enter Copyright',
        },
        title:{
          required:'Please Enter Title',
        },
        text:{
          required:'Please Enter Text',
        },
        address:{
          required:'Please Enter Address',
        },
        linkedin:{
          required:'Please Enter Linkedin',
        },
        email:{
          required:'Please Enter Email',
        },
        phone:{
          required:'Please Enter Phone',
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
