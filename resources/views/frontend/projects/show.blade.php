@extends('layouts.apex_page')


@section('content')
@php
  $post = $item;
@endphp
<!-- Star Project content -->
<div class="mkdf-content">
        <div class="mkdf-content-inner">
          <div
            class="mkdf-title-holder mkdf-standard-type mkdf-title-va-header-bottom mkdf-has-bg-image mkdf-bg-parallax"
            style="height: 250px; background-image: url(&quot;https://dor.qodeinteractive.com/wp-content/uploads/2019/03/titlearea-img-2.jpg&quot;); background-position: center 0px;"
            data-height="250">
            <div class="mkdf-title-image">
              <img itemprop="image" src="https://dor.qodeinteractive.com/wp-content/uploads/2019/03/titlearea-img-2.jpg"
                alt="s">
            </div>
            <div class="mkdf-title-wrapper" style="height: 250px">
              <div class="mkdf-title-inner">
                <div class="mkdf-grid">
                  <h2 class="mkdf-page-title entry-title">{{ $post->title }}</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="mkdf-container">
            <div class="mkdf-container-inner clearfix">
              <div class="mkdf-portfolio-single-holder mkdf-ps-small-masonry-layout">
                <div class="mkdf-grid-row">
                  <div class="mkdf-grid-col-8">
                    <div
                      class="mkdf-ps-image-holder mkdf-grid-list mkdf-grid-masonry-list mkdf-fixed-masonry-items  mkdf-two-columns mkdf-normal-space">
                      <div class="mkdf-ps-image-inner mkdf-outer-space mkdf-masonry-list-wrapper"
                        style="position: relative; height: 1330.31px; opacity: 1;">
                        <div class="mkdf-masonry-grid-sizer"></div>
                        <div class="mkdf-masonry-grid-gutter"></div>
                        <div class="mkdf-ps-image mkdf-item-space mkdf-masonry-size-large-height"
                          style="position: absolute; left: 0%; top: 0px; height: 857px;">
                          <a itemprop="image" title="masonry-small-2-img-1" data-rel="prettyPhoto[single_pretty_photo]"
                            href="{{ asset('storage/'. $post->image_1) }}">
                            <img itemprop="image"
                              src="{{ asset('storage/'. $post->image_1) }}"
                              alt="F">
                          </a>
                        </div>
                        <div class="mkdf-ps-image mkdf-item-space "
                          style="position: absolute; left: 49.963%; top: 0px;">
                          <a itemprop="image" title="masonry-small-2-img-2" data-rel="prettyPhoto[single_pretty_photo]"
                            href="{{ asset('storage/'. $post->image_2) }}">
                            <img itemprop="image"
                              src="{{ asset('storage/'. $post->image_2) }}"
                              alt="F">
                          </a>
                        </div>
                        <div class="mkdf-ps-image mkdf-item-space "
                          style="position: absolute; left: 49.963%; top: 443px;">
                          <a itemprop="image" title="masonry-small-2-img-3" data-rel="prettyPhoto[single_pretty_photo]"
                            href="{{ asset('storage/'. $post->image_3) }}">
                            <img itemprop="image"
                              src="{{ asset('storage/'. $post->image_3) }}"
                              alt="F">
                          </a>
                        </div>
                        <div class="mkdf-ps-image mkdf-item-space mkdf-masonry-size-large-width"
                          style="position: absolute; left: 0%; top: 887px; height: 413.328px;">
                          <a itemprop="image" title="masonry-small-2-img-4" data-rel="prettyPhoto[single_pretty_photo]"
                            href="{{ asset('storage/'. $post->image_4) }}">
                            <img itemprop="image"
                              src="{{ asset('storage/'. $post->image_4) }}"
                              alt="F">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mkdf-grid-col-4">
                    <div class="mkdf-ps-info-holder mkdf-ps-info-sticky-holder" style="margin-top: 0px;">
                      <div class="mkdf-ps-info-item mkdf-ps-content-item">
                        <div class="vc_row wpb_row vc_row-fluid">
                          <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                              <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <h3 style="margin-top: 0px;">{{ $post->title }}</h3>
                                  </div>
                                </div>
                                <div class="vc_empty_space" style="height: 14px"><span
                                    class="vc_empty_space_inner"></span></div>
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    {!! $post->content !!}
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="mkdf-ps-navigation">
                  <div class="mkdf-ps-prev">
                  @isset($previous)
                    <a href="{{ route('project.view', $previous) }}" rel="prev"><span
                        class="mkdf-ps-nav-mark ion-ios-arrow-thin-left"></span></a>
                    @endisset
                    
                  </div>
                  <div class="mkdf-ps-back-btn">
                    <a itemprop="url" href="/du-an.html">
                      <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                        y="0px" width="27px" height="27px" viewBox="0 0 27 27" enable-background="new 0 0 27 27"
                        xml:space="preserve">
                        <rect x="1.22" y="1.07" fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-miterlimit="10"
                          width="10.367" height="10.367"></rect>
                        <rect x="15.401" y="1.07" fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-miterlimit="10"
                          width="10.366" height="10.367"></rect>
                        <rect x="1.22" y="15.509" fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-miterlimit="10"
                          width="10.367" height="10.366"></rect>
                        <rect x="15.401" y="15.509" fill="none" stroke="#FFFFFF" stroke-width="1.5"
                          stroke-miterlimit="10" width="10.366" height="10.366"></rect>
                      </svg> </a>
                  </div>
                  <div class="mkdf-ps-next">
                    @isset($next)
                    <a href="{{ route('project.view', $next) }}" rel="next"><span
                        class="mkdf-ps-nav-mark ion-ios-arrow-thin-right"></span></a>
                    @endisset
                  </div>
                </div>
                <div class="mkdf-ps-related-posts-holder">
                  <h4 class="mkdf-ps-related-posts-title">Dự án liên quan</h4>
                  @if ($related_item)
                  <div class="mkdf-ps-related-posts">
                      @foreach ($related_item as $item)
                        <div class="mkdf-ps-related-post">
                          <div class="mkdf-ps-related-image">
                            <a itemprop="url" href="{{ route('project.view', $item->slug) }}">
                              <img width="450" height="450"
                                src="{{ asset('storage/' . $item->image) }}"
                                class="attachment-dor_mikado_image_smaller_square size-dor_mikado_image_smaller_square wp-post-image"
                                alt="g" loading="lazy"
                                srcset="{{ asset('storage/' . $item->image) }} 450w, {{ asset('storage/' . $item->image) }} 150w, {{ asset('storage/' . $item->image) }} 650w, {{ asset('storage/' . $item->image) }} 100w"
                                sizes="(max-width: 450px) 100vw, 450px"> </a>
                          </div>
                          <div class="mkdf-ps-related-text">
                            <h5 itemprop="name" class="mkdf-ps-related-title entry-title">
                              <a itemprop="url" href="{{ route('project.view', $item->slug) }}">{{ $item->title }}</a>
                            </h5>
                            <div class="mkdf-ps-related-categories">
                              <span class="mkdf-ps-related-category-outer"><a itemprop="url"
                                  class="mkdf-ps-related-category"
                                  href="#">{{ $item->categories[0]->name }}</a></span>
                            </div>
                          </div>
                        </div>
                        
                    @endforeach
                    </div>
                    @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- End Project content -->
@endsection