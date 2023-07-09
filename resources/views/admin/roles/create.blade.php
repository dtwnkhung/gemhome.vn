@extends('admin.layouts.adminbase')

@section('content')
<div class="users-table">
    <div class="row">
        <div class="col-sm-4">
            <h4 class="card-title mb-0">{{ !isset($role) ? __('app.Create new :name', ['name'=>__('app.role')]) : __('app.Edit :name', ['name'=>__('app.role')]) }}</h4>
            <div class="small text-muted">{{ __('app.Create new :name', ['name'=>__('app.role')]) }}
            </div>
        </div>

        <div class="col-sm-8 text-right">
            <a class="btn btn-sm btn-primary" href="{{ route('roles.index') }}">
                <i class="fa fa-dot-circle-o"></i> {{ __('app.Back') }}</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-horizontal" action="{{ isset($role) ? route('roles.update', $role->id) : route('roles.store') }}" method="POST">
                @csrf
                @if (isset($role))
                    @method('PUT')
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon-badge"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" id="name" type="text" name="name"
                                        placeholder="Role name" autocomplete="rolename"
                                        value="{{ isset($role) ? $role->name : '' }}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                                <label for="permissions">{{ __('app.Permissions') }}</label>
                                <select name="permissions[]" id="permissions" class="form-control  permissions-selector" multiple>
                                    @if (isset($permissions))
                                        @foreach ($permissions as $permission)
                                            <option value="{{ $permission->id }}"
                                                @if (isset($role))                                    
                                                    @if($role->hasPermissionTo($permission->name))
                                                        selected
                                                    @endif
                                                @endif
                                            >
                                                {{ $permission->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                    <div class="card-footer">
                        <button class="btn btn-sm btn-success" type="submit">
                        <i class="fa fa-dot-circle-o"></i> {{ !isset($role) ? __('app.Create') : __('app.Edit') }}</button>
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
            $('.permissions-selector').select2(); 
        });
    </script>
@endsection