@extends('admin.admin_master')
@section('admin')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Testimonials</h3>
      <div class="row pull-right">
        <div class="col-md-5">
      <a href="{{route('home.addtestimonial')}}"class="btn btn-primary" title="Add Testimonial"><i class="fa fa-plus"></i></a>
      </div></div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Description</th>
          <th>Image</th>
          <th>Created At</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($testiSlides as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->title}}
          </td>
          <td>{{$item->testi_desc}}</td>
          <td><img src="{{url($item->testi_image)}}" class="img-size-64 mr-3 img-circle"></td>
          <td>{{$item->created_at}}</td>
          <td><a href="{{route('edit.testimonial',$item->id)}}"class="btn btn-primary" title="Edit Testimonial"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;<a href="{{route('delete.testimonial',$item->id)}}" class="btn btn-danger" data-toggle="modal" data-target="#modal-secondary" title="Delete Testimonial" id="delete-testimonial"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach
      
        </tbody>
        <tfoot>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  
  
    @endsection 