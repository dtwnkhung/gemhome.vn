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
    switch ($key_type) {
        case 'VOCABULARY':
            $route_item_name = 'frontend.vocabulary_type';
            $item_unit = __('app.subject');
            $router_parent_name = 'frontend.vocabulary_list';
            $btn_readmore = __('app.List :name', ['name'=> __('app.subject')]);
            break;
        
        default:
            $route_item_name = 'examination.type';
            $item_unit = __('app.examination');
            $router_parent_name = 'frontend.list_examination';
            $btn_readmore = __('app.List :name', ['name'=> __('app.examination')]);
            break;
    }
    $parent_unit =  __('app.subject');
    $item_background =  isset($type->thumbnail) ? asset('storage/' . $type->thumbnail) : '';
@endphp
<div class="item">
    <div class="box-item {{ $key_type }} {{ isset($type->thumbnail) ? 'has-cover' : '' }} list-home">
        <a href="{{ route($route_item_name, $type->slug) }}" class="cover" @if($item_background)
            style="background-image: url({{ $item_background }})"
        @endif >
        </a>
        @isset($mode)                                            
            <div class="option-group w-100 d-flex justify-content-between">
                <div class="label-item meta-category">{{ $mode_name }}</div>
                <div class="label-item meta-category">{{ $type->total_item }} {{ $item_unit }}</div>
            </div> 
        @endisset
        <div class="box-content">
            <a class="title" href="{{ route($route_item_name, $type->slug) }}">{{ $type->name }}</a>
            <div class="meta-group">
                <div class="light-item meta-item">
                    <span class="label-meta">
                        <i class="biz-icon icon-small icon-document"><img src="/images/icons/document.svg" alt="icon-document"></i>
                        {{ __('app.Total') }}: 
                    </span>
                    <span class="meta-category">{{ $type->total_item }} {{ $parent_unit }}</span>
                </div>
                <div class="dark-item meta-item">
                    <span class="label-meta">
                        <i class="biz-icon icon-small icon-document"><img src="/images/icons/document-white.svg" alt="icon-document"></i>
                        {{ __('app.Category') }}: 
                    </span>
                    <a href="{{ route($router_parent_name, $category->slug) }}"
                        class="meta-category">{{ $category->parent->name }}</a>
                </div>
            </div>                                               
                <p class="description">
                    @isset($type->description) {!! $type->description !!}@endisset
                </p>
            
            <a href="{{ route($route_item_name, $type->slug) }}" class="btn btn-outline btn-lg w-100">{{ $btn_readmore }}</a>
        </div>
    </div>
</div>