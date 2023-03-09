@extends('admin.admin_master')
@section('admin')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Change Password</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Change Password</li>
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
           
           
            <form method="post" action="{{ route('update.password') }}" id="changepasswordform">
                @csrf
            <div class="row mb-3">
                <label for="oldpassword" class="col-sm-2 col-form-label">Old Password</label>
                <div class="form-group col-sm-10">
                    <input name="oldpassword" class="form-control" type="password" value=""  id="oldpassword">
                </div>
            </div>
            <!-- end row -->
              <div class="row mb-3">
                <label for="newpassword" class="col-sm-2 col-form-label">New Password</label>
                <div class="form-group col-sm-10">
                    <input name="newpassword" class="form-control" type="password" value=""  id="newpassword">
                </div>
            </div>
            <!-- end row -->
              <div class="row mb-3">
                <label for="confirm_password" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="form-group col-sm-10">
                    <input name="confirm_password" class="form-control" type="password" value=""  id="confirm_password">
                </div>
            </div>
            <div class="row mb-3">
                <label>&nbsp;</label>
              <div class="col-3 ml-4">
            <input type="submit" class="btn btn-block btn-primary" value="Change Password">
              </div>
            </div>
            </form>
        </div>
    </div>
</div> <!-- end col -->
</div>
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
 $(function(){
    $('#changepasswordform').validate({
      rules:{
        oldpassword : {
          required : true,
        },
        newpassword : {
          required : true,
        },
        confirm_password : {
          required : true,
          equalTo: "#newpassword"
        },
      },
      messages:{
        oldpassword:{
          required:'Please Enter Old Password',
        },
        newpassword:{
          required:'Please Enter New Password',
        },
        confirm_password:{
          required:'Please Enter Confirm Password',
          equalTo: 'New Password and  Confirm Password Should be same',
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
