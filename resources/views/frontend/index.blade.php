@extends('frontend.main_master')
@section('main')
@section('title')
  home
@endsection
  @include('frontend.home_all.about_page')
  <!--about section end -->
  <!--services section start -->
  <div class="what_we_do_section layout_padding">
    <div class="container">
      <h1 class="what_taital">WHAT WE DO</h1>
      <p class="what_text">It is a long established fact that a reader will be distracted by the readable content of a </p>
      <div class="what_we_do_section_2">
        <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="{{asset('frontend/assets/images/icon-1.png')}}"></div>
            <h3 class="accounting_text">Accounting</h3>
            <p class="lorem_text">Lorem Ipsum is simply dummy text of the printing and</p>
            <div class="moremore_bt_1"><a href="#">Read More </a></div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="box_main active">
            <div class="icon_1"><img src="{{asset('frontend/assets/images/icon-2.png')}}"></div>
            <h3 class="accounting_text">Advisor</h3>
            <p class="lorem_text">Lorem Ipsum is simply dummy text of the printing and</p>
            <div class="moremore_bt_1"><a href="#">Read More </a></div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="{{asset('frontend/assets/images/icon-3.png')}}"></div>
            <h3 class="accounting_text">Investment</h3>
            <p class="lorem_text">Lorem Ipsum is simply dummy text of the printing and</p>
            <div class="moremore_bt_1"><a href="#">Read More </a></div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="{{asset('frontend/assets/images/icon-4.png')}}"></div>
            <h3 class="accounting_text">Financial</h3>
            <p class="lorem_text">Lorem Ipsum is simply dummy text of the printing and</p>
            <div class="moremore_bt_1"><a href="#">Read More </a></div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!--services section end -->
  <!--project section start -->
  <div class="project_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="project_main">
            <h1 class="services_taital">Our projects</h1>
            <p class="services_text">It is a long established fact that a reader will be distracted by the readable content of a </p>
            <div class="moremore_bt"><a href="#">Read More </a></div>
            <div class="image_6"><img src="{{asset('frontend/assets/images/img-6.png')}}"></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="images_main">
            <div class="images_left">
              <div class="container_1">
                <img src="{{asset('frontend/assets/images/img-2.png')}}" alt="Avatar" class="image" style="width:100%">
                <div class="middle">
                  <div class="text"><img src="{{asset('frontend/assets/images/search-icon.png')}}"></div>
                  <h2 class="fact_text">Established Fact</h2>
                </div>
              </div>
              <div class="container_1">
                <img src="{{asset('frontend/assets/images/img-3.png')}}" alt="Avatar" class="image" style="width:100%">
                <div class="middle">
                  <div class="text"><img src="{{asset('frontend/assets/images/search-icon.png')}}"></div>
                  <h2 class="fact_text">Established Fact</h2>
                </div>
              </div>
            </div>
            <div class="images_right">
              <div class="container_1">
                <img src="{{asset('frontend/assets/images/img-4.png')}}" alt="Avatar" class="image" style="width:100%">
                <div class="middle">
                  <div class="text"><img src="{{asset('frontend/assets/images/search-icon.png')}}"></div>
                  <h2 class="fact_text">Established Fact</h2>
                </div>
              </div>
              <div class="container_1">
                <img src="{{asset('frontend/assets/images/img-5.png')}}" alt="Avatar" class="image" style="width:100%">
                <div class="middle">
                  <div class="text"><img src="{{asset('frontend/assets/images/search-icon.png')}}"></div>
                  <h2 class="fact_text">Established Fact</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="project_section_2 layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="icon_1"><img src="{{asset('frontend/assets/images/icon-3.png')}}"></div>
          <h3 class="accounting_text_1">1000+</h3>
          <p class="yers_text">Years of Business</p>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="icon_1"><img src="{{asset('frontend/assets/images/icon-4.png')}}"></div>
          <h3 class="accounting_text_1">20000+</h3>
          <p class="yers_text">Projects Delivered</p>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="icon_1"><img src="{{asset('frontend/assets/images/icon-2.png')}}"></div>
          <h3 class="accounting_text_1">10000+</h3>
          <p class="yers_text">Satisfied Customers</p>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="icon_1"><img src="{{asset('frontend/assets/images/icon-1.png')}}"></div>
          <h3 class="accounting_text_1">1500+</h3>
          <p class="yers_text">Services</p>
        </div>
      </div>
    </div>
  </div>
  <!--project section end -->
  <!--team section start -->
  <div class="team_section layout_padding">
    <div class="container">
      <h1 class="what_taital">Our Team and experts</h1>
      <p class="what_text_1">It is a long established fact that a reader will be distracted by the readable content of a </p>
      <div class="team_section_2 layout_padding">
        <div class="row">
          <div class="col-sm-3">
            <img src="{{asset('frontend/assets/images/img-7.png')}}" class="image_7">
            <p class="readable_text">Readable</p>
            <p class="readable_text_1">Follow Us</p>
            <div class="social_icon">
              <ul>
                <li><a href="#"><img src="{{asset('frontend/assets/images/fb-icon.png')}}"></a></li>
                <li><a href="#"><img src="{{asset('frontend/assets/images/twitter-icon.png')}}"></a></li>
                <li><a href="#"><img src="{{asset('frontend/assets/images/linkedin-icon.png')}}"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <img src="{{asset('frontend/assets/images/img-8.png')}}" class="image_7">
            <p class="readable_text">Content</p>
            <p class="readable_text_1">Follow Us</p>
            <div class="social_icon">
              <ul>
                  <li><a href="#"><img src="{{asset('frontend/assets/images/fb-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{asset('frontend/assets/images/twitter-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{asset('frontend/assets/images/linkedin-icon.png')}}"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <img src="{{asset('frontend/assets/images/img-9.png')}}" class="image_7">
            <p class="readable_text">Readable</p>
            <p class="readable_text_1">Follow Us</p>
            <div class="social_icon">
              <ul>
                  <li><a href="#"><img src="{{asset('frontend/assets/images/fb-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{asset('frontend/assets/images/twitter-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{asset('frontend/assets/images/linkedin-icon.png')}}"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <img src="{{asset('frontend/assets/images/img-10.png')}}" class="image_7">
            <p class="readable_text">Content</p>
            <p class="readable_text_1">Follow Us</p>
            <div class="social_icon">
              <ul>
                  <li><a href="#"><img src="{{asset('frontend/assets/images/fb-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{asset('frontend/assets/images/twitter-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{asset('frontend/assets/images/linkedin-icon.png')}}"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--team section end -->
  <!--client section start -->
    @include('frontend.home_all.testimonial_slide')
  @endsection