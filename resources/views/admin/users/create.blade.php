@extends('admin.layouts.adminbase')

@section('content')
<div class="users-table">
    <div class="row">
        <div class="col-sm-4">
            <h4 class="card-title mb-0">{{ !isset($user) ? __('app.Create_user') : __('app.Edit user') }}</h4>
            <div class="small text-muted">{{ __('app.Create_a_new_user') }} {{ isset($totalUsers) && $totalUsers }}
            </div>
        </div>

        <div class="col-sm-8 text-right">
            <a class="btn btn-sm btn-primary" href="{{ route('users.index') }}">
                <i class="fa fa-dot-circle-o"></i> {{ __('app.Back') }}</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-horizontal" action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" method="POST">
                @csrf
                @if (isset($user))
                    @method('PUT')
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" id="name" type="text" name="name"
                                        placeholder="Username" autocomplete="username"
                                        value="{{ isset($user) ? $user->name : '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" id="email" type="email" name="email"
                                        placeholder="Email" autocomplete="email"
                                        value="{{ isset($user) ? $user->email : '' }}" @if (isset($user)) disabled @endif>
                                </div>
                            </div>
                        </div>
 
                        
                        <div class="form-group">
                            <label for="roles">{{ __('app.Roles') }}</label>
                            <select name="roles[]" id="roles" class="form-control  roles-selector" multiple>
                                @foreach ($roles as $role)
                                    <option value="{{ $role }}"
                                        @if (isset($user))                                    
                                            @if($user->hasRole($role))
                                                selected
                                            @endif
                                        @endif
                                    >
                                        {{ $role }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-key"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" id="password" type="password" name="password"
                                        placeholder="password" autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-key"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" id="confirm" type="password" name="password_confirmation"
                                        placeholder="Confirm password" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-sm btn-success" type="submit">
                        <i class="fa fa-dot-circle-o"></i> {{ !isset($user) ? __('app.Create') : __('app.Edit') }}</button>
                    </div>
                </div> <!-- /.card -->
            </form>
        </div> <!-- /.col-12 -->
    </div> <!-- /.row -->
</div>
@endsection

@section('stylesheets')
    <link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('vendors/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {  
            $('.roles-selector').select2(); 
        });
    </script>
@endsection