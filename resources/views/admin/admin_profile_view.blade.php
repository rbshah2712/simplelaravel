@extends('admin.admin_master')
@section('admin')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
        <center>
                    <img class="img-size-64 mr-3 img-circle" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap">
        </center>
                        <div class="card-body box-profile">
                          <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                              <b>Name</b> <a class="float-right">{{ $adminData->name }}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Email</b> <a class="float-right">{{ $adminData->email }}</a>
                            </li>
                            <li class="list-group-item">
                              <b>User Name</b> <a class="float-right">{{ $adminData->username }}</a>
                            </li>
                          </ul>
                          <div class="row">
                          <div class="col-3">
                          <a href="{{route('edit.profile')}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                          </div></div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                 
                </div>
            </div> 
                                    
                
                                </div> 
        
        
        </div>
        </div>
    </div>
  </section>
@endsection