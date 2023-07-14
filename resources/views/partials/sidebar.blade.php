<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <img class="sidebar-brand-full" src="{{ asset('img/logo/logo-main.svg') }}" alt="brand-logo" width="218" height="86">
      
      <img  class="sidebar-brand-narrow" width="46" height="46" src="{{ asset('img/logo/logo-icon-only.svg') }}" alt="brand-logo" >

    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
      <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard')  }}">
          <svg class="nav-icon">
            <use xlink:href="{{ asset('resources/vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
          </svg> Dashboard</a></li>
      
      <li class="nav-title">Admin</li>
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="{{ asset('resources/vendors/@coreui/icons/svg/free.svg#cil-chat-bubble') }}"></use>
          </svg> Bookings & Contacts</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link" href="{{ route('admin.booking')  }}"><span class="nav-icon"></span> Bookings</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('admin.contacts')  }}"><span class="nav-icon"></span> Contacts</a></li>
        </ul>
      </li>
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="{{ asset('resources/vendors/@coreui/icons/svg/free.svg#cil-find-in-page') }}"></use>
          </svg> Components</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link" href="{{ route('admin.teams.index')  }}"><span class="nav-icon"></span> Teams</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('admin.testimonials.index')  }}"><span class="nav-icon"></span> Testimonials</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('admin.services.index')  }}"><span class="nav-icon"></span> Services</a></li>
        </ul>
      </li>
      
      
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="{{ asset('resources/vendors/@coreui/icons/svg/free.svg#cil-notes') }}"></use>
          </svg> Blogs</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link" href="{{ route('admin.posts.index')  }}"> Manage Posts</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('admin.posts.create')  }}"> Create Post</a></li>
          {{-- <li class="nav-item"><a class="nav-link" href="{{ route('admin.posts.index')  }}"> Drafts</a></li> --}}
        </ul>
      </li>
    
      <li class="nav-item"><a class="nav-link" href="{{ route('admin.coverage-areas.index')  }}">
          <svg class="nav-icon">
            <use xlink:href="{{ asset('resources/vendors/@coreui/icons/svg/free.svg#cil-map') }}"></use>
          </svg> Survey Coverage<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>

      <li class="nav-divider"></li>
      <li class="nav-title">System</li>
      <li class="nav-item"><a class="nav-link" href="{{ route('admin.users.index')  }}">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('resources/vendors/@coreui/icons/svg/free.svg#cil-group') }}"></use>
        </svg> Users</a></li>
      
      <li class="nav-item"><a class="nav-link nav-link-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
          <svg class="nav-icon">
            <use xlink:href="{{ asset('resources/vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
          </svg> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>
                    
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
  </div>