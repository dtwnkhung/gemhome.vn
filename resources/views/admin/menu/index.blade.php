@extends('admin.layouts.adminbase')

@section('content')
<div class="users-table">
    <div class="row">
        <div class="col-sm-4">
        <h4 class="card-title mb-0">{{ __('app.Menu') }}</h4>
            <div class="small text-muted">{{ __('app.Total') }} ({{ isset($totalItems) ? $totalItems : '' }})</div>
        </div>
        <div class="col-sm-4 text-right">
        <form class="form-horizontal" action="{{ route('menus.index') }}" method="GET">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input class="form-control" id="search" type="text" name="search"
                                placeholder="{{ __('app.Menu title') }}" autocomplete="title" value="{{ $search ? $search : ''}}">
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
            <form action="{{ route('menus.create') }}" method="GET">
                @csrf
                <button class="btn btn-sm btn-primary" type="submit">
                    <i class="fa fa-dot-circle-o"></i> {{ __('app.Add new :name', ['name'=> __('app.menu')]) }}</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">            
            @if (isset($items) && $items->count() > 0)
                <table class="dataTable table table-responsive-sm table-hover table-outline mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center">
                                <i class="icon-people"></i>
                            </th>
                            <th>{{ __('app.Menu title') }}</th>
                            <th>{{ __('app.Link') }}</th>
                            <th>{{ __('app.Parent menu') }}</th>
                            <th>{{ __('app.Order') }}</th>
                            <th class="text-center">{{ __('app.Created at') }}</th>
                            <th>Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $category)
                        <tr>
                            <td class="text-center">
                                <i class="icon-people"></i>
                            </td>
                            <td class="menu_id_{{ $category->id }}">{{ $category->title }}</td>
                            <td>{{ $category->link }}</td>
                            <td>{{ (isset($category->parent))? $category->parent->title : __('app.No parent') }}</td>
                            <td>{{ $category->order }}</td>
                            <td class="text-center">{{ $category->created_at }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ route('menus.edit', $category->id) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('menus.destroy', $category->id) }}" method="POST" style="display:inline-block">
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
                @if (!is_null($items))
                    {{ $items->links() }}
                @endif
            
            @else
                <div class="text-center">{{ __('app.NotFound') }}</div>
            @endif
        </div> <!-- /.col-12 -->
    </div> <!-- /.row -->
</div>
@endsection
