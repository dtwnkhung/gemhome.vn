@extends('admin.layouts.adminbase')

@section('content')
 
<div class="users-table">
    <div class="row">
        <div class="col-sm-4">
            @isset($pageTitle)
                <h4 class="card-title mb-0">{{ $pageTitle }}</h4>               
            @else                
                <h4 class="card-title mb-0">{{ __('app.User') }}</h4>   
            @endisset
            <div class="small text-muted">{{ __('app.Total') }} ({{ isset($totalUsers) ? $totalUsers : '' }})</div>
        </div>
        <div class="col-sm-4 text-right">
        <form class="form-horizontal" action="{{ route('hoc-vien.index') }}" method="GET">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input class="form-control" id="search" type="text" name="search"
                                placeholder="{{ __('app.Username') }}" autocomplete="username" value="{{ $search ? $search : ''}}">
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
            <form action="{{ route('hoc-vien.create') }}" method="GET">
                @csrf
                <button class="btn btn-sm btn-primary" type="submit">
                    <i class="fa fa-dot-circle-o"></i> {{ __('app.Add_new_user') }}</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">            
            @if (isset($users) && $users->count() > 0)
                <table class="dataTable table table-responsive-sm table-hover table-outline mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center">
                                <i class="icon-people"></i>
                            </th>
                            <th>{{ __('app.User') }}</th>
                            <th class="text-center">Email</th>
                            <th>{{ __('app.Purchased :name', ['name'=> __('app.Packages')]) }}</th>
                            <th class="text-right">{{ __('app.Balance') }}</th>
                            <th class="text-center">{{ __('app.Created at') }}</th>
                            <th>Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="text-center">
                                <i class="icon-people"></i>
                            </td>
                            <td>{{ $user->name }}</td>
                            <td class="text-center">{{ $user->email }}</td>
                            <td>{{ implode(', ', $user->packages->pluck('name')->toArray() ) }}</td>
                            <td class="text-right">@currency_format($user->balance)</td>
                            <td class="text-center">{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                            <td>
                                @if (!$user->trashed())
                                    <a class="btn btn-success btn-sm" href="{{ route('hoc-vien.edit', $user->id) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                @endif
                                <form action="{{ route('hoc-vien.destroy', $user->id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">
                                        @if ($user->trashed())
                                            {{ __('app.Permanently delete') }} 
                                        @else 
                                            <i class="fa fa-trash-o"></i>
                                        @endif
                                    </button>
                                </form>
                                @if ($user->trashed())
                                    <form action="{{ route('hoc-vien.restore', $user->id) }}" method="POST" style="display:inline-block">
                                        @csrf
                                        <button class="btn btn-success btn-sm" type="submit"> 
                                            {{ __('app.Restore') }}
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                {{ $users->links() }}
            
            @else
                <div class="text-center">{{ __('app.NotFound') }}</div>
            @endif
        </div> <!-- /.col-12 -->
    </div> <!-- /.row -->
</div>
@endsection
