<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="{{ asset('vendors/@coreui/icons/css/coreui-icons.min.css') }}" rel="stylesheet">
      <link href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
      <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
      <link href="{{ asset('vendors/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
      <!-- CoreUI CSS -->
      <link rel="stylesheet" href="{{ asset('backend/assets/css/coreui.min.css') }}">
      <link href="{{ asset('backend/assets/css/examninations.css') }}" rel="stylesheet">
      <link href="{{ asset('backend/assets/css/vocabularies.css') }}" rel="stylesheet">
      @yield('stylesheets')
      <title>Dashboard</title>
      <style>
         .main {
         max-height: calc(100vh - 105px);
         }
         form .btn {
         white-space: nowrap;
         }
         .dataTable td,
         .dataTable th {
         white-space: nowrap;
         max-width: 220px;
         overflow: hidden;
         text-overflow: ellipsis;
         }
         #thumbImage img {
         max-width: 160px;
         max-height: 320px;
         }
         li.nav-item.nav-dropdown {
         background: #2f353a;
         border-bottom: 1px solid #373d42;
         }
         trix-editor {
         min-height: 320px;
         }
      </style>
   </head>
   <body class="app sidebar-show sidebar-fixed footer-fixed sidebar-lg-show">
      <header class="app-header navbar">
         <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
         <span class="navbar-toggler-icon"></span>
         </button>
         <a class="navbar-brand" href="#">
         <img class="navbar-brand-full" src="{{ asset('backend/assets/img/brand/logo.png') }}" width="89"
            height="25" alt="CoreUI Logo">
         <img class="navbar-brand-minimized" src="{{ asset('backend/assets/img/brand/sygnet.svg') }}" width="30"
            height="30" alt="CoreUI Logo">
         </a>
         <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
         <span class="navbar-toggler-icon"></span>
         </button>
         <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item px-3 dropdown">
               <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                  aria-expanded="false">Dashboard / {{ __('app.Create') }}<i class="fa fa-angle-down"></i></a>
               {{-- dropdown --}}
               <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg">
                  <div class="dropdown-header text-center">
                     <strong>Qick actions</strong>
                  </div>
                  <a class="dropdown-item" href="{{ route('posts.create') }}">
                  <i class="icon-note text-success"></i>
                  {{ __('app.Add new :name', ['name' => __('app.post')]) }}</a>
                  <a class="dropdown-item" href="#">
                  <i class="icon-layers text-success"></i>
                  {{ __('app.Add new :name', ['name' => __('app.page')]) }}</a>
                  <a class="dropdown-item text-center" href="{{ route('pages.create') }}">
                  <strong>View list post</strong>
                  </a>
               </div>
               {{-- end dropdown --}}
            </li>
         </ul>
         <ul class="nav navbar-nav ml-auto">
            <li><a href="/" target="_blank" class="btn btn-primary btn-sm mr-3">{{ __('app.View site') }}</a></li>
            <li class="nav-item dropdown">
               <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                  aria-expanded="false">
               {{ Auth::user()->name }}
               <img class="img-avatar" src="{{ asset('backend/assets/img/avatars/8.jpg') }}"
                  alt="{{ Auth::user()->email }}">
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="{{ route('users.edit', Auth::user()->id) }}"> 
                  <i class="fa fa-user"></i> Profile</a>
                  <form action="{{ route('logout') }}" method="POST">
                     @csrf
                     <button class="dropdown-item btn btn-default" type="submit"><i class="fa fa-lock"></i>
                     Logout</button>
                  </form>
               </div>
            </li>
         </ul>
      </header>
      <div class="app-body">
         <div class="sidebar">
            <!-- Sidebar content here -->
            <nav class="sidebar-nav">
               <ul class="nav">
                  {{-- Blog --}}
                  <li class="nav-item nav-dropdown">
                     <a class="nav-link nav-dropdown-toggle" href="#">
                     <i class="nav-icon icon-docs"></i> CMS
                     </a>
                     <ul class="nav-dropdown-items">
                        {{-- page --}}
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('pages.index') }}">
                           <i class="nav-icon icon-layers"></i> {{ __('app.Pages') }}
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('trashed-pages.index') }}">
                           <i class="nav-icon cui-trash"></i> {{ __('app.Trashed :name', ['name' => __('app.Page')]) }}
                           </a>
                        </li>
                        {{-- end page --}}
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('posts.index') }}">
                           <i class="nav-icon icon-docs"></i> {{ __('app.Posts') }}
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('categories.index') }}">
                           <i class="nav-icon icon-list"></i> {{ __('app.Categories') }}
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('tags.index') }}">
                           <i class="nav-icon cui-tags"></i> {{ __('app.Tags') }}
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('trashed-posts.index') }}">
                           <i class="nav-icon cui-trash"></i> {{ __('app.Trashed posts') }}
                           </a>
                        </li>
                     </ul>
                  </li>
                  {{-- end Blog --}}

                  {{-- Projects --}}
                  <li class="nav-item nav-dropdown">
                     <a class="nav-link nav-dropdown-toggle" href="#">
                     <i class="nav-icon icon-shield"></i> {{ __('app.Projects') }}
                     </a>
                     <ul class="nav-dropdown-items">
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('project-categories.index') }}">
                           <i class="nav-icon icon-list"></i> {{ __('app.Categories') }}
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('projects.index') }}">
                           <i class="nav-icon icon-list"></i> {{ __('app.Projects') }}
                           </a>
                        </li>
                     </ul>
                  </li>
                  {{-- Contact --}}
                  <li class="nav-item">
                           <a class="nav-link" href="{{ route('contact.index') }}">
                           <i class="nav-icon icon-list"></i> {{ __('app.Contact') }}
                           </a>
                        </li>
                  {{-- Partner --}}
                  <li class="nav-item nav-dropdown">
                     <a class="nav-link nav-dropdown-toggle" href="#">
                     <i class="nav-icon icon-shield"></i> {{ __('app.Partner') }}
                     </a>
                     <ul class="nav-dropdown-items">
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('partner.index') }}">
                           <i class="nav-icon icon-list"></i> {{ __('app.Partner') }}
                           </a>
                        </li>
                     </ul>
                  </li>
                  {{-- Testimonial --}}
                  <li class="nav-item nav-dropdown">
                     <a class="nav-link nav-dropdown-toggle" href="#">
                     <i class="nav-icon icon-shield"></i> {{ __('app.Testimonial') }}
                     </a>
                     <ul class="nav-dropdown-items">
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('testimonial.index') }}">
                           <i class="nav-icon icon-list"></i> {{ __('app.Testimonial') }}
                           </a>
                        </li>
                     </ul>
                  </li>
                  {{-- Slider --}}
                  <li class="nav-item nav-dropdown">
                     <a class="nav-link nav-dropdown-toggle" href="#">
                     <i class="nav-icon icon-shield"></i> {{ __('app.Slider') }}
                     </a>
                     <ul class="nav-dropdown-items">
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('slider.index') }}">
                           <i class="nav-icon icon-list"></i> {{ __('app.Slider') }}
                           </a>
                        </li>
                     </ul>
                  </li>
                  {{-- Medias Album --}}
                  <li class="nav-item nav-dropdown">
                     <a class="nav-link nav-dropdown-toggle" href="#">
                     <i class="nav-icon icon-shield"></i> {{ __('app.Library') }}
                     </a>
                     <ul class="nav-dropdown-items">
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('album.index') }}">
                           <i class="nav-icon icon-list"></i> {{ __('app.Album') }}
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('projects.index') }}">
                           <i class="nav-icon icon-list"></i> {{ __('app.Picture') }}
                           </a>
                        </li>
                     </ul>
                  </li>
                  {{-- Menu --}}
                  <li class="nav-item nav-dropdown">
                     <a class="nav-link nav-dropdown-toggle" href="{{ route('menus.index') }}">
                     <i class="nav-icon icon-shield"></i> Menu
                     </a>
                     <ul class="nav-dropdown-items">
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('menus.index') }}">
                           <i class="nav-icon icon-list"></i> {{ __('app.Menu') }}
                           </a>
                        </li>
                     </ul>
                  </li>
                  
                  {{-- User --}}
                  <li class="nav-item nav-dropdown">
                     <a class="nav-link nav-dropdown-toggle" href="#">
                     <i class="nav-icon icon-user-following"></i>  {{ __('app.Users_and_Roles') }}
                     </a>
                     <ul class="nav-dropdown-items">
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('users.index') }}">
                           <i class="nav-icon icon-people"></i> {{ __('app.Users') }}
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('roles.index') }}">
                           <i class="nav-icon icon-badge"></i> {{ __('app.Roles') }}
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('permissions.index') }}">
                           <i class="nav-icon icon-shield"></i> {{ __('app.Permissions') }}
                           </a>
                        </li>
                     </ul>
                  </li>
                  {{-- SITE OPTIONS --}}
                  <li class="nav-item nav-dropdown">
                     <a class="nav-link nav-dropdown-toggle" href="#">
                     <i class="nav-icon icon-settings"></i> Site options
                     </a>
                     <ul class="nav-dropdown-items">
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('site-options.index') }}">
                           <i class="nav-icon icon-settings"></i> {{ __('app.Setting') }}
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('sitemap.index') }}"
                              target="_blank">
                           <i class="nav-icon icon-docs"></i> {{ __('app.Create Sitemap') }}
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('clear_cache') }}" target="_blank">
                           <i class="nav-icon icon-docs"></i> {{ __('app.Clear cache') }}
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </nav>
         </div>
         <main class="main">
         <!-- Main content here -->
         <ol class="breadcrumb">
         {{-- Breadcrumb content here --}}
         <li class="breadcrumb-item">Home</li>
         <li class="breadcrumb-item">
         <a href="#">Dashboard</a>
         </li>
         <li class="breadcrumb-menu d-md-down-none">
         <div class="btn-group" role="group" aria-label="Button group">
         <a class="btn" href="#">
         <i class="icon-speech"></i>
         </a>
         <a class="btn" href="./">
         <i class="icon-graph"></i> &nbsp;Dashboard</a>
         <a class="btn" href="#">
         <i class="icon-settings"></i> &nbsp;Settings</a>
         </div>
         </li>
         </ol>
         <div class="container-fluid">
         <div class="animated fadeIn">
         <div class="main-view">
         @include('commons.sessionMessages')
         @include('commons.errors')
         <div class="card">
         <div class="card-body">
         @yield('content')
         </div>
         </div>
         </div>
         </div>
         </div>
         </main>
      </div>
      <footer class="app-footer">
      <!-- Footer content here -->
      <div>
      <a href="#">Admin</a>
      <span>&copy; 2019 {{ config('app.name') }}.</span>
      </div>
      <div class="ml-auto">
      <span>Powered by</span>
      <a href="#">{{ config('app.name') }}</a>
      </div>
      </footer>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, Bootstrap, then CoreUI  -->
      <script src="{{ asset('vendors/jquery/js/jquery.min.js') }}"></script>
      <script src="{{ asset('vendors/popper.js/js/popper.min.js') }}"></script>
      <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('backend/assets/js/coreui.min.js') }}"></script>
      @yield('scripts')
   </body>
</html>