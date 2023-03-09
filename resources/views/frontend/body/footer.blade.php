@php
  $FooterPage = App\Models\footer::find(1);  
  $AboutPage = App\Models\about::find(1);  
@endphp
<div class="footer_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <h4 class="about_text">{{$FooterPage->text}}</h4>
          <div class="location_text"><img src="{{asset('frontend/assets/images/map-icon.png')}}"><span class="padding_left_15">{{$FooterPage->address}}</span></div>
          <div class="location_text"><img src="{{asset('frontend/assets/images/call-icon.png')}}"><span class="padding_left_15">{{$FooterPage->phone}}</span></div>
          <div class="location_text"><img src="{{asset('frontend/assets/images/mail-icon.png')}}"><span class="padding_left_15">{{$FooterPage->email}}</span></div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h4 class="about_text">{{$FooterPage->title}}</h4>
          <p class="dolor_text">{{$FooterPage->address}}</p>
        </div>

        <div class="col-lg-3 col-sm-6">
          
          <div class="footer_social_icon">
            <ul>
              <li><a href="#"><img src="{{asset('frontend/assets/images/fb-icon1.png')}}"></a></li>
               <li><a href="#"><img src="{{asset('frontend/assets/images/twitter-icon1.png')}}"></a></li>
              <li><a href="{{$FooterPage->email}}"><img src="{{asset('frontend/assets/images/linkedin-icon1.png')}}"></a></li>
              <li><a href="#"><img src="{{asset('frontend/assets/images/youtub-icon1.png')}}"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- copyright section start -->
      <div class="copyright_section">
        <div class="copyright_text">{{$FooterPage->copyright}}</div>
      </div>
      <!-- copyright section end -->
    </div>
  </div>