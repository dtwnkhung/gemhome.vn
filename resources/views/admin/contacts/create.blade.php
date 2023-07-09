@extends('admin.layouts.adminbase')

@section('content')
<div class="users-table">
    <div class="row">
        <div class="col-sm-4">
            <h4 class="card-title mb-0">{{ !isset($category) ? __('app.Create :name', ['name' => __('app.Contact')]) : __('app.Edit :name', ['name' => __('app.Contact')]) }}</h4>
            <div class="small text-muted">{{ __('app.Edit :name', ['name' => __('app.Contact')]) }}
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
            <form class="row form-horizontal" action="{{ isset($category) ? route($controller_router . '.update', $category->id) : route($controller_router . '.store') }}" method="POST"enctype="multipart/form-data">
                @csrf
                @if (isset($category))
                    @method('PUT')
                    @php
                        // dd($category);
                    @endphp
                @endif
                <div class="d-xl-block col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="_input-group-prepend">
                                        <span class="pb-2 d-block font-weight-bold">
                                            <span class="label-title">{{ __('app.Name') }}</span>
                                        </span>
                                    </div>
                                    <div class="input-group">
                                        <input class="form-control" id="name" type="text" name="name"
                                            placeholder="{{ __('app.Name') }}" autocomplete="name"

                                            value="{{ isset($category) ? $category->name : '' }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="_input-group-prepend">
                                        <span class="ipb-2 d-block font-weight-bold">
                                            <span class="label-slug">{{ __('app.Email') }}:</span>
                                        </span>
                                    </div>
                                    <div class="input-group">
                                        <input class="form-control" id="email" type="text" name="email"
                                            placeholder="Category name" autocomplete="email"
                                            value="{{ isset($category) ? $category->email : '' }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="input-group-prepend">
                                        <span class="pb-2 d-block font-weight-bold">
                                            <span class="label-description">{{ __('app.Message') }}:</span>
                                        </span>
                                    </div>
                                    <div class="_input-group">
                                        <textarea class="form-control" id="message" type="text" name="message"
                                            placeholder="message" autocomplete="message">{{ isset($category) ? $category->message : '' }}</textarea>
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
                            <!-- contenthtml -->
                            <!-- <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="cui-info"></i><span class="label-contenthtml">{{ 'Content html' }}</span>
                                            </span>
                                        </div>
                                        <textarea class="form-control" id="contenthtml" type="text" name="contenthtml"
                                            placeholder="contenthtml" autocomplete="contenthtml">{{ isset($category) ? $category->contenthtml : '' }}</textarea>
                                    </div>
                                </div>
                            </div> -->
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
                            <!-- order -->
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="_input-group-prepend">
                                        <span class="pb-2 d-block font-weight-bold">
                                            <span class="label-created_at">{{ __('app.Created_at') }}:</span>
                                        </span>
                                    </div>
                                    <div class="input-group">
                                        <span class="form-control" id="created_at" type="text" name="created_at"
                                            placeholder="Category created_at" autocomplete="created_at"
                                            value="{{ isset($category) ? $category->created_at : '' }}">{{ isset($category) ? $category->created_at : '' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="_input-group-prepend">
                                        <span class="pb-2 d-block font-weight-bold">
                                            <span class="label-created_at">{{ __('app.Updated_at') }}:</span>
                                        </span>
                                    </div>
                                    <div class="input-group">
                                        <span class="form-control" id="updated_at" type="text" name="updated_at"
                                            placeholder="Category updated_at" autocomplete="updated_at"
                                            value="{{ isset($category) ? $category->updated_at : '' }}">{{ isset($category) ? $category->updated_at : '' }}</span>
                                    </div>
                                </div>
                            </div>

                        
                    </div> <!-- /.card -->
                    </div>
                </div>

                <div class="d-xl-block col-xl-3 toc">
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-sm btn-success" type="submit">
                                    <i class="fa fa-dot-circle-o"></i> 
                                    {{ !isset($category) ? __('app.Create') : __('app.Edit') }}
                                </button>
                            </div>
                            <div class="card-body" style="display: none">
                                @if($categories) 
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="categories">{{ __('app.Category') }}</label>
                                            <div class="input-group">
                                                <select name="categories[]" id="categories" class="form-control categories-selector" multiple>
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
                                                        <i class="fa fa-dot-circle-o"></i> 
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
<!-- 
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label>{{ __('app.Featured image') }}</label>
                                        <div id="thumbImage_img">
                                            <img
                                                src="{{ isset($category) ? asset('storage/' . $category->image) : '' }}"
                                                alt=""
                                                class="img-fluid"
                                            >
                                            </div>
                                        <input class="form-control" id="image" type="file" name="image">
                                    </div>
                                </div> -->

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
                $('#create_category').first().click(testCreateCategory);
                function testCreateCategory() {
                    var name = document.querySelector('#name').value;
                    var data = { name: name };
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN':  $('[name="_token"]').val()
                        },
                        type: "POST",
                        url: '{{ route($controller_router . '.index') }}',
                        data: data,
                        success: function (e) { console.log('success!', e)}
                    })
                } /* testCreateCategory */
            }
            /** End AJAX create category */
            /** Preview Image */
            if ($('#image').length > 0) {
                $('#image').first().on('change', function () {
                    var preview = document.querySelector('#thumbImage_img img');
                    var file    = document.querySelector('#image[type=file]').files[0];
                    var reader  = new FileReader();

                    reader.onloadend = function () {
                        preview.src = reader.result;
                        document.querySelector('#thumbImage_img').setAttribute('style', 'display: block');
                    }
                    if (file) {
                        reader.readAsDataURL(file);
                    } else {
                        preview.src = "";
                        document.querySelector('#thumbImage_img').setAttribute('style', 'display: none');
                    }
                });
            }
            /** end preview images */
        });
    </script>
@endsection