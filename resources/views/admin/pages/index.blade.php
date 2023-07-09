@extends('admin.layouts.adminbase')

@section('content')

<div class="posts-table">
    <div class="row">
        <div class="col-sm-4">
        <h4 class="card-title mb-0">{{ isset($pageTitle) ? $pageTitle :  __('app.Page') }}</h4>
            <div class="small text-muted">{{ __('app.Total') }} ({{ isset($totalItems) ? $totalItems : '' }})</div>
        </div>
        <div class="col-sm-4 text-right">
        <form class="form-horizontal" action="{{ route('pages.index') }}" method="GET">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input class="form-control" id="search" type="text" name="search"
                                placeholder="{{ __('app.Page title') }}" autocomplete="title" value="{{ $search ? $search : ''}}">
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
            <form action="{{ route('pages.create') }}" method="GET">
                @csrf
                <button class="btn btn-sm btn-primary" type="submit">
                    <i class="fa fa-dot-circle-o"></i> {{ __('app.Add new :name', ['name' => __('app.page')]) }}</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12 table-responsive">            
            @if (isset($pages) && $pages->count() > 0)
                <table class="dataTable table table-responsive-sm table-hover table-outline mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center">
                                <i class="icon-people"></i>
                            </th>
                            <th>{{ __('app.Page name') }}</th>
                            <th>{{ __('app.Slug') }}</th>
                            <th>{{ __('app.Set homepage') }}</th>
                            <th>{{ __('app.Descriptions') }}</th>
                            <th class="text-center">{{ __('app.Created at') }}</th>
                            <th>Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $page)
                        <tr>
                            <td class="text-center">
                            {{ $page->id }}
                            </td>
                            <td>{{ $page->title }}</td>
                            <td>{{ $page->slug }}</td>
                            <td>
                                @if ($page->home == 1)
                                {{ __('app.Homepage') }}
                                @endif
                            </td>
                            
                            <td>{{ $page->description }}</td>
                            <td class="text-center">{{ $page->created_at }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="/{{ $page->slug }}" target="_blank">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                @if (!$page->trashed())
                                    <a class="btn btn-success btn-sm" href="{{ route('pages.edit', $page->slug) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                @endif
                                <form action="{{ route('pages.destroy', $page->slug) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">
                                        @if ($page->trashed())
                                            {{ __('app.Permanently delete') }} 
                                        @else 
                                            <i class="fa fa-trash-o"></i>
                                        @endif
                                    </button>
                                </form>
                                @if ($page->trashed())
                                    <form action="{{ route('pages.restore', $page->slug) }}" method="POST" style="display:inline-block">
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
                @if ($totalItems >= config('app.perpage') )
                    {{ $pages->links() }}
                @endif
            
            @else
                <div class="text-center">{{ __('app.NotFound') }}</div>
            @endif
        </div> <!-- /.col-12 -->
    </div> <!-- /.row -->
</div>
@endsection

@section('stylesheets')
    <style>
    .posts-table .dataTable th,
    .posts-table .dataTable td {
        max-width: 320px;
    }
    </style>
@endsection