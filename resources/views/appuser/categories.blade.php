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
                        <h2 class="user--profile-title-group">Khóa học của tôi</h2>
                    </div> 
                </div> <!-- header-group -->
                <div class="user--profile-right">
                    <div class="user--profile-group">
                        <!-- My Categories -->
                        @isset($user)
                                {{-- <div class="balance"><strong>{{ __('app.Balance') }}:</strong><span> @currency_format(isset($user) ? $user->balance : '0')</span></div> --}}
                                <br>
                                <table class="table">
                                    <thead>
                                        <th>No</th>
                                        <th>{{ __('app.Category') }}</th>
                                        <th>{{ __('app.End date') }}</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($user->permissions as $permission)
                                        <tr>
                                            <td></td>
                                            <td>
                                                @if(! is_null($user->get_category_permission($permission->model_name, $permission->model_id)))
                                                    {{ $user->get_category_permission($permission->model_name, $permission->model_id)->name }}
                                                @endif</td>
                                            <td>{{\Carbon\Carbon::parse($permission->end_date)->format('d/m/Y') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @endisset
                        <!-- End my Categories -->
                    </div>

                    <div class="user--profile-group">
                        <!-- packages -->
                        @isset($user)
                            @isset($packages)
                                {{-- Danh sách packages --}}
                                <table class="table">
                                    <thead>
                                        <th>No</th>
                                        <th>{{ __('app.Package name') }}</th>
                                        <th>{{ __('app.Duration') }}</th>
                                        <th>{{ __('app.Price') }}</th>
                                        <th class="text-right">{{ __('app.Actions') }}</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($packages as $pack)
                                        <tr>
                                            <td></td>
                                            <td>{{ $pack->name }}</td>
                                            <td>{{ $pack->duration }}</td>
                                            <td class="text-danger"><strong>@currency_format($pack->price)</strong></td>
                                            <td class="text-right" rowspan="1" style="vertical-align: middle;">
                                                @if ($user && $user->balance >= $pack->price)
                                                        {{-- <form
                                                        action="{{ route('appuser.upgrade', ['package_id'=>$pack->id])}}"
                                                        method="post"
                                                        >    
                                                            @csrf                   
                                                        </form>    --}}
                                                            <a
                                                            type="submit"
                                                            data-balance="{{ $user->balance }}"
                                                            data-price="{{ $pack->price}}" 
                                                            data-toggle="modal" data-target="#paymen_modal_pack_{{ $pack->id }}"
                                                            class="btn btn-spotify">{{ __('app.Upgrade')}}</a> 
                                                            @include('frontend.components.popup_confirm_purchase', ['pack'=>$pack])
                                                @else
                                                    <a
                                                        data-balance="{{ $user->balance }}"
                                                        data-price="{{ $pack->price}}"
                                                        href="#" disabled="true"
                                                        class="btn btn-dark">{{ __('app.Upgrade')}}</a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr style="display: none">
                                            <td></td>
                                            <td colspan="2">
                                                @isset($pack->examination_mode->name)
                                                    {{ $pack->examination_mode->name}}
                                                @endisset
                                            </td>
                                            <td colspan="2">
                                                @isset($pack->vocabulary_mode->name)
                                                    {{ $pack->vocabulary_mode->name}}
                                                @endisset
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endisset
                        @endisset
                        <!-- End packages -->
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="/css/auth.css" />
@endsection
