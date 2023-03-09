@extends('admin.admin_master')
@section('admin')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Contact</h3>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Message</th>
          <th>Created At</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($allcontact as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->email}}
          </td>
          <td>{{$item->phone}}</td>
          <td>{{$item->message}}</td>
          <td>{{$item->created_at}}</td>
          <td><a href="{{route('delete.contact',$item->id)}}" class="btn btn-danger" data-toggle="modal" data-target="#modal-secondary" title="Delete Contact" id="delete-contact"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach
      
        </tbody>
        <tfoot>
        <tr>
            <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Message</th>
          <th>Created At</th>
          <th>Actions</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  
  
    @endsection 