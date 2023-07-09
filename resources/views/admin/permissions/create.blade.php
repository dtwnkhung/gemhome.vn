@extends('admin.layouts.adminbase')

@section('content')
<div class="users-table">
    <div class="row">
        <div class="col-sm-4">
            <h4 class="card-title mb-0">{{ !isset($permission) ? __('app.Create new :name', ['name'=>__('app.role')]) : __('app.Edit :name', ['name'=>__('app.role')]) }}</h4>
            <div class="small text-muted">{{ __('app.Create new :name', ['name'=>__('app.permission')]) }}
            </div>
        </div>

        <div class="col-sm-8 text-right">
            <a class="btn btn-sm btn-primary" href="{{ route('permissions.index') }}">
                <i class="fa fa-dot-circle-o"></i> {{ __('app.Back') }}</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-horizontal" action="{{ isset($permission) ? route('permissions.update', $permission->id) : route('permissions.store') }}" method="POST">
                @csrf
                @if (isset($permission))
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
                                        placeholder="Permission name" autocomplete="permissionname"
                                        value="{{ isset($permission) ? $permission->name : '' }}">
                                </div>
                            </div>
                        </div>

                    <div class="card-footer">
                        <button class="btn btn-sm btn-success" type="submit">
                        <i class="fa fa-dot-circle-o"></i> {{ !isset($permission) ? __('app.Create') : __('app.Edit') }}</button>
                    </div>
                </div> <!-- /.card -->
            </form>
        </div> <!-- /.col-12 -->
    </div> <!-- /.row -->
</div>
@endsection
