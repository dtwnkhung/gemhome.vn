@extends('admin.layouts.adminbase')

@section('content')
<div class="users-table">
    <div class="row">
        <div class="col-sm-4">
            <h4 class="card-title mb-0">{{ !isset($item) ? __('app.Create :name', ['name'=> __('app.site options')]) : __('app.Edit :name', ['name'=> __('app.site options')]) }}</h4>
            <div class="small text-muted">{{ __('app.Edit :name', ['name'=> __('app.site options')]) }}
            </div>
        </div>

        <div class="col-sm-8 text-right">  
            <a class="btn btn-sm btn-primary" href="{{ route('site-options.index') }}">
                <i class="fa fa-dot-circle-o"></i> {{ __('app.Back') }}</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-horizontal"
                action="{{ isset($item) ? route('site-options.update', $item->id) : route('site-options.store') }}"
                method="POST"
                enctype="multipart/form-data"
                >
                @csrf
                @if (isset($item))
                    @method('PUT')
                @endif
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
                                        placeholder="{{ __('app.Site options name') }}" autocomplete="name"
                                        value="{{ isset($item) ? $item->name : '' }}">
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
                                    <textarea class="form-control" id="value" type="text" name="value"
                                        placeholder="{{ __('app.Site options value') }}" autocomplete="value"
                                        value="{{ isset($item) ? $item->value : '' }}">{{ isset($item) ? $item->value : '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        @if (isset($positions))
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="categories">{{ __('app.Type') }}</label>
                                    <div class="input-group">
                                        <select name="type" id="categories" class="form-control categories-selector">
                                            <option value="0" @if (isset($item) && $item->type == '0')
                                                selected
                                            @endif
                                        >{{ __('app.No selected') }}</option>
                                            @foreach ($positions as $position)
                                        {{-- {{ dd($position) }} --}}
                                                <option value="{{ $position['id']}}"
                                                    @if (isset($item) && $item->type == $position['id']))
                                                        selected
                                                    @endif
                                                >
                                                    {{ $position['label'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>{{ __('app.Image') }}</label>
                                @if (isset($item) && !is_null($item->image))
                                    <div id="thumbImage" class="image_src-preview">
                                        <img src="{{ isset($item) ? asset('storage/' . $item->image) : '' }}" alt="">
                                        <button class="remove_src remove_image_src" data-remove="image_src">Remove image</button>
                                    </div>
                                @endif
                                <input class="form-control" id="image" type="file" name="image" value="{{ isset($item->image) ? asset('storage/' . $item->image) : null }}">
                                <input class="form-control" id="image_src" type="hidden" name="image_src" value="{{ isset($item->image) ?  $item->image : null }}">
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
                                    <input class="form-control" id="desc" type="text" name="desc"
                                        placeholder="{{ __('app.Site options descriptions') }}" autocomplete="desc"
                                        value="{{ isset($item) ? $item->desc : '' }}">
                                </div>
                            </div>
                        </div>

                    <div class="card-footer">
                        <button class="btn btn-sm btn-success" type="submit">
                            <i class="fa fa-dot-circle-o"></i> 
                            {{ !isset($item) ? __('app.Create') : __('app.Edit') }}
                        </button>
                    </div>
                </div> <!-- /.card -->
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

        (function removeSrc() {
            if (! $('.remove_src')) return ;
            $('.remove_src').click(function (event) {
                event.preventDefault();
                var srcType = $(this).data('remove')
                $('#' + srcType).val('')
                $('.' + srcType + '-preview').hide()
            })
        })(); 
        $(document).ready(function() {               
            /* End change to slug */ 
            if ($('#name').length !== 0)  {
                $('#name').first().keyup(function () {
                    console.log('changeToSlug');
                    if (window.changeToSlug && typeof changeToSlug === 'function') {
                        changeToSlug('#name', '#slug');
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
                        url: '{{ route('categories.index') }}',
                        data: data,
                        success: function (e) { console.log('success!', e)}
                    })
                } /* testCreateCategory */
            }
            /** End AJAX create category */
        });
    </script>
@endsection