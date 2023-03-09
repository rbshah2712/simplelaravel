@extends('frontend.sub_master')
@section('sub')
@section('title')
About
@endsection
@php
  $AboutPage = App\Models\about::find(1);  
@endphp
  
    <div class="services_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="services_taital">{{$AboutPage->title}}</h1>
            <p class="services_text">{{strip_tags($AboutPage->short_desc)}}</p>
            <div class="moremore_bt"><a href="#">Read More </a></div>
          </div>
          <div class="col-md-4">
            <div><img src="{{$AboutPage->about_image}}" class="{{$AboutPage->title}}"></div>
          </div>
        </div>
      </div>
    </div>
  @endsection
 
