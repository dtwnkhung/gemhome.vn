@extends('layouts.apex_page')


@section('content')
<div class="mkdf-content" style="margin-top: -102px">
        <div class="mkdf-content-inner">
          <div class="mkdf-full-width">
            <div class="mkdf-grid-lines-holder mkdf-grid-columns-4 mkdf-grid">
              <div class="mkdf-grid-line mkdf-grid-column-4"></div>
              <div class="mkdf-grid-line mkdf-grid-column-4"></div>
              <div class="mkdf-grid-line mkdf-grid-column-4"></div>
              <div class="mkdf-grid-line mkdf-grid-column-4"></div>
            </div>
            <div class="mkdf-full-width-inner">
              <div class="mkdf-grid-row">
                <div class="mkdf-page-content-holder mkdf-grid-col-12">
                  <div data-parallax-bg-image="/wp-content/uploads/2019/03/main-background-parallax-img-2.jpg"
                    data-parallax-bg-speed="1"
                    class="vc_row wpb_row vc_row-fluid vc_custom_1553010580875 mkdf-parallax-row-holder mkdf-content-aligment-center">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="mkdf-elements-holder   mkdf-one-column  mkdf-responsive-mode-768 ">
                            <div class="mkdf-eh-item    " data-item-class="mkdf-eh-custom-1665" data-769-1024="0 5%"
                              data-681-768="0 5%" data-680="0 40px">
                              <div class="mkdf-eh-item-inner">
                                <div class="mkdf-eh-item-content mkdf-eh-custom-1665">
                                  <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                      <h1>blog tại GEM</h1>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mkdf-row-grid-section-wrapper ">
                    <div class="mkdf-row-grid-section">
                      <div class="vc_row wpb_row vc_row-fluid vc_custom_1553010625321">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                          <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                              <div class="mkdf-section-title-holder  ">
                                <div class="mkdf-st-inner">
                                  <h2 class="mkdf-st-title">
                                    blog tại GEM </h2>
                                  <!-- <h6 class="mkdf-st-subtitle">
                                    Sed ut perspiciatis unde omnis iste sit voluptatem. </h6> -->
                                  <div class="mkdf-st-line"></div>
                                </div>
                              </div>
                              <div class="vc_empty_space" style="height: 90px"><span
                                  class="vc_empty_space_inner"></span></div>
                              <!-- danh sách tin -->

                              <div
                                class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-three-columns mkdf-disable-bottom-space mkdf-normal-space mkdf-bl-pag-no-pagination"
                                data-type=standard data-number-of-posts=3 data-number-of-columns=three
                                data-space-between-items=normal data-category=apartement data-orderby=date
                                data-order=ASC data-image-size=full data-title-tag=h4 data-excerpt-length=0
                                data-post-info-section=yes data-post-info-image=yes data-post-info-author=yes
                                data-post-info-date=no data-post-info-category=no data-post-info-comments=no
                                data-post-info-like=no data-post-info-share=no data-pagination-type=no-pagination
                                data-max-num-pages=1 data-next-page=2>
                                <div class="mkdf-bl-wrapper mkdf-outer-space">
                                  <ul class="mkdf-blog-list">
                                  @if (count($list) > 1)
                                    @foreach ($list as $item)
                                    <li class="mkdf-bl-item mkdf-item-space">
                                      <div class="mkdf-bli-inner">
                                        <div class="mkdf-post-image">
                                          <a itemprop="url" href="{{ route('post.view', $item->slug) }}"
                                            title="{{ $item->title }}">
                                            <img width="370" height="370"
                                              src="{{ asset('storage/' . $item->image) }}"
                                              class="attachment-full size-full" alt="a" /> </a>
                                        </div>
                                        <div class="mkdf-bli-content-main">
                                          <div class="mkdf-bli-content">
                                            <div class="mkdf-bli-info">
                                              <div class="mkdf-post-info-author">
                                              {{ $item->created_at->isoFormat('D/M/YYYY') }}
                                              </div>
                                            </div>
                                            <h4 itemprop="name" class="entry-title mkdf-post-title">
                                              <a itemprop="url" href="{{ route('post.view', $item->slug) }}"
                                                title="{{ $item->title }}">
                                                {{ $item->title }}</a>
                                            </h4>
                                            <div class="mkdf-bli-excerpt">
                                              <div class="mkdf-post-read-more-button">
                                                <a itemprop="url" href="{{ route('post.view', $item->slug) }}" target="_self"
                                                  class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-blog-list-button">
                                                  <span class="mkdf-btn-repeating-linear"></span> <span
                                                    class="mkdf-btn-text">Xem thêm</span> </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                        @endforeach 
                                @endif
                                  </ul>
                                </div>
                              </div>
                              <div class="vc_empty_space" style="height: 90px"><span
                                  class="vc_empty_space_inner"></span></div>

                              <!-- end danh sách tin -->
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
        </div>
      </div>
@endsection