@extends('admin.admin_master')
@section('admin')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Porfolio</h3>
    </div>
    <!-- /.card-header -->

    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>Portfolio Image</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($moreimages as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td><img src="{{url($item->portfolio_images)}}" class="img-size-64 mr-3 img-circle"></td>
          <td><a href="{{route('delete.moreimage',$item->id)}}" class="btn btn-danger" id="delete-moreimages"><i class="fa fa-trash" title="Delete Image" ></i></a></td>
          </tr>
        @endforeach
      
        </tbody>
        <tfoot>
        <tr>
          <th>#</th>
          <th>Portfolio Image</th>
          <th>Actions</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  
    @endsection 