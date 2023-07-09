@extends('admin.layouts.adminbase')

@section('content')
<div class="pages-table">
    <div class="row">
        <div class="col-sm-4">
            <h4 class="card-title mb-0">{{ !isset($item) ? __('app.Create :name', ['name'=>__('app.project')]) : __('app.Edit :name', ['name'=>__('app.project')]) }}</h4>
            <div class="small text-muted">
                {{ isset($item) ? __('app.Edit :name', ['name'=>__('app.project')]).': ' . $item->title : '' }}
            </div>
        </div>

        <div class="col-sm-8 text-right">  
            <a class="btn btn-sm btn-primary" href="{{ route('projects.index') }}">
                <i class="fa fa-dot-circle-o"></i> {{ __('app.Back') }}</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-horizontal"
                action="{{ isset($item) ? route('projects.update', $item->slug) : route('projects.store') }}"
                method="POST"
                enctype="multipart/form-data">
                @csrf
                @if (isset($item))
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
                                                        placeholder="{{ __('app.Project name') }}" autocomplete="title"
                                                        value="{{ isset($item) ? $item->title : '' }}">
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
                                                        value="{{ isset($item) ? $item->slug : '' }}">
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
                                                        placeholder="description" autocomplete="description">{{ isset($item) ? $item->description : '' }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label>{{ __('app.Content') }}</label>
                                                {{-- <input class="form-control" id="content" type="hidden" name="content" value="{{ isset($item) ? $item->content : '' }}"> --}}
                                                {{-- <trix-editor input="content"></trix-editor> --}}
                                                <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{ isset($item) ? $item->content : '' }}</textarea>
                                            </div>
                                        </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label>{{ __('app.Image') }}</label>
                                        <div id="thumbImage_image_1"><img style="max-width: 120px" src="{{ isset($item) ? asset('storage/' . $item->image_1) : '' }}" alt=""></div>
                                        <input class="form-control" id="image_1" type="file" name="image_1">
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{ __('app.Image') }}</label>
                                        <div id="thumbImage_image_2"><img style="max-width: 120px" src="{{ isset($item) ? asset('storage/' . $item->image_2) : '' }}" alt=""></div>
                                        <input class="form-control" id="image_2" type="file" name="image_2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label>{{ __('app.Image') }}</label>
                                        <div id="thumbImage_image_3"><img style="max-width: 120px" src="{{ isset($item) ? asset('storage/' . $item->image_3) : '' }}" alt=""></div>
                                        <input class="form-control" id="image_3" type="file" name="image_3">
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{ __('app.Image') }}</label>
                                        <div id="thumbImage_image_4"><img style="max-width: 120px" src="{{ isset($item) ? asset('storage/' . $item->image_4) : '' }}" alt=""></div>
                                        <input class="form-control" id="image_4" type="file" name="image_4">
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
                                    {{ !isset($item) ? __('app.Publish') : __('app.Edit') }}
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
                                                            @if (isset($item) && $item->hasCategory($category->id))
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
                                                            @if (isset($item) && $item->hasTag($tag->id))
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
                                        <div id="thumbImage_image"><img style="max-width: 120px" src="{{ isset($item) ? asset('storage/' . $item->image) : '' }}" alt=""></div>
                                        <input class="form-control" id="image" type="file" name="image">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label>{{ __('app.Published at') }}</label>
                                        <input class="form-control" id="published_at" type="date" name="published_at"
                                            placeholder="{{ __('app.Published at') }}" autocomplete="published_at"
                                            value="{{ isset($item) && $item->published_at ? $item->published_at : Carbon\Carbon::now()->format('Y-m-d') }}">
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
            CKEDITOR.replace( 'ckeditor' );
            function viewThumbImage(id) {
            console.log('viewThumbImage', id)
                if ($('#' + id + '').length > 0) {
                    $('#' + id + '').first().on('change', function () {
                        var preview = document.querySelector('#thumbImage_' + id + ' img');
                        var file    = document.querySelector('#' + id + '[type=file]').files[0];
                        var reader  = new FileReader();

                        reader.onloadend = function () {
                            preview.src = reader.result;
                            document.querySelector('#thumbImage_' + id + '').setAttribute('style', 'display: block');
                        }
                        if (file) {
                            reader.readAsDataURL(file);
                        } else {
                            preview.src = "";
                            document.querySelector('#thumbImage_' + id + '').setAttribute('style', 'display: none');
                        }
                    });
                }
            }
            var image_array = ['image', 'image_1', 'image_2', 'image_3', 'image_4']; 
            image_array.forEach(function(item) {
                viewThumbImage(item);
            })
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

            /** AJAX create category */
            if ($('#create_category').length !== 0)  {      
                $('#create_category').first().click(apiCreateCategory);
                function apiCreateCategory() {
                    var name = document.querySelector('input#category_name').value;
                    if (name && name !== '') {
                        var data = { name: name };
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN':  $('[name="_token"]').val()
                            },
                            type: "POST",
                            url: '{{ route('project-categories.ajaxCreate') }}',
                            data: data,
                            success: function (result) {
                                // console.log(result);
                                if (result.status === 200 && result.message === "Success") {
                                    var data = result.data;
                                    // Create a DOM Option and pre-select by default
                                    var newOption = new Option(data.name, data.id, true, true);
                                    // Append it to the select
                                    $('.categories-selector').append(newOption).trigger('change');
                                    document.querySelector('input#category_name').value = '';
                                }
                            }
                        }) 
                    } else alert('{{ __("app.The name field is required") }}');
                } /* testCreateCategory */
            }
            /** End AJAX create category */

        });
    </script>
@endsection