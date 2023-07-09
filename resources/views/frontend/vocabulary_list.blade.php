@extends('layouts.base')

@section('content')
            
    <div
        class="header-cover"
        style="background: url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center 15% / 100%;">
        @if (isset($breadcrumb))   
            <span data-href="/vocabulary" class="item-cover section-title">{{ $breadcrumb[count($breadcrumb) - 1]->name }}</span>                 
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

    <div class="container">
        <div class="row _justify-content-center">
            
            @include('frontend.components.back_sticky', ['back_link' => $breadcrumb[count($breadcrumb) - 2]->url])
                @if (count($list) > 1)
                    @foreach ($list as $category)
                        <div class="container">
                            <div class="row"> 
                                <div class="col-sm-12 header-title">
                                    <div class="row"> 
                                        <h3 class="col-sm-12 module-title">
                                            <a href="{{ route('frontend.vocabulary_list', $category->slug) }}">
                                                {{ $category->name }}
                                            </a>
                                        </h3>
                                        <p class="module-description">{{ $category->parent->description }}</p>
                                    </div>
                                </div>
                                <br><br>
                                <div class="col-sm-12">
                                    <div class="rowlist-carousel owl-carousel owl-theme list">
                                        @isset($category->data)
                                            @foreach ($category->data as $type)
                                                @include('frontend.components.box-item', [
                                                    'type' => $type,
                                                    'category'=>$category,
                                                    'mode'=> $category->parent,
                                                    'box_type' => 'VOCABULARY',
                                                ])
                                            @endforeach                           
                                        @endisset
                                        
                                    </div> <!-- rowlist-carousel --> 
                                </div>

                            </div>
                        
                        </div>
                    @endforeach 
                @else
                    <div class="container">
                        <div class="row"> 
                            <br><br>
                            <div class="col-sm-12">
                                <div class="row list">
                                    @isset($list[0]->data)
                                        @foreach ($list[0]->data as $type)
                                            <div class="col-6 col-sm-4">
                                            @include('frontend.components.box-item', [
                                                'type' => $type,
                                                'category'=>$list[0],
                                                'mode'=> $list[0]->parent,
                                                'box_type' => 'VOCABULARY',
                                            ])
                                            </div>
                                        @endforeach                           
                                    @endisset
                                    
                                </div> <!-- rowlist --> 
                                <div class="d-flex text-center">
                                    @if (!is_null($list[0]->data))
                                        {{ $list[0]->data->links() }}
                                    @endif
                                </div>
                            </div>

                        </div>
                    
                    </div>
                @endif

        </div>
    </div>
@endsection

@section('styles')
<link rel="stylesheet" href="/assets/vendors/owl_carousel_2-2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/vendors/owl_carousel_2-2.3.4/assets/owl.theme.default.min.css">
@endsection
@section('script')
<script src="../vendors/jquery/js/jquery.min.js"></script>
<script src="/assets/vendors/owl_carousel_2-2.3.4/owl.carousel.min.js" type="text/javascript" defer=""></script>
<script>
    $(document).ready(function(){
        $(".rowlist-carousel").owlCarousel({
            loop:true,
            nav:true,
            navText : ['<span class="fa fa-chevron-circle-left" aria-hidden="true"></span>','<span class="fa fa-chevron-circle-right" aria-hidden="true"></span>'],
            dots:true,
            margin:30,
            autoplay:false,
            autoplayHoverPause:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,
                    nav:true
                },
                768:{
                    items:2,
                    nav:true
                },
                992:{
                    items:3,
                    nav:true,
                    loop:false
                }
            }
        });
    });
</script>
@endsection

