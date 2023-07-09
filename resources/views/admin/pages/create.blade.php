@extends('admin.layouts.adminbase')

@section('content')
<div class="pages-table">
    <div class="row">
        <div class="col-sm-4">
            <h4 class="card-title mb-0">{{ !isset($page) ? __('app.Create :name', ['name'=>__('app.page')]) : __('app.Edit :name', ['name'=>__('app.page')]) }}</h4>
            <div class="small text-muted">
                {{ isset($page) ? __('app.Edit :name', ['name'=>__('app.page')]).': ' . $page->title : '' }}
            </div>
        </div>

        <div class="col-sm-8 text-right">  
            <a class="btn btn-sm btn-primary" href="{{ route('pages.index') }}">
                <i class="fa fa-dot-circle-o"></i> {{ __('app.Back') }}</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-horizontal"
                action="{{ isset($page) ? route('pages.update', $page->slug) : route('pages.store') }}"
                method="POST"
                enctype="multipart/form-data">
                @csrf
                @if (isset($page))
                    @method('PUT')
                @endif
                <div class="row">
                    <div class="col-12 col-xl-9">
                            <div class="card">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-list"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" id="name" type="text" name="name"
                                                        placeholder="{{ __('app.Page name') }}" autocomplete="title"
                                                        value="{{ isset($page) ? $page->title : '' }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input"
                                                            @if (isset($page) && $page->home == '1') checked @endif
                                                            type="checkbox"
                                                            value="{{ isset($page) ? $page->home : '0' }}"
                                                            id="home"
                                                            name="home">
                                                        <label class="form-check-label" for="home">
                                                            {{ __('app.Set homepage') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-list"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" id="slug" type="text" name="slug"
                                                        placeholder="Slug" autocomplete="title"
                                                        value="{{ isset($page) ? $page->slug : '' }}">
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="cui-info"></i>
                                                        </span>
                                                    </div>
                                                    <textarea class="form-control" id="description" type="text" name="description"
                                                        placeholder="description" autocomplete="description">{{ isset($page) ? $page->description : '' }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label>{{ __('app.Content') }}</label>
                                                {{-- <input class="form-control" id="content" type="hidden" name="content" value="{{ isset($page) ? $page->content : '' }}"> --}}
                                                {{-- <trix-editor input="content"></trix-editor> --}}
                                                <div id="editor">{{ isset($page) ? $page->content : '' }}</div>

                                                <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{ isset($page) ? $page->content : '' }}</textarea>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div> <!-- /.card -->
                    </div>

                    <div class="d-none d-xl-block col-xl-3 toc">
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-sm btn-success" type="submit">
                                    <i class="fa fa-dot-circle-o"></i> 
                                    {{ !isset($page) ? __('app.Publish') : __('app.Edit') }}
                                </button>
                            </div>
                            <div class="card-body">
                                @if (isset($categories))    
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="categories">{{ __('app.Category') }}</label>
                                            <div class="input-group">
                                                <select name="categories[]" id="categories" class="form-control categories-selector" multiple>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id}}"
                                                            @if (isset($page) && $page->hasCategory($category->id))
                                                                selected
                                                            @endif
                                                        >
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label>{{ __('app.Create category') }}</label>
                                            <div class="input-group">
                                                <input type="text" id="category_name" class="form-control">     
                                                <button id="create_category" class="btn btn-info input-group-prepend" type="button">
                                                        <i class="fa fa-dot-circle-o"></i> 
                                                        AJAX : {{__('app.Create category') }}
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if (isset($tags))    
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="tags">{{ __('app.Tag') }}</label>
                                            <div class="input-group">
                                                <select name="tags[]" id="tags" class="form-control tags-selector" multiple>
                                                    @foreach ($tags as $tag)
                                                        <option value="{{ $tag->id}}"
                                                            @if (isset($page) && $page->hasTag($tag->id))
                                                                selected
                                                            @endif
                                                        >
                                                            {{ $tag->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label>{{ __('app.Create tag') }}</label>
                                            <div class="input-group">
                                                <input type="text" id="tag_name" class="form-control">     
                                                <button id="create_tag" class="btn btn-info input-group-prepend" type="button">
                                                        <i class="fa fa-dot-circle-o"></i> 
                                                        AJAX : {{__('app.Create tag') }}
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label>{{ __('app.Featured image') }}</label>
                                        <div id="thumbImage"><img src="{{ isset($page) ? asset('storage/pages/' . $page->image) : '' }}" alt=""></div>
                                        <input class="form-control" id="image" type="file" name="image">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label>{{ __('app.Published at') }}</label>
                                        <input class="form-control" id="published_at" type="date" name="published_at"
                                            placeholder="{{ __('app.Published at') }}" autocomplete="published_at"
                                            value="{{ isset($page) && $page->published_at ? $page->published_at : Carbon\Carbon::now()->format('Y-m-d') }}">
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                        </div><!-- /.sidebar card -->
                    </div>

                </div>
                
            </form>
        </div> <!-- /.col-12 -->
    </div> <!-- /.row -->
</div>
@endsection

@section('stylesheets')
    {{-- <link href="{{ asset('vendors/trix/trix.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    {{-- <script src="{{ asset('vendors/trix/trix.js') }}"></script> --}}
    {{-- <script src="{{ asset('vendors/ckeditor4/ckeditor.js') }}"></script> --}}
    
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="/js/ckfinder/ckfinder.js"></script>
    <script src="{{ asset('vendors/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/change_slug.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {   
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            // CKEDITOR.replace( 'ckeditor' );
            if ($('#image').length > 0) {
                $('#image').first().on('change', function () {
                    var preview = document.querySelector('#thumbImage img');
                    var file    = document.querySelector('#image[type=file]').files[0];
                    var reader  = new FileReader();

                    reader.onloadend = function () {
                        preview.src = reader.result;
                        document.querySelector('#thumbImage').setAttribute('style', 'display: block');
                    }
                    if (file) {
                        reader.readAsDataURL(file);
                    } else {
                        preview.src = "";
                        document.querySelector('#thumbImage').setAttribute('style', 'display: none');
                    }
                });
            }
            if ($('.categories-selector').length !== 0)  $('.categories-selector').select2();     
            if ($('.tags-selector').length !== 0)  $('.tags-selector').select2(); 
            /* End change to slug */ 
            if ($('#name').length > 0)  {
                $('#name').first().change(function () {
                    
                    if (window.changeToSlug && typeof changeToSlug === 'function') {
                        changeToSlug('#name', '#slug');
                    } else {
                        console.warn('Can not create slug by js!');
                    }
                }); 
            } 
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.3/ace.js" type="text/javascript" charset="utf-8"></script>
                                        <script>
                                            $(document).ready(function() {  
                                                var editor = ace.edit("editor");
                                                editor.setTheme("ace/theme/chrome");
                                                editor.session.setMode("ace/mode/c_cpp");
                                                editor.session.on('change', function(delta) {
                                                    var content=document.getElementById('content');
                                                    content.value=editor.getValue()
                                                });
                                            });
                                        </script>

<style type="text/css" media="screen">
    #editor {
        position: absolute;
        top: 54px;
        right: 0px;
        bottom: 0px;
        left: 10px;
    }
    .ace_editor {
        border: 1px solid lightgray;
        margin: auto;
        height: 100%;
        width: calc(100% - 30px);
    }
    .scrollmargin {
        height: 80px;
        text-align: center;
    }
</style>

@endsection