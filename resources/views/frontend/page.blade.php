@extends('layouts.apex_page')

@section('content')
        {!! $page->content !!}
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
