@extends('admin.layouts.adminbase')

@section('content')

<div class="users-table">
    <div class="row">
        <div class="col-sm-4">
        <h4 class="card-title mb-0">{{ __('app.Role') }}</h4>
            <div class="small text-muted">{{ __('app.Total') }} ({{ isset($totalRoles) ? $totalRoles : '' }})</div>
        </div>
        <div class="col-sm-4 text-right">
        <form class="form-horizontal" action="{{ route('roles.index') }}" method="GET">
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
            <form action="{{ route('roles.create') }}" method="GET">
                @csrf
                <button class="btn btn-sm btn-primary" type="submit">
                    <i class="fa fa-dot-circle-o"></i> {{ __('app.Add new role') }}</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">            
            @if (isset($roles) && $roles->count() > 0)
                <table class="dataTable table table-responsive-sm table-hover table-outline mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center">
                                <i class="icon-people"></i>
                            </th>
                            <th>{{ __('app.Role') }}</th>
                            <th>{{ __('app.Permissions') }}</th>
                            <th class="text-center">{{ __('app.Created at') }}</th>
                            <th>Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <td class="text-center">
                                <i class="icon-people"></i>
                            </td>
                            <td>{{ $role->name }}</td>
                            <td>{{ implode( ', ', $role->permissions()->pluck('name')->toArray()) }}</td>
                            <td class="text-center">{{ $role->created_at }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ route('roles.edit', $role->id) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline-block">
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
                {{ $roles->links() }}
            
            @else
                <div class="text-center">{{ __('app.NotFound') }}</div>
            @endif
        </div> <!-- /.col-12 -->
    </div> <!-- /.row -->
</div>
@endsection
