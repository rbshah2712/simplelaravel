@extends('frontend.sub_master')
@section('sub')
@section('title')
Contact
@endsection
<div class="contact_section layout_padding">
    <div class="container-fluid">
      <h1 class="what_taital">Contact us</h1>
      <p class="amet_text">Please fill below form to reach out</p>
      <div class="contact_section2">
        <div class="row">
          <div class="col-md-6 padding_left_0">
            <div class="mail_section">
                <form action="{{route('store.contact')}}" method="post">
                    @csrf
              <input type="" class="mail_text_1" placeholder="Name" name="Name" id="Name">
              @error('Name')<p class="text-danger">{{$message}}</p>@enderror
              <input type="" class="mail_text_1" placeholder="Phone Number" name="Phone" id="Phone">
              @error('Phone')<p class="text-danger">{{$message}}</p>@enderror
              <input type="" class="mail_text_1" placeholder="Email" name="Email" id="Email">
              @error('Email')<p class="text-danger">{{$message}}</p>@enderror
              <textarea class="massage_text" placeholder="Message" rows="5" id="Message" name="Message" id="Message"></textarea>
              @error('Message')<p class="text-danger">{{$message}}</p>@enderror
              <div class="send_bt"><input type="submit" class="submit-btn"/></div>
                </form>
            </div>
          </div>
          <div class="col-md-6 padding_0">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection