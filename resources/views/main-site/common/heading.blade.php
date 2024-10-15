<header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Feane
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/menu')}}">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/book')}}">Book Table</a>
              </li>
        

              <li class="nav-item dropdown">
  <a class="nav-link nav-profile d-flex align-items-center" href="#" data-toggle="dropdown">
    <img src="/admin-site/assets/img/profile-img.jpg" height="40px" alt="Profile" class="rounded-circle">
    <span class="d-none d-md-block dropdown-toggle pl-2">K. Anderson</span>
  </a>
  <!-- End Profile Image Icon -->
  <ul class="dropdown-menu dropdown-menu-right profile" style="z-index: 200;">
    <li class="dropdown-header">
      <h6>Kevin Anderson</h6>
      <span>Web Designer</span>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>
    <li>
      <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
        <i class="fa fa-user"></i>
        <span>My Profile</span>
      </a>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>
    <li>
      <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
        <i class="fa fa-cog"></i>
        <span>Account Settings</span>
      </a>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>
    <li>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <i class="fa fa-sign-out-alt"></i>
        <span>Sign Out</span>
      </a>
    </li>
  </ul>
  <!-- End Profile Dropdown Items -->
</li>

            </ul>
          @if (Auth::user())
<!--           
          <div class="user_option">
            <a href="" class="user_link">
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <a href="" class="order_online">
              Order Online
            </a>
          </div> -->
            
          
          @else
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav  mx-auto ">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/signup')}}">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/login')}}">LogIn</a>
            </li>
            </ul>
          </div>
          @endif
            
          </div>
        </nav>
      </div>
    </header>