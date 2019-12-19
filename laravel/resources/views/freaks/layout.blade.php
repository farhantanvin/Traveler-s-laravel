<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/freaks.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/blog.css">
    <link rel="stylesheet" type="text/css" href="/css/registration.css">
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
 <body class="app sidebar-mini">
    <header class="app-header"><a class="app-header__logo" href="{{ route('home.index') }}"><img src="/images/logo.png" alt="" height="50px" width="50px"></a>
      <a class="app-sidebar__toggle" href="" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <ul class="app-nav">
        <li class="dropdown"><a class="app-nav__item" href="" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href=""><i class="fa fa-sign-out fa-lg"></i>Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>

    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/images/freaks.png" alt="User Image" height="50px" width="50px" style=" border-radius: 50%;">
        <div>
          <p class="app-sidebar__user-name">Name</p>
          <p class="app-sidebar__user-designation">Freaks</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item {{ Route::is('freaks.index') ? 'active' : '' }}" href="{{ route('freaks.index') }}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Profile</span></a></li>

        <li><a class="app-menu__item {{ Route::is('freaks.edit_profile') ? 'active' : '' }}" href="{{ route('freaks.edit_profile') }}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Edit Profile</span></a></li>

        <li><a class="app-menu__item {{ Route::is('freaks.write_blog') ? 'active' : '' }}" href="{{ route('freaks.write_blog') }}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Write Blog</span></a></li>

        <li><a class="app-menu__item {{ Route::is('freaks.edit_blog') ? 'active' : '' }}" href="{{ route('freaks.edit_blog') }}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Edit Blog</span></a></li>

        <li><a class="app-menu__item {{ Route::is('freaks.delete_blog') ? 'active' : '' }}" href="{{ route('freaks.delete_blog') }}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Delete Blog</span></a></li>

        <li><a class="app-menu__item {{ Route::is('freaks.pin_post') ? 'active' : '' }}" href="{{ route('freaks.pin_post') }}"><i class="app-menu__icon fa fa-map-pin"></i><span class="app-menu__label">Pin Post</span></a></li>

        <li><a class="app-menu__item {{ Route::is('freaks.book_events') ? 'active' : '' }}" href="{{ route('freaks.book_events') }}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Book Events</span></a></li>

        <li><a class="app-menu__item {{ Route::is('freaks.history') ? 'active' : '' }}" href="{{ route('freaks.history') }}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">History</span></a></li>

        <li><a class="app-menu__item {{ Route::is('freaks.messages') ? 'active' : '' }}" href="{{ route('freaks.messages') }}"><i class="app-menu__icon fa fa-inbox"></i><span class="app-menu__label">Messages</span></a></li>

        <li><a class="app-menu__item {{ Route::is('freaks.notifications') ? 'active' : '' }}" href="{{ route('freaks.notifications') }}"><i class="app-menu__icon fa fa-bell"></i><span class="app-menu__label">Notifications</span></a></li>
      </ul>
    </aside>

    @yield('content')

    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/all.js"></script>
    <script src="/js/home.js"></script>
    <script src="/js/hoverdir.js"></script>  
  </body>
</html>