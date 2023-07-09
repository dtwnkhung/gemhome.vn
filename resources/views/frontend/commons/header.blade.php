<div class="mainmenu row justify-content-between w-100">    

    @isset($menus)       
        {{-- navigation nav-left --}}
        <div class="navigation nav-left col-auto">
            <div class="logo col-auto">
                @if ($logo_url)
                    <a href="/">            
                        <img src="{{ asset( 'storage/' . $logo_url ) }} " alt="logo"/>
                    </a>    
                @endif
                </div>
            <ul>
                @foreach ($menus as $menu)
                    @if ($menu->parent_id == '0')
                        <li>
                            <a href="{{ $menu->link }}">{{ $menu->title }}</a>
                            @if (count($menu->childs) > 0)
                                <ul>
                                    @foreach ($menu->childs as $child)
                                        <li>
                                            <a href="{{ $child->link }}">{!! $child->title !!}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li> 
                    @endif
                @endforeach
            </ul>
        </div><!-- navigation nav-left -->
        {{-- navbar-right --}}
        <div class="d-flex right-nav-header">
            @if (Route::has('login'))
            @auth
            <ul class="site-user-menu">
                <li>
                    <a href="{{ route('appuser.profile') }}" class="btn--profile" title="{{ Auth::user()->email }}" style="width: 40px">
                        <svg style="width: 24px" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 400 400"><defs><style>.cls-1{fill:#d8d8d8;}</style></defs><title>Avater-default</title><path class="cls-1" d="M188.28,0h23.44c5.28.63,10.57,1.17,15.83,1.91C267,7.47,301.85,23.23,331.7,49.59c35.16,31,57.14,69.67,65.23,116,1.31,7.51,2.06,15.12,3.07,22.69v23.44c-.61,5.13-1.12,10.28-1.83,15.39C392.58,267,376.69,302.19,350,332.26c-31,34.85-69.46,56.6-115.49,64.66-7.53,1.32-15.16,2.07-22.75,3.08H188.28c-5.28-.63-10.57-1.17-15.83-1.91C133,392.53,98.15,376.77,68.3,350.41c-35.16-31-57.14-69.67-65.23-116C1.76,226.9,1,219.29,0,211.72V188.28c.61-5.13,1.12-10.28,1.83-15.39C7.43,133,23.31,97.81,50,67.74,81,32.89,119.5,11.14,165.53,3.08,173.06,1.76,180.69,1,188.28,0ZM340.07,306.89c51.84-66.22,51.37-170.48-21.1-237.18C249.36,5.64,140.31,8.6,74.41,76,5.91,146.15,12.21,247.12,60,306.78q27.93-61.32,91.61-84.18c-41.22-31.71-42.74-86.36-14-119.42C167.49,68.82,218,64.4,252.19,93.09c17.35,14.55,27.59,33.19,29.38,55.8,2.4,30.24-9.29,54.64-33.12,73.75C291,238.06,321.46,266,340.07,306.89Zm-136.71,69.8c5.18-.46,13.78-.78,22.25-2.05,36.3-5.41,67.84-20.82,94.82-45.69,1.63-1.51,1.82-2.66,1.11-4.66-21.08-59.87-83.41-96.12-145.67-83.48-47.51,9.65-79.91,38-97.31,83.36-.73,1.91-.74,3.15,1,4.71C113.58,360.17,153.76,375.93,203.36,376.69Zm55.22-220.48A58.58,58.58,0,1,0,200,214.83,58.78,58.78,0,0,0,258.58,156.21Z"/></svg>
                    
                    </a>
                    <span class="d-none d-sm-inline-block">{{ __('app.Hi') }}:</span> <a href="{{ route('appuser.profile') }}">{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</a>
                </li>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-default" type="submit">{{ __('auth.Logout') }} </button>
                    </form>
                </li>
            </ul>            
            @else
                @if (Auth::guard('appuser')->check())
                <ul class="site-user-menu">
                    <li>
                        <a href="{{ route('appuser.profile') }}" class="btn--profile" title="{{ Auth::guard('appuser')->user()->email }}" style="width: 40px">
                            @if (Auth('appuser')->user()->image) 
                                <img src="{{  asset( Auth('appuser')->user()->image) }}" alt="avatar">
                            @else
                                 
                            <svg style="width: 24px" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 400 400"><defs><style>.cls-1{fill:#d8d8d8;}</style></defs><title>Avater-default</title><path class="cls-1" d="M188.28,0h23.44c5.28.63,10.57,1.17,15.83,1.91C267,7.47,301.85,23.23,331.7,49.59c35.16,31,57.14,69.67,65.23,116,1.31,7.51,2.06,15.12,3.07,22.69v23.44c-.61,5.13-1.12,10.28-1.83,15.39C392.58,267,376.69,302.19,350,332.26c-31,34.85-69.46,56.6-115.49,64.66-7.53,1.32-15.16,2.07-22.75,3.08H188.28c-5.28-.63-10.57-1.17-15.83-1.91C133,392.53,98.15,376.77,68.3,350.41c-35.16-31-57.14-69.67-65.23-116C1.76,226.9,1,219.29,0,211.72V188.28c.61-5.13,1.12-10.28,1.83-15.39C7.43,133,23.31,97.81,50,67.74,81,32.89,119.5,11.14,165.53,3.08,173.06,1.76,180.69,1,188.28,0ZM340.07,306.89c51.84-66.22,51.37-170.48-21.1-237.18C249.36,5.64,140.31,8.6,74.41,76,5.91,146.15,12.21,247.12,60,306.78q27.93-61.32,91.61-84.18c-41.22-31.71-42.74-86.36-14-119.42C167.49,68.82,218,64.4,252.19,93.09c17.35,14.55,27.59,33.19,29.38,55.8,2.4,30.24-9.29,54.64-33.12,73.75C291,238.06,321.46,266,340.07,306.89Zm-136.71,69.8c5.18-.46,13.78-.78,22.25-2.05,36.3-5.41,67.84-20.82,94.82-45.69,1.63-1.51,1.82-2.66,1.11-4.66-21.08-59.87-83.41-96.12-145.67-83.48-47.51,9.65-79.91,38-97.31,83.36-.73,1.91-.74,3.15,1,4.71C113.58,360.17,153.76,375.93,203.36,376.69Zm55.22-220.48A58.58,58.58,0,1,0,200,214.83,58.78,58.78,0,0,0,258.58,156.21Z"/></svg>
                        
                            @endif
                        </a>
                        <span class="d-none d-sm-inline-block">{{ __('app.Hi') }}:</span> <a href="{{ route('appuser.profile') }}">{{ isset(Auth::guard('appuser')->user()->name) ? Auth::guard('appuser')->user()->name : Auth::guard('appuser')->user()->email }}
                        </a>
                    </li>
                    <li>
                        <form id="logout-form" action="{{ route('appuser.logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-default" type="submit">{{ __('auth.Logout') }} </button>
                        </form>
                    </li>
                </ul>
                @else
                    <ul class="site-user-menu">
                        <li>
                        <a href="{{ route('appuser.loginform')}}" id="login-header" class="btn btn-login">{{ __('auth.Login') }}</a>
                        <a href="{{ route('appuser.register')}}" class="btn">{{ __('auth.Register') }}</a>
                        </li>
                    </ul>                    
                @endif
            @endauth
            @endif
        </div>
        {{-- end navbar-right --}}
    @endisset

</div>