@extends('layouts.base')

@section('content')
    <div
        class="header-cover"
        style="background: url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center 15% / 100%;">
        @if (isset($breadcrumb))   
            <span class="item-cover section-title">{{ $breadcrumb[count($breadcrumb) - 1]->name }}</span>                 
            <div class="breadcrumb">
                @foreach ($breadcrumb as $item)
                    <li>
                        @if ($item->url)
                            <a href="{{ $item->url }}">{{ $item->name }}</a><span> /&nbsp;</span>
                        @else
                            <span>{{ $item->name }}</span>
                        @endif
                    </li>
                @endforeach  
            </div>
        @endif
    </div>
<div class="container-fluid">
    <div class="row justify-content-center"> 
        
        <div class="container">
            @if (!$is_permission)
                @include('frontend.components.popup_purchase')
            @endif
            @foreach ($list as $category)
                <div class="row">
                    <div class="col-sm-12 header-title">
                        <div class="row"> 
                            <p class="module-description">{{ $category->parent->description }}</p>
                        </div>
                    </div>
                    @include('frontend.components.back_sticky', ['back_link' => $breadcrumb[count($breadcrumb) - 2]->url])
                    <div class="col-sm-12"><div class="row list">
                        @isset($category->data)
                            @foreach ($category->data as $type)
                                <div class="col-6 col-sm-4">
                                    @include('frontend.components.box-item-learn', [
                                        'type' => $type,
                                        'category'=>$category,
                                        'mode'=> $mode,
                                        'box_type' => 'VOCABULARY',
                                        'is_permission'=> $is_permission,
                                    ])
                                    {{-- <div class="box-item {{ isset($type->thumbnail) ? 'has-cover' : '' }}">
                                        <div class="cover" style="background-image: url({{ asset('storage/' . $type->thumbnail) }})">
                                            <a href="{{ $is_permission ? route('tu-vung.show', $type->slug) : '#popup_payment' }}">{{ $type->name }}</a>
                                        </div>
                                        @isset($category->parent)
                                            <div class="w-100 d-flex justify-content-between">
                                                <div class="label-item meta-category">{{ $category->parent->name }}</div>
                                                <div class="label-item meta-category">{{ $type->total_item }} {{ __('app.vocabulary') }}</div>
                                            </div> 
                                        @endisset
                                        <div> 
                                            <div class="button-wrapper">
                                                <a
                                                    href="{{ $is_permission ? route('tu-vung.show', $type->slug) : '#popup_payment' }}"
                                                    class="btn btn-primary w-100">{{ $is_permission ? __('app.Learn now') : __('app.Learn now') }}</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            @endforeach 

                        @endisset
                    </div></div>  
                            
                    @if (!is_null($category->data))
                        {{ $category->data->links() }}
                    @endif    
                </div>
            @endforeach    
        </div>

    </div>
</div>
@endsection

@section('script')
<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
<script src="../vendors/jquery/js/jquery.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
@endsection
