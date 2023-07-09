@php
    $usermenu = [
        ['title'=>'Thông tin', 'url'=> route('appuser.profile'), 'icon'=>'information.svg'],
        ['title'=>'Thay đổi mật khẩu', 'url'=> route('appuser.changepasswordform'), 'icon'=>'key.svg'],
        ['title'=>'Khóa học của tôi', 'url'=> route('appuser.categories'), 'icon'=>'open-book.svg'],
        ['title'=>'Bảng giá', 'url'=> route('post.packages'), 'icon'=>'price-tag.svg'],
        ['title'=>'Nạp tiền ngay', 'url'=> route('appuser.payment-method'), 'icon'=>'wallet.svg'],
        ['title'=>__('app.Logs purcharse'), 'url'=> route('appuser.logs'), 'icon'=>'log-format.svg'],
        ['title'=>__('auth.Logout'), 'url'=> route('appuser.logout'), 'class_list' => 'text-center', 'class_a' => 'btn btn-primary', 'icon'=>'logout-white.svg'],
    ]    
@endphp
<div class="user-info">
    @php
        // echo json_encode( auth('appuser')->user() );
    @endphp
    <div class="user-info-header">
        <div class="d-flex align-items-center">
            <div class="col-sm-5">                
                <div class="user-avatar">
                    @if ( auth('appuser')->user()->image )
                        <img src="{{ auth('appuser')->user()->image }}" alt="{{ auth('appuser')->user()->name }}">
                    @else
                        <img src="/images/avarta.svg">
                    @endif                    
                </div>
            </div>
            <div class="col-sm-7">  
                <div class="row">    
                    <div class="label-content w-100">{{ __('app.Account') }}: &nbsp;</div>
                    <div class="user-title text-capitalize">{{ auth('appuser')->user()->name }}</div>
                    <div class="user-email text-bold small text-break">{{ auth('appuser')->user()->email }}</div> 
                </div>          
            </div>
        </div> 
    </div> 
</div> <!-- /. user-info -->
<div class="user-dark-list-attr d-flex text-center justify-content-center">
        <div class="label-attr"><i class="biz-icon icon-small icon-wallet"><img src="/images/icons/wallet-white.svg" alt="wallet"></i> {{ __('app.Balance') }}: &nbsp;</div>
        <div class="user-email text-break text-bold">@currency_format(auth('appuser')->user()->balance)</div>
</div>
<ul class="user--profile--list-function">
    @foreach ($usermenu  as $menu)
        @php
            $classLi = isset($menu['class_list']) ?  $menu['class_list'] : '';
            $classA = isset($menu['class_a']) ?  $menu['class_a'] : '';
        @endphp
        <li class="{{ $classLi }} @if(Request::url() === $menu['url']) active @endif">
            <a class="{{ $classA }}" href="{{ $menu['url'] }}">
                @if ($menu['icon'])                    
                    <i class="biz-icon icon-small icon-document"><img src="/images/icons/{{ $menu['icon'] }}" alt="icon-document"></i>
                @endif
                {{ $menu['title'] }}
            </a>
        </li>
    @endforeach
</ul>