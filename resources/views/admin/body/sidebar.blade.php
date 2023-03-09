<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('logo/logo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MultiVendor Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="{{route('home.about')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                About Page
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('home.footer')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Footer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('home.viewportfolio')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                View Portfolio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('home.viewtestimonial')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                View Testimonials
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{route('home.faq')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                View FAQ
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('view.blogcategory')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                View Blog Category
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('view.blog')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                View Blog
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('viewall.contact')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                View Contact
              </p>
            </a>
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>