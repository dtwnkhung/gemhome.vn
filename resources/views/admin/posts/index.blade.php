@extends('admin.layouts.adminbase')

@section('content')

<div class="posts-table">
    <div class="row">
        <div class="col-sm-4">
        <h4 class="card-title mb-0">{{ isset($pageTitle) ? $pageTitle :  __('app.Post') }}</h4>
            <div class="small text-muted">{{ __('app.Total') }} ({{ isset($totalPosts) ? $totalPosts : '' }})</div>
        </div>
        <div class="col-sm-4 text-right">
        <form class="form-horizontal" action="{{ route('posts.index') }}" method="GET">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input class="form-control" id="search" type="text" name="search"
                                placeholder="{{ __('app.Post name') }}" autocomplete="title" value="{{ $search ? $search : ''}}">
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
            <form action="{{ route('posts.create') }}" method="GET">
                @csrf
                <button class="btn btn-sm btn-primary" type="submit">
                    <i class="fa fa-dot-circle-o"></i> {{ __('app.Add new post') }}</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12 table-responsive">            
            @if (isset($posts) && $posts->count() > 0)
                <table class="dataTable table table-responsive-sm table-hover table-outline mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center">
                                <i class="icon-people"></i>
                            </th>
                            <th>{{ __('app.Post name') }}</th>
                            <th>{{ __('app.Slug') }}</th>
                            <th>{{ __('app.Image') }}</th>
                            <th>{{ __('app.Categories') }}</th>
                            <th>{{ __('app.Descriptions') }}</th>
                            <th class="text-center">{{ __('app.Created at') }}</th>
                            <th>Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td class="text-center">
                            {{ $post->id }}
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>
                                <img src="{{ asset('storage/' .$post->image) }}" alt="{{ $post->title }}" width="40px" height="30px">
                            </td>
                            <td>
                                @foreach ($post->categories as $item)
                                    <span>{{ $item->name }} @if ($loop->index + 1 < count($post->categories))
                                        , 
                                    @endif </span>
                                @endforeach
                            </td>
                            <td>{{ $post->description }}</td>
                            <td class="text-center">{{ $post->created_at }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ route('post.view', $post->slug) }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                @if (!$post->trashed())
                                    <a class="btn btn-success btn-sm" href="{{ route('posts.edit', $post->slug) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                @endif
                                <form action="{{ route('posts.destroy', $post->slug) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">
                                        @if ($post->trashed())
                                            {{ __('app.Permanently delete') }} 
                                        @else 
                                            <i class="fa fa-trash-o"></i>
                                        @endif
                                    </button>
                                </form>
                                @if ($post->trashed())
                                    <form action="{{ route('posts.restore', $post->slug) }}" method="POST" style="display:inline-block">
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
                @if ($totalPosts >= config('app.perpage') )
                    {{ $posts->links() }}
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