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
            <form method="post" action="{{route('update.portfolioimages',$portfolioid)}}" enctype="multipart/form-data">
                @csrf
                <input name="id" type="hidden" value="{{$portfolioid}}"  id="id">
            <!-- end row -->
            <div class="row mb-3">
                <label for="portfolio_image" class="col-sm-2 col-form-label">Portfolio Image </label>
                <div class="col-sm-10">
                <input name="portfolio_images[]" class="form-control" type="file"  id="portfolio_images" multiple required>
                </div>
            </div>
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
@endsection 
