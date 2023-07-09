@extends('admin.layouts.adminbase')

@section('content')

<div class="users-table">
    <div class="row">
        <div class="col-sm-4">
        <h4 class="card-title mb-0">{{ __('app.'. $controller_label .'') }}</h4>
            <div class="small text-muted">{{ __('app.Total') }} ({{ isset($totalCategories) ? $totalCategories : '' }})</div>
        </div>
        <div class="col-sm-4 text-right">
        <form class="form-horizontal" action="{{ route($controller_router . '.index') }}" method="GET">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input class="form-control" id="search" type="text" name="search"
                                placeholder="{{ __('app.:name name', ['name' => __('app.'. $controller_label .'')]) }}" autocomplete="username" value="{{ $search ? $search : ''}}">
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
            <form action="{{ route($controller_router . '.create') }}" method="GET">
                @csrf
                <button class="btn btn-sm btn-primary" type="submit">
                    <i class="fa fa-dot-circle-o"></i> {{ __('app.Add new :name', ['name' => __('app.' . $controller_label)]) }}</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">            
            @if (isset($categories) && $categories->count() > 0)
                <table class="dataTable table table-responsive-sm table-hover table-outline mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center">
                                <i class="icon-people"></i>
                            </th>
                            <th>{{ __('app.'. $controller_label .'') }}</th>
                            <th>{{ __('app.Slug') }}</th>
                            <th>{{ __('app.Image') }}</th>
                            <th>{{ __('app.Descriptions') }}</th>
                            <th>{{ __('app.Order') }}</th>
                            <th class="text-center">{{ __('app.Created at') }}</th>
                            <th>Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td class="text-center">
                                {{ $category->id }}
                            </td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                @if(!is_null($category->image))
                                    <img src="{{ asset('storage/' . $category->image) }}" width="40"/>
                                @endif
                            </td>
                            <td>{{ $category->description }}</td>
                            <td>{{ $category->order }}</td>
                            <td class="text-center">{{ $category->created_at }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ route($controller_router . '.edit', $category->slug) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route($controller_router . '.destroy', $category->slug) }}" method="POST" style="display:inline-block">
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
                @if (!is_null($categories))
                    {{ $categories->links() }}
                @endif
            
            @else
                <div class="text-center">{{ __('app.NotFound') }}</div>
            @endif
        </div> <!-- /.col-12 -->
    </div> <!-- /.row -->
</div>
@endsection
