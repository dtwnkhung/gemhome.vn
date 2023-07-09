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
                    {{-- <div class="col-auto">
                        <h2 class="user--profile-title-group">{{ __('app.Logs') }}</h2>
                    </div>  --}}
                </div> <!-- header-group -->
                <div class="user--profile-right">
                    <div class="user--profile-group">
                        {{-- Danh sách logs --}}
                        <h2 class="text-center">{{ __('app.Logs purcharse') }}</h2>
                        @isset($logs)

                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>{{ __('app.Package name') }}</th>
                                    <th>{{ __('app.Duration') }}</th>
                                    <th>{{ __('app.Price') }}</th>
                                    <th class="text-right">{{ __('app.Actions') }}</th>
                                </thead>
                                <tbody>
                                    @foreach ($logs as $log)
                                    <tr>
                                        <td></td>
                                        <td>{{ $log->package->name}} <small>(id_{{ $log->package_id }})</small></td>
                                        <td>{{ $log->package_duration }}</td>
                                        <td><strong>@currency_format($log->package_price)</strong></td>
                                        <td class="date">{{ \Carbon\Carbon::parse($log->updated_at)->format('l j F Y H:i:s') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        @endisset
                        {{-- end Danh sách logs --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="/css/auth.css" />
@endsection
