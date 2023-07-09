@extends('admin.layouts.adminbase')

@section('content')
<div class="users-table">
    <div class="row">
        <div class="col-sm-4">
            <h4 class="card-title mb-0">{{ !isset($category) ? __('app.Create category') : __('app.Edit category') }}</h4>
            <div class="small text-muted">{{ __('app.Edit category') }}
            </div>
        </div>

        <div class="col-sm-8 text-right">            
            <button id="create_category" class="btn btn-sm btn-info" type="button">
                    <i class="fa fa-dot-circle-o"></i> 
                    AJAX : {{__('app.Create') }}
                </button>
            <a class="btn btn-sm btn-primary" href="{{ route('categories.index') }}">
                <i class="fa fa-dot-circle-o"></i> {{ __('app.Back') }}</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-horizontal" action="{{ isset($category) ? route('categories.update', $category->slug) : route('categories.store') }}" method="POST">
                @csrf
                @if (isset($category))
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
                                        placeholder="Category name" autocomplete="rolename"
                                        value="{{ isset($category) ? $category->name : '' }}">
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
                                        placeholder="Category name" autocomplete="rolename"
                                        value="{{ isset($category) ? $category->slug : '' }}">
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
                                        placeholder="description" autocomplete="description">{{ isset($category) ? $category->description : '' }}</textarea>
                                </div>
                            </div>
                        </div>

                    <div class="card-footer">
                        <button class="btn btn-sm btn-success" type="submit">
                            <i class="fa fa-dot-circle-o"></i> 
                            {{ !isset($category) ? __('app.Create') : __('app.Edit') }}
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
        $(document).ready(function() {               
            /* End change to slug */ 
            if ($('#name').length !== 0)  {
                $('#name').first().keyup(function () {
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