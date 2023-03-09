<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('backend/assets/img/logo/logo.jpg')}}" alt="AdminLTELogo" height="60" width="60">
  </div>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     @php
         $id = Auth::user()->id;
         $adminData = App\Models\User::find($id);
     @endphp

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown d-flex">
      
        <img src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <span>{{$adminData->name;}}</span>
            <i class="right fas fa-angle-down"></i>
        </a>
    
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{route('admin.profile')}}" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              
              <div class="media-body">
                <h3 class="dropdown-item-title text-center">
                  Profile
                  <span class="float-right text-sm text-primary"><i class="fas fa-user"></i></span>
                </h3>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('change.password')}}" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
            
              <div class="media-body">
                <h3 class="dropdown-item-title text-center">
                  Change Password
                  <span class="float-right text-sm text-primary"><i class="fas fa-wallet"></i></span>
                </h3>
                
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              
              <div class="media-body">
                <h3 class="dropdown-item-title text-center">
                  Settings
                  <span class="float-right text-sm text-primary"><i class="fas fa-cog"></i></span>
                </h3>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown"><div class="media">
              
            <div class="media-body">
              <h3 class="dropdown-item-title text-center">Lock Screen<span class="float-right text-sm text-primary"><i class="fas fa-lock"></i></span></h3></div></div></a>
          <div class="dropdown-divider"></div>
          <a href="{{route('admin.logout')}}" class="dropdown-item dropdown"><div class="media">
              
            <div class="media-body">
              <h3 class="dropdown-item-title text-center">Logout<span class="float-right text-sm text-primary"><i class="fas fa-sign-out-alt"></i></span></h3></div></div></a>
              <div class="dropdown-divider"></div></a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
    </li>
    </ul>
  </nav>