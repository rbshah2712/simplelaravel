@php
$route = Route::current()->getName();
@endphp
<div class="header_section header_bg">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="logo"><a href="index.html"><img src="{{asset('frontend/assets/images/logo.png')}}"></a></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{($route == 'home.index')? 'active' : ''}}">
          <a class="nav-link" href="{{route('home.index')}}">Home</a>
        </li>
        <li class="nav-item {{($route == 'frontend.about')? 'active' : ''}}">
          <a class="nav-link" href="{{route('frontend.about')}}">About</a>
        </li>
        <li class="nav-item {{($route == 'frontend.portfolio')? 'active' : ''}}">
          <a class="nav-link" href="{{url('portfolio')}}">Portfolio</a>
        </li>
        <li class="nav-item {{($route == 'frontend.blog')? 'active' : ''}}">
          <a class="nav-link" href="{{url('blog')}}">Blog</a>
        </li>
        <li class="nav-item {{($route == 'frontend.faq')? 'active' : ''}}">
          <a class="nav-link" href="{{url('faq')}}">FAQ</a>
        </li>
        <li class="nav-item {{($route == 'home.contact')? 'active' : ''}}">
          <a class="nav-link" href="{{url('contact')}}">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</div>