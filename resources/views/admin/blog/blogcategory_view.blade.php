@extends('admin.admin_master')
@section('admin')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Blog Category</h3>
      <div class="row pull-right">
        <div class="col-md-5">
      <a href="{{route('add.blogcategory')}}"class="btn btn-primary" title="Add Blog Category"><i class="fa fa-plus"></i></a>
      </div></div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Created At</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($BlogCategory as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->blog_category}}
          </td>
          <td>{{$item->created_at}}</td>
          <td><a href="{{route('edit.blogcategory',$item->id)}}"class="btn btn-primary" title="Edit Blog Category"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;<a href="{{route('delete.blogcategory',$item->id)}}" class="btn btn-danger" data-toggle="modal" data-target="#modal-secondary" title="Delete Blog Category" id="delete-blogcategory"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach
      
        </tbody>
        <tfoot>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  
  
    @endsection 