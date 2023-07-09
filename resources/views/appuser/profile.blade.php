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
                        <h2 class="user--profile-title-group">Thông tin tài khoản</h2>
                    </div>
                    <div class="col-auto">
                        <button data-edit class="btn btn-primary btn-sm">{{ __('app.Edit') }}</button>
                    </div>
                </div> <!-- header-group -->
                <div class="user--profile-right">
                    <div class="user--profile-group">
                        @include('appuser.components.profile')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="/css/auth.css" />
@endsection
