@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Testimonial Slide Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Testimonial</li>
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
            <form method="post" action="{{ route('update.testimonial',$testiSlide->id) }}" enctype="multipart/form-data">
                @csrf
              <input type="hidden" name="id" value="{{ $testiSlide->id }}"/>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" class="form-control" type="text" value="{{ $testiSlide->title }}"  id="title">
                </div>
            </div>
            <div class="row mb-3">
              <label for="testi_desc" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                  <textarea name="testi_desc" class="form-control" id="testi_desc">{{ $testiSlide->testi_desc }}</textarea>
              </div>
          </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="testi_image" class="col-sm-2 col-form-label">Testimonial Image </label>
                <div class="col-sm-10">
              <input name="testi_image" class="form-control" type="file"  id="testi_image">
                </div>
            </div>
            <!-- end row -->
              <div class="row mb-3">
                 <label for="showImage" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($testiSlide->testi_image))? url($testiSlide->testi_image):url('upload/no_image.jpg') }}" alt="{{$testiSlide->title}}">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
              <div class="col-3">
            <input type="submit" class="btn btn-block btn-primary" value="Update Testimonial">
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
      $('#testi_image').change(function(e){
          var reader = new FileReader();
          reader.onload = function(e){
              $('#showImage').attr('src',e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
      });
  });
</script>
@endsection 
