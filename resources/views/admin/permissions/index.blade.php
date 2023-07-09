@extends('admin.layouts.adminbase')

@section('content')

<div class="users-table">
    <div class="row">
        <div class="col-sm-4">
        <h4 class="card-title mb-0">{{ __('app.Permission') }}</h4>
            <div class="small text-muted">{{ __('app.Total') }} ({{ isset($totalPermissions) ? $totalPermissions : '' }})</div>
        </div>
        <div class="col-sm-4 text-right">
        <form class="form-horizontal" action="{{ route('permissions.index') }}" method="GET">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input class="form-control" id="search" type="text" name="search"
                                placeholder="{{ __('app.Role name') }}" autocomplete="username" value="{{ $search ? $search : ''}}">
                            <span class="input-group-append">
                                <button class="btn btn-primary btn-sm" type="submit">
                                <i class="fa fa-search"></i> {{ __('app.Search') }}</button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-4 text-right">
            <form action="{{ route('permissions.create') }}" method="GET">
                @csrf
                <button class="btn btn-sm btn-primary" type="submit">
                    <i class="fa fa-dot-circle-o"></i> {{ __('app.Add new :name', ['name' => __('app.permission')]) }}</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">            
            @if (isset($permissions) && $permissions->count() > 0)
                <table class="dataTable table table-responsive-sm table-hover table-outline mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center">
                                <i class="icon-people"></i>
                            </th>
                            <th>{{ __('app.Id') }}</th>
                            <th>{{ __('app.Permission') }}</th>
                            <th class="text-center">{{ __('app.Created at') }}</th>
                            <th>Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                            <td class="text-center">
                                <i class="icon-people"></i>
                            </td>
                            <td>{{ $permission->id }}</td>
                            <td>{{  $permission->name }}</td>
                            <td class="text-center">{{ $permission->created_at }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ route('permissions.edit', $permission->id) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                {{ $permissions->links() }}
            
            @else
                <div class="text-center">{{ __('app.NotFound') }}</div>
            @endif
        </div> <!-- /.col-12 -->
    </div> <!-- /.row -->
</div>
@endsection
