
@if ($list)

    <div class="wpb_wrapper">
        <div class="wpb_revslider_element wpb_content_element">
        <p class="rs-p-wp-fix"></p>
        <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery"
            style="visibility:hidden;background:transparent;padding:0;">
            <rs-module id="rev_slider_1_1" style="" data-version="6.5.14">
            
            <rs-slides>
            @foreach ($list as $item)
                <!--Item -->
                <rs-slide style="position: absolute;" data-key="rs-{{ $loop->index + 1 }}" data-title="Slide"
                    data-in="o:0;" data-out="a:false;">
                    <img src="/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Slide"
                        title="Main Home" class="rev-slidebg tp-rs-img rs-lazyload"
                        data-lazyload="/wp-content/plugins/revslider/public/assets/assets/transparent.png"
                        data-parallax="off" data-no-retina>
                    <rs-layer id="slider-1-slide-{{ $loop->index + 1 }}-layer-2" data-type="image"
                        data-xy="x:c;xo:-61px,-61px,120px,19px;y:m;yo:17px,3px,-150px,-141px;"
                        data-text="l:22;a:inherit;"
                        data-dim="w:648px,480px,345px,210px;h:432px,320px,230px,140px;"
                        data-basealign="slide" data-rsp_o="off" data-rsp_bd="off"
                        data-frame_0="x:-100%;o:1;" data-frame_0_mask="u:t;"
                        data-frame_1="e:Quad.easeInOut;st:200;sp:1000;sR:200;" data-frame_1_mask="u:t;"
                        data-frame_999="st:w;sp:900;sR:3300;auto:true;" data-frame_999_mask="u:t;"
                        style="z-index:5;"><img
                        src="/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt=""
                        class="tp-rs-img rs-lazyload" width="648" height="432"
                        data-lazyload="{{ asset('storage/' . $item->image) }}"
                        data-no-retina>
                    </rs-layer>
                    <rs-layer id="slider-1-slide-{{ $loop->index + 1 }}-layer-3" data-type="image"
                        data-xy="x:c;xo:-315px,-297px,-141px,-95px;y:m;yo:0,-3px,-147px,-123px;"
                        data-text="l:22;a:inherit;"
                        data-dim="w:699px,415px,264px,170px;h:741px,440px,280px,180px;"
                        data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50px;"
                        data-frame_1="e:Quad.easeInOut;st:350;sp:800;sR:350;"
                        data-frame_999="st:w;sp:800;sR:3350;auto:true;" data-frame_999_mask="u:t;"
                        style="z-index:6;"><img
                        src="/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt=""
                        class="tp-rs-img rs-lazyload" width="699" height="741"
                        data-lazyload="{{ asset('storage/' . $item->image_1) }}"
                        data-no-retina>
                    </rs-layer>
                    <rs-layer id="slider-1-slide-{{ $loop->index + 1 }}-layer-4" data-type="text"
                        data-xy="x:c;xo:357px,238px,55px,-6px;y:m;yo:-121px,-93px,1px,-37px;"
                        data-text="w:normal;s:90,70,65,35;l:95,75,70,40;fw:300;a:right;"
                        data-dim="w:592px,496px,496px,267px;h:191px,auto,auto,91px;"
                        data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="o:1;"
                        data-frame_0_lines="d:10;x:-50px;o:0;"
                        data-frame_1="e:Quad.easeInOut;st:400;sp:800;sR:400;" data-frame_1_lines="d:10;"
                        data-frame_999="x:50px;o:0;e:Quad.easeInOut;st:w;sp:700;sR:3300;"
                        style="z-index:7;font-family:'Montserrat';text-transform:uppercase;">
                        {{ $item->title }}
                    </rs-layer>
                    <rs-layer id="slider-1-slide-{{ $loop->index + 1 }}-layer-5" data-type="text" data-color="#d8d8d8"
                        data-xy="x:c;xo:384px,235px,52px,-17px;y:m;yo:30px,31px,121px,64px;"
                        data-text="w:normal;s:23;l:30;a:right;"
                        data-dim="w:560px,496px,496px,271px;h:auto,auto,auto,109px;"
                        data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:-50px;"
                        data-frame_1="e:Quad.easeInOut;st:500;sp:800;sR:500;"
                        data-frame_999="x:50px;o:0;e:Quad.easeInOut;st:w;sp:650;sR:3200;"
                        style="z-index:8;font-family:'Alegreya';font-style:italic;">
                        {{ $item->description }}
                    </rs-layer>
                    <rs-layer id="slider-1-slide-{{ $loop->index + 1 }}-layer-6" data-type="text"
                        data-xy="x:c;xo:374px,224px,41px,-53px;y:m;yo:131px,120px,211px,169px;"
                        data-text="w:normal;s:12;l:22;a:right;" data-dim="w:540px,496px,496px,335px;"
                        data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:-50px;"
                        data-frame_1="e:Quad.easeInOut;st:600;sp:800;sR:600;"
                        data-frame_999="x:50px;o:0;e:Quad.easeInOut;st:w;sp:650;sR:3100;"
                        style="z-index:9;font-family:'Montserrat';"><a itemprop="url"
                        href="{{ $item->link }}" target="_self"
                        class="mkdf-btn mkdf-btn-medium mkdf-btn-solid">
                        <span class="mkdf-btn-border-holder"></span>
                        <span class="mkdf-btn-line-holder"></span>
                        <span class="mkdf-btn-text">Xem thêm</span>
                        </a>
                    </rs-layer>
                </rs-slide>

                <!-- End Item -->
            @endforeach
            </rs-slides>
            </rs-module>
            <script>
            setREVStartSize({ c: 'rev_slider_1_1', rl: [1920, 1601, 1025, 680], el: [840, 768, 960, 720], gw: [1100, 800, 700, 400], gh: [840, 768, 960, 720], type: 'standard', justify: '', layout: 'fullscreen', offsetContainer: '', offset: '', mh: "0" }); if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules["revslider11"] !== undefined) { window.RS_MODULES.modules["revslider11"].once = false; window.revapi1 = undefined; if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal() }
            </script>
        </rs-module-wrap>

        </div>
    </div>
    
@endif