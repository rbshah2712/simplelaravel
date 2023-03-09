@extends('admin.admin_master')
@section('admin')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Blog</h3>
      <div class="row pull-right">
        <div class="col-md-5">
      <a href="{{route('add.blog')}}"class="btn btn-primary" title="Add Blog"><i class="fa fa-plus"></i></a>
      </div></div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>Blog Category</th>
          <th>Title</th>
          <th>Description</th>
          <th>Image</th>
          <th>Created At</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($Blog as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item['category']['blog_category'] }}</td>
          <td>{{$item->title}}</td>
          <td>{{$item->description}}</td>
          <td><img src="{{url($item->image)}}" class="img-size-64 mr-3 img-circle"></td>
          <td>{{$item->created_at}}</td>
          <td><a href="{{route('edit.blog',$item->id)}}"class="btn btn-primary" title="Edit Blog"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;<a href="{{route('delete.blog',$item->id)}}" class="btn btn-danger" data-toggle="modal" data-target="#modal-secondary" title="Delete Blog" id="delete-blog"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach
      
        </tbody>
        <tfoot>
        <tr>
            <th>#</th>
            <th>Blog Category</th>
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