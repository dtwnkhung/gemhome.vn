@extends('admin.layouts.adminbase')

@section('content')
<div class="users-table">
    <div class="row">
        <div class="col-sm-4">
            <h4 class="card-title mb-0">{{ !isset($item) ? __('app.Create :name', ['name'=> __('app.Menu')]) : __('app.Edit :name', ['name'=> __('app.menu')]) }}</h4>
            <div class="small text-muted">{{ __('app.Edit :name', ['name'=> __('app.menu')]) }}
            </div>
        </div>

        <div class="col-sm-8 text-right">  
            <a class="btn btn-sm btn-primary" href="{{ route('menus.index') }}">
                <i class="fa fa-dot-circle-o"></i> {{ __('app.Back') }}</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-horizontal" action="{{ isset($item) ? route('menus.update', $item->id) : route('menus.store') }}" method="POST">
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
                                    <input class="form-control" id="title" type="text" name="title"
                                        placeholder="{{ __('app.Menu title') }}" autocomplete="title"
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
                                    <input class="form-control" id="link" type="text" name="link"
                                        placeholder="{{ __('app.Menu link') }}" autocomplete="link"
                                        value="{{ isset($item) ? $item->link : '' }}">
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
                                    <input class="form-control" id="order" type="text" name="order"
                                        placeholder="{{ __('app.Menu order') }}" autocomplete="order"
                                        value="{{ isset($item) ? $item->order : '' }}">
                                </div>
                            </div>
                        </div>

                        @if (isset($items))
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="categories">{{ __('app.Parent menu') }}</label>
                                    <div class="input-group">
                                        <select name="parent_id" id="categories" class="form-control categories-selector">
                                            <option value="0" @if (isset($item) && $item->parent_id == '0')
                                                selected
                                            @endif
                                        >{{ __('app.No parent') }}</option>
                                            @foreach ($items as $parent)
                                                <option value="{{ $parent->id}}"
                                                    @if (isset($item) && $item->parent_id == $parent->id))
                                                        selected
                                                    @endif
                                                >
                                                    {{ $parent->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="cui-info"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" id="class_name" type="text" name="class_name"
                                        placeholder="{{ __('app.Menu class name') }}" autocomplete="class_name"
                                        value="{{ isset($item) ? $item->class_name : '' }}">
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
        $(document).ready(function() {               
            /* End change to slug */ 
            if ($('#name').length !== 0)  {
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