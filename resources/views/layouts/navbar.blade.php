@include('layouts.header')

<header id="header" class="header sticky-top">    
    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Banilab</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="/#hero">Home<br></a></li>
            <li><a href="/#faskes-sort-table">Faskes</a></li>
            <li class="dropdown"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
              <ul>
                <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                <li><a href="{{ route('admin.index') }}">Admin Page</a></li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf <!-- Tambahkan CSRF token -->
                      <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </a>
                  </form>
              </li>
              </ul>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" href="{{ route('faskes.create') }}">Daftar Faskes</a>

      </div>

    </div>

</header>