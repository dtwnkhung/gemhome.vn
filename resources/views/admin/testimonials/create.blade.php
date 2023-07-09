@extends('admin.layouts.adminbase')

@section('content')
<div class="users-table">
    <div class="row">
        <div class="col-sm-4">
            <h4 class="card-title mb-0">{{ !isset($category) ? __('app.Create :name', ['name' => __('app.'. $controller_label)]) : __('app.Edit :name', ['name' => __('app.'. $controller_label)]) }}</h4>
            <div class="small text-muted">{{ __('app.Edit :name', ['name' => __('app.'. $controller_label)]) }}
            </div>
        </div>

        <div class="col-sm-8 text-right">    
            <a class="btn btn-sm btn-primary" href="{{ route($controller_router . '.index') }}">
                <i class="fa fa-dot-circle-o"></i> {{ __('app.Back') }}</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <form class="row form-horizontal" action="{{ isset($category) ? route($controller_router . '.update', $category->slug) : route($controller_router . '.store') }}" method="POST"enctype="multipart/form-data">
                @csrf
                @if (isset($category))
                    @method('PUT')
                @endif
                <div class="d-xl-block col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="label label-title"><strong>{{ __('app.Title') }}</strong></div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="icon-list"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" id="title" type="text" name="title"
                                            placeholder="{{ __('app.Title') }}" autocomplete="title"

                                            value="{{ isset($category) ? $category->title : '' }}">
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="label label-slug"><strong>{{ __('app.Link') }}</strong></div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="icon-list"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" id="link" type="text" name="link"
                                            placeholder="{{ __('app.Link') }}" autocomplete="link"
                                            value="{{ isset($category) ? $category->link : '' }}">
                                    </div>
                                </div>
                            </div> -->

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="label label-description"><strong>{{ __('app.Description') }}</strong></div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="cui-info"></i>
                                            </span>
                                        </div>
                                        <textarea class="form-control" id="description" type="text" name="description"
                                            placeholder="description" autocomplete="description">{{ isset($category) ? $category->description : '' }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- metatitle -->
                            <!-- <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="cui-info"></i><span class="label-metatitle">{{ 'Meta title' }}</span>
                                            </span>
                                        </div>
                                        <textarea class="form-control" id="metatitle" type="text" name="metatitle"
                                            placeholder="metatitle" autocomplete="metatitle">{{ isset($category) ? $category->metatitle : '' }}</textarea>
                                    </div>
                                </div>
                            </div> -->

                            <!-- headerhtml -->
                            <!-- <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="cui-info"></i><span class="label-headerhtml">{{ 'Header html' }}</span>
                                            </span>
                                        </div>
                                        <textarea class="form-control" id="headerhtml" type="text" name="headerhtml"
                                            placeholder="headerhtml" autocomplete="headerhtml">{{ isset($category) ? $category->headerhtml : '' }}</textarea>
                                    </div>
                                </div>
                            </div> -->

                            <!-- order -->
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="icon-list"></i><span class="label-order">{{ __('app.Order') }}</span>
                                            </span>
                                        </div>
                                        <input class="form-control" id="order" type="text" name="order"
                                            placeholder="Category order" autocomplete="order"
                                            value="{{ isset($category) ? $category->order : '' }}">
                                    </div>
                                </div>
                            </div>

                            <!-- contenthtml -->
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="label label-contenthtml"><strong>{{ __('app.Content') }}</strong></div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="cui-info"></i>
                                            </span>
                                        </div>

                                        <div id="editor">{{ isset($category) ? $category->contenthtml : '' }}</div>
                                        <textarea class="form-control" id="contenthtml" type="text" name="contenthtml" cols="50" rows="10"
                                            placeholder="contenthtml" autocomplete="contenthtml">{{ isset($category) ? $category->contenthtml : '' }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- footerhtml -->
                            <!-- <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="cui-info"></i><span class="label-footerhtml">{{ 'Footer html' }}</span>
                                            </span>
                                        </div>
                                        <textarea class="form-control" id="footerhtml" type="text" name="footerhtml"
                                            placeholder="footerhtml" autocomplete="footerhtml">{{ isset($category) ? $category->footerhtml : '' }}</textarea>
                                    </div>
                                </div>
                            </div> -->
                            <!-- content -->

                        
                    </div> <!-- /.card -->
                    </div>
                </div>

                <div class="d-xl-block col-xl-3 toc">
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-sm btn-success" type="submit">
                                    <i class="fa fa-dot-circle-o"></i> 
                                    {{ !isset($page) ? __('app.Publish') : __('app.Edit') }}
                                </button>
                            </div>
                            <div class="card-body">
                                @if($categories) 
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="categories">{{ __('app.Category') }}</label>
                                            <div class="input-group">
                                                <select name="categories[]" id="categories" class="form-control categories-selector">
                                                    @foreach ($categories as $cat)
                                                        <option value="{{ $cat->id}}"
                                                            @if (isset($page) && $page->hasCategory($cat->id))
                                                                selected
                                                            @endif
                                                        >
                                                            {{ $cat->title }}
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
                                                        {{__('app.Create category') }}
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
                                                        {{__('app.Create tag') }}
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <!-- <div class="form-group row">
                                    <div class="col-md-12">
                                        <label>{{ __('app.Featured image') }} 1</label>
                                        <div id="thumbImage_image_1">
                                            <img
                                                src="{{ isset($category) ? asset('storage/' . $category->image_1) : '' }}"
                                                alt=""
                                                class="img-fluid"
                                            >
                                            </div>
                                        <input class="form-control" id="image_1" type="file" name="image_1">
                                        <input
                                            class="form-control"
                                            id="image_1_src"
                                            type="hidden"
                                            name="image_1_src"
                                            value="{{ isset($category) ? $category->image_1 : '' }}">
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label>{{ __('app.Featured image') }}</label>
                                        <div id="thumbImage_image">
                                            <img
                                                src="{{ isset($category) ? asset('storage/' . $category->image) : '' }}"
                                                alt=""
                                                class="img-fluid"
                                            >
                                            </div>
                                        <input class="form-control" id="image" type="file" name="image">
                                        <input
                                            class="form-control"
                                            id="image_src"
                                            type="hidden"
                                            name="image_src"
                                            value="{{ isset($category) ? $category->image : '' }}">
                                    </div>
                                </div>

                            </div><!-- /.card-body -->
                        </div><!-- /.sidebar card -->
                    </div>

            </form>
        </div> <!-- /.col-12 -->
    </div> <!-- /.row -->
</div>
@endsection

@section('stylesheets')
    <link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('vendors/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/change_slug.js') }}"></script>
    <script type="text/javascript">        
        $(document).ready(function() {               
            /* End change to slug */ 
            if ($('#title').length !== 0)  {
                $('#title').first().change(function () {
                    if (window.changeToSlug && typeof changeToSlug === 'function') {
                        changeToSlug('#title', '#slug');
                    } else {
                        console.warn('Can not create slug by js!');
                    }
                }); 
            } 
            /** AJAX create category */
            if ($('#create_category').length !== 0)  {      
                $('#create_category').first().click(apiCreateCategory);
                function apiCreateCategory() {
                    var nameCatElement = document.querySelector('#category_name');
                    if (!nameCatElement) return false;
                    var name = nameCatElement.value;
                    var data = { title: name };
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN':  $('[name="_token"]').val()
                        },
                        type: "POST",
                        url: '{{ isset($parent_router) ? route($parent_router . '.ajaxCreate'):"" }}',
                        data: data,
                        success: function (result) {
                            console.log('success!', result);
                            if (result.status === 200 && result.message === "Success") {
                                var data = result.data;
                                // Create a DOM Option and pre-select by default
                                var newOption = new Option(data.title, data.id, true, true);
                                // Append it to the select
                                $('.categories-selector').append(newOption).trigger('change');
                                document.querySelector('input#category_name').value = '';
                            }
                        }
                    })
                } /* apiCreateCategory */
            }
            /** End AJAX create category */
            /** Preview Image */
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
            var image_array = ['image', 'image_1']; 
            image_array.forEach(function(item) {
                viewThumbImage(item);
            })
            /** end preview images */
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.3/ace.js" type="text/javascript" charset="utf-8"></script>
                                        <script>
                                            $(document).ready(function() {  
                                                var editor = ace.edit("editor");
                                                editor.setTheme("ace/theme/chrome");
                                                editor.session.setMode("ace/mode/c_cpp");
                                                editor.session.on('change', function(delta) {
                                                    var content=document.getElementById('contenthtml');
                                                    content.value=editor.getValue()
                                                });
                                            });
                                        </script>

<style type="text/css" media="screen">
    #editor {
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        z-index: 9;
    }
    .ace_editor {
        border: 1px solid lightgray;
        margin: auto;
        height: 100%;
        width: calc(100% - 0px);
    }
    .scrollmargin {
        height: 80px;
        text-align: center;
    }
</style>
@endsection