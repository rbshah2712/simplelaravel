@extends('admin.admin_master')
@section('admin')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Porfolio</h3>
      <div class="row pull-right">
        <div class="col-md-5">
      <a href="{{route('home.portfolio')}}"class="btn btn-primary" title="Add Portfolio"><i class="fa fa-plus"></i></a>
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
            @foreach($allportfolio as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->title}}
          </td>
          <td>{{$item->descr}}</td>
          <td><img src="{{url($item->portfolio_image)}}" class="img-size-64 mr-3 img-circle"></td>
          <td>{{$item->created_at}}</td>
          <td><a href="{{route('edit.portfolio',$item->id)}}"class="btn btn-primary" title="Edit Portfolio"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;<a href="{{route('delete.portfolio',$item->id)}}" class="btn btn-danger" data-toggle="modal" data-target="#modal-secondary" title="Delete Portfolio" id="delete-portfolio"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;<a href="{{route('view.moreimage',$item->id)}}" class="btn btn-warning" title="Add More Portfolio Images"><i class="fa fa-image"></i></a><a href="{{route('add.portfolioimages',$item->id)}}" class="btn btn-primary">Add Image</a></td>
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