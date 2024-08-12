@include('layouts.header')

<header id="header" class="header sticky-top">    
    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center me-auto">
          <h1 class="sitename">Azralab</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="/#hero">Home<br></a></li>
            <li><a href="/#faskes-sort-table">Faskes</a></li>
            
            @auth
            <!-- Tampilkan dropdown hanya jika pengguna sudah login -->
            <li class="dropdown"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
              <ul>
                <li><a href="{{ route('profile.edit') }}">Edit Profile</a></li>
                <li><a href="{{ route('admin.index') }}">Admin Page</a></li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </a>
                  </form>
                </li>
              </ul>
            </li>
            @endauth

            @guest
            <!-- Tampilkan Register dan Daftar Faskes jika pengguna belum login -->
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('login') }}">Daftar Faskes</a></li>
            @endguest
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        @auth
        <a class="cta-btn d-none d-sm-block" href="{{ route('faskes.create') }}">Daftar Faskes</a>
        @endauth

      </div>

    </div>
</header>
