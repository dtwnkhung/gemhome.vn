@extends('layouts.base')

@section('content')
<div class="container">
    <div class="user--profile">
        <div class="row">
            <div class="col-md-3">
                <div class="user--profile-left">                    
                    @include('appuser.components.user_menu')
                </div>
            </div>
            <div class="col-md-9 user--profile-right-container">
                <div class="row header-group justify-content-between">
                    <div class="col-auto">
                        <h2 class="user--profile-title-group">{{ __('app.Payment method') }}</h2>
                    </div> 
                </div> <!-- header-group -->
                <div class="user--profile-right"> 
                    <!-- My Categories -->
                    @isset($user)                    
                    <div class="block block-rounded block-themed block-fx-pop">
                        <div class="block-header bg-gd-sea">
                            <h3 class="block-title">Nạp tiền Tự Động Techcombank</h3>
                        </div>
                        <div class="block-content">
                            <div class="kt-section mb-5">
                                <div class="kt-section__desc" style="display: block;">
                                    <div class="text-center">
                                        <img src="/images/techcombank_logo.png" width="300">
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-6 text-right">Tên tài khoản:</div>
                                        <div class="col-6 text-primary-dark">
                                            CAO DUY NHAT                                            </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-6 text-right">Số tài khoản:</div>
                                        <div class="col-6 text-primary-dark">19036244115018 <a href="javascript:;" class="btn-copy js-tooltip-enabled" data-toggle="tooltip" data-placement="top" title="" data-clipboard-text="19034027905016" data-original-title="Copy"><i class="fa fa-copy"></i></a>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-6 text-right">Ngân hàng:</div>
                                        <div class="col-6 text-primary-dark">
                                            TechComBank                                            </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-6 text-right">Nội dung bắt buộc:</div>
                                        <div class="col-6 text-primary-dark font-weight-bold">
                                            <span class="text-danger text-uppercase" style="border: 2px dashed #e04f1a30; padding: 3px; color: #e53e3e!important;">toeicmax{{ $user->id }}</span> 
                                            <a href="javascript:;" class="btn-copy js-tooltip-enabled" data-toggle="tooltip" data-placement="top" title="" data-clipboard-text="viaxmdt551" data-original-title="Copy"><i class="fa fa-copy"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-warning text-danger font-size-lg">- NẠP TỰ ĐỘNG CỘNG TIỀN SAU ÍT PHÚT</div>
                                <div class="alert alert-warning">- Vui lòng chuyển khoản đúng cú pháp để được bot cộng tiền tự động. Trường hợp chuyển khoản sai cú pháp Liên hệ ADMIN hỗ trợ: <a target="_blank" rel="noopener noreferrer" href="/contact-us">LIÊN HỆ</a>
                                </div>
                                <div class="text-center">
                                    <img src="/images/icons/loading-lg.gif" height="120px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endisset
                    <!-- End my Categories -->                    
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="/css/auth.css" />
@endsection
