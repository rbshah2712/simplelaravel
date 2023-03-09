@extends('frontend.sub_master')
@section('sub')
@section('title')
FAQ
@endsection
@php
  $FAQPage = App\Models\FAQ::latest()->get(); 
@endphp
  
<div class="services_section layout_padding">
    <div class="container-fluid">
    <!-- Content Header (Page header) -->
 <!-- Main content -->
 <div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
          <h4 class="card-title services_taital">FAQ</h4>
        </div>
    <section class="content">
        <div class="row">
            <div class="col-12" id="accordion">
                @if(count($FAQPage) > 0)
                @foreach($FAQPage as $faq)
                <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#{{$faq->id}}">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                {{$faq->title}}
                            </h4>
                        </div>
                    </a>
                    <div id="{{$faq->id}}" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            {{$faq->description}}
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <p>No Records to Display</p>
                @endif
            </div>
        </div>
    </section>
    </div>
 </div>
    <!-- /.content -->
  </div>
</div>
  @endsection
 
