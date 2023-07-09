@extends('layouts.base')

@section('content')
<div class="container">
    <div class="user--profile">
        <div class="row">
          @php
              $class_login = '';
          @endphp
          @if (auth('appuser')->check())
          @php
              $class_login = 'logined';
          @endphp
            <div class="col-md-3">
                <div class="user--profile-left">                    
                    @include('appuser.components.user_menu')
                </div>
            </div>              
          @endif
            <div class="col _user--profile-right-container {{ $class_login }}">
                <div class="row header-group justify-content-between">
                    <div class="col-12 text-center">
                        <h2 class="page-title">{{ __('app.Pricing table') }}</h2>
                    </div> 
                </div> <!-- header-group -->
                <div class="user--profile-right">
                    <div class="_user--profile-group">
                        <!-- Packages -->
                        <div class="koolui-pribel-plas17">
                            <div class="row"> 

                              @php
                                  $package_icons = array(
                                    '0' => 'info.svg', 
                                    '1' => 'focus.svg',
                                    '2' => 'stopwatch.svg'
                                  );
                              @endphp
 
                              @foreach ($packages as $pack)
                              @php
                                  $index = $loop->index + 2; 
                                  $pack_icon = $package_icons[$loop->index];
                              @endphp
                              <div class="col-lg-4 col-md-6">
                                <div class="item item--0{{$index}}">
                                  <div class="item__heading">
                                    <h3 class="text-uppercase">{{ $pack->name}}</h3>
                                  </div><!-- /.item-heading -->
                                  {{-- <div class="item__media">
                                    <img src="/images/icons/{{ $pack_icon }}" alt="Image">
                                  </div>
                                  <!-- /.item-media --> --}}
                                  <div class="item__content">
                                    {{-- <ul>
                                      <li>24/7 support<strong>Yes</strong></li>
                                      <li>Real-time monitor<strong>Yes</strong></li>
                                      <li>Daily update<strong>No</strong></li>
                                    </ul> --}}
                                    <div>
                                      {!! $pack->description !!}
                                    </div>
                                    <br>
                                    <div class="item__pricing">
                                      <p>{{ number_format($pack->price) }}đ <br><span><small>{{ $pack->duration }} {{ __('app.day') }}</small></span></p>
                                    </div><!--  /.pricing-->
                                    
                                    @php
                                        $user = isset($user) ? $user : auth('appuser')->user();
                                    @endphp
                                    @if ($user && $user->balance >= $pack->price)
                                            <form
                                            action="{{ route('appuser.upgrade', ['package_id'=>$pack->id])}}"
                                            method="post"
                                            >    
                                                @csrf  
                                                <a
                                                data-toggle="modal" data-target="#paymen_modal_pack_{{ $pack->id }}"
                                                type="submit" 
                                                class="btn btn-primary btn-block">
                                                  {{ __('app.Purchase') }}
                                                </a>                   
                                                {{-- <button
                                                type="submit"
                                                data-balance="{{ $user->balance }}"
                                                data-price="{{ $pack->price}}"
                                                href="#{{ route('appuser.upgrade', ['package_id'=>$pack->id])}}"
                                                class="btn btn-spotify">{{ __('app.Upgrade')}}</button>  --}}
                                            </form> 
                                            @include('frontend.components.popup_confirm_purchase', ['pack'=>$pack])
                                    @else
                                        <a
                                                data-toggle="modal" data-target="#paymen_modal"
                                                type="submit" 
                                                class="btn btn-primary btn-block">
                                                  {{ __('app.Purchase') }}
                                                </a>   
                                            @include('frontend.components.popup_not_enough_balance')         
                                        {{-- <form
                                            action="{{ route('appuser.upgrade', ['package_id'=>$pack->id])}}"
                                            method="post"
                                            >    
                                                @csrf 
                                                <button type="submit" href="#{{ route('appuser.upgrade', ['package_id'=>$pack->id])}}"
                                                class="btn btn-primary btn-block">{{ __('app.Purchase')}}</button>
                                        </form>  --}}
                                    @endif
                                  </div><!-- /.item-content -->
                                </div><!-- /table-item -->
                              </div><!-- /.col -->
                                  
                              @endforeach
                              {{--
                                            
                              <div class="col-lg-4 col-md-6">
                                <div class="item item--02">
                                  <div class="item__heading">
                                    <h3 class="text-uppercase">Basic</h3>
                                  </div><!-- /.item-heading -->
                                  <div class="item__media">
                                    <img src="/images/icons/info.svg" alt="Image">
                                  </div><!-- /.item-media -->
                                  <div class="item__content">
                                    <ul>
                                      <li>24/7 support<strong>Yes</strong></li>
                                      <li>Real-time monitor<strong>Yes</strong></li>
                                      <li>Daily update<strong>No</strong></li>
                                    </ul>
                                    <div class="item__pricing">
                                      <p>$29<span>/mo</span></p>
                                    </div><!--  /.pricing-->
                                    <button class="btn btn-primary btn-block">Purchase</button>
                                  </div><!-- /.item-content -->
                                </div><!-- /table-item -->
                              </div><!-- /.col -->
                      
                              <div class="col-lg-4 col-md-6">
                                <div class="item item--03">
                                  <div class="item__heading">
                                    <h3 class="text-uppercase">Medium</h3>
                                  </div><!-- /.item-heading -->
                                  <div class="item__media">
                                    <img src="/images/icons/focus.svg" alt="Image">
                                  </div><!-- /.item-media -->
                                  <div class="item__content">
                                    <ul>
                                      <li>24/7 support<strong>Yes</strong></li>
                                      <li>Real-time monitor<strong>Yes</strong></li>
                                      <li>Daily update<strong>No</strong></li>
                                    </ul>
                                    <div class="item__pricing">
                                      <p>$39<span>/mo</span></p>
                                    </div><!--  /.pricing-->
                                    <button class="btn btn-primary btn-block">Purchase</button>
                                  </div><!-- /.item-content -->
                                </div><!-- /table-item -->
                              </div><!-- /.col -->
                      
                              <div class="col-lg-4 col-md-6">
                                <div class="item item--04">
                                  <div class="item__heading">
                                    <h3 class="text-uppercase">Company</h3>
                                  </div><!-- /.item-heading -->
                                  <div class="item__media">
                                    <img src="/images/icons/stopwatch.svg" alt="Image">
                                  </div><!-- /.item-media -->
                                  <div class="item__content">
                                    <ul>
                                      <li>24/7 support<strong>Yes</strong></li>
                                      <li>Real-time monitor<strong>Yes</strong></li>
                                      <li>Daily update<strong>No</strong></li>
                                    </ul>
                                    <div class="item__pricing">
                                      <p>$49<span>/mo</span></p>
                                    </div><!--  /.pricing-->
                                    <button class="btn btn-primary btn-block">Purchase</button>
                                  </div><!-- /.item-content -->
                                </div><!-- /table-item -->
                              </div><!-- /.col -->
                              --}}
                      
                            </div><!-- /.row -->
                          </div>
                        <!-- end Packages -->

                        <!-- Packages description -->
                        <table class="pack-responstable">
                          <tr>
                            <th colspan="2">Tính năng của tài khoản PRO</th> 
                          
                          </tr>
  
                          <tr>
                            <th>Phần Luyện Thi ( Đề thi Toeic , Ngữ Pháp )</th>
                            <th> Phần Học Từ Vựng </th>
                          
                          </tr>
                          
                          <tr>
                            <td>20 Đề Thi Toeic Có Giải Chi Tiết</td>
                            <td>5000 từ vựng chia theo các chủ đề nhỏ</td>
                          </tr>
                          
                          <tr>
                            <td>100 Đề Thi Part 1,2,3,4,5,6,7 có Giải chi tiết</td>
                            <td>Học từ vựng qua Flatcash</td>
                          </tr>
                          
                          <tr>
                            <td>Đề Thi Rút Gọn (20-60 câu/1 đề) có giải chi tiết update hàng tuần</td>
                            <td>Học từ vựng qua việc kiểm tra trắc nghiệm</td>
                          </tr>
                          
                          <tr>
                            <td>200 Đề thi kiến thức Ngữ Pháp từng phần bổ trợ cho việc luyện thi Toeic có giải chi tiết</td>
                            <td>Học từ vựng qua Nghe - Phát âm - Viết</td>
                          </tr>
                          
                        </table>
                        <!-- End Packages description -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="/css/auth.css" />
<link rel="stylesheet" href="/css/pricing-table.css">
@endsection
