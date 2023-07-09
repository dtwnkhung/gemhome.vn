@php
    /* Params : object $type, object $category, object $mode, string $box_type */
    $mode_name = 'None';
    if(isset($mode)){
        $mode_name = $mode->name;
    }
    $key_type = 'TOEIC';
    if(isset($box_type)){
        $key_type = $box_type;
    }
    if(!isset($is_permission)){
        $is_permission = false;
    }
    if (Route::currentRouteName() == 'frontend.vocabulary_type') {
        $type->total_item = count($type->vocabularies);
    }
    switch ($key_type) {
        case 'VOCABULARY':
            $route_item_name = 'tu-vung.show';
            $item_unit = __('app.vocabulary');
            $parent_unit =  __('app.vocabulary');
            $router_parent_name = 'frontend.vocabulary_list';
            $btn_readmore_link = $is_permission ? route($route_item_name, $type->slug) : '#popup_payment';
            $btn_readmore = $is_permission ? __('app.Learn now') : __('app.Learn now');
            break;
        
        default:
            $route_item_name = 'de-thi.show';
            $item_unit = __('app.question');
            $parent_unit =  __('app.question');
            $router_parent_name = 'frontend.list_examination';            
            $btn_readmore_link = $is_permission ? route($route_item_name, $type->slug) : '#popup_payment';
            $btn_readmore = $is_permission ? __('app.Learn now') : __('app.Learn now');
            break;
    }
    $item_background =  isset($type->thumbnail) ? asset('storage/' . $type->thumbnail) : '';
    
@endphp
<div class="item">
    <div class="box-item {{ $key_type }} {{ isset($type->thumbnail) ? 'has-cover' : '' }} list-home">
        <a href="{{ $btn_readmore_link }}" class="cover" @if($item_background)
            style="background-image: url({{ $item_background }})"
        @endif>
        </a>
        @isset($mode)                                            
            <div class="option-group w-100 d-flex justify-content-between">
                <div class="label-item meta-category">{{ $mode->name }}</div>
                <div class="label-item meta-category">{{ $type->total_item }} {{ $item_unit }}</div>
            </div> 
        @endisset
        <div class="box-content">
            <a class="title" href="{{ $btn_readmore_link }}">{{ $type->name }}</a>
            <div class="meta-group">
                <div class="light-item meta-item">
                    <i class="biz-icon icon-small icon-document"><img src="/images/icons/document.svg" alt="icon-document"></i>
                    <span class="label-meta">{{ __('app.Category') }}: </span>
                    <a href="{{ route($router_parent_name, $mode->slug) }}"
                        class="meta-category">{{ $mode_name }}</a>
                </div>
                <div class="dark-item meta-item">
                    <span class="label-meta">
                        <i class="biz-icon icon-small icon-document"><img src="/images/icons/document-white.svg" alt="icon-document"></i>
                        {{ __('app.Total') }}: 
                    </span>
                    <a class="meta-category">{{ $type->total_item }} {{ $parent_unit }}</a> 
                </div>
            </div>                                               
                {{-- <p class="description">
                    @isset($type->description) {!! $type->description !!}@endisset
                </p> --}}
            
            <a href="{{ $btn_readmore_link }}" class="btn btn-outline btn-lg w-100">{{ $btn_readmore }}</a>
        </div>
    </div>
</div>