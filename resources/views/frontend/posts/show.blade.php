@extends('layouts.apex_page')


@section('content')
<div class="mkdf-content mkdf-blog-holder" style="margin-top: -102px; margin-bottom: 0">
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
                                      <h1>tin tức</h1>
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
                              <!-- Chi tiet bai viet -->
                              <article id="post-123"
                                class="post-123 post type-post status-publish format-standard has-post-thumbnail hentry category-interior tag-decor tag-wood">
                                <div class="mkdf-post-content">
                                  <div class="mkdf-post-heading">
                                    <div class="mkdf-post-image">
                                      <img width="1300" height="853"
                                        src="{{ asset('storage/'. $post->image) }}"
                                        class="attachment-full size-full wp-post-image" alt="{{ $post->title }}">
                                    </div>
                                  </div>
                                  <div class="mkdf-post-text">
                                    <div class="mkdf-post-text-inner">
                                      <div class="mkdf-post-info-top">
                                        <div class="mkdf-post-info-author">
                                          <span class="mkdf-post-info-author-text">
                                          {{ $post->created_at->isoFormat('D/M/YYYY') }}</span>
                                        </div>
                                      </div>
                                      <div class="mkdf-post-text-main">
                                        <h3 itemprop="name" class="entry-title mkdf-post-title">
                                          {{ $post->title }} </h3>
                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1559122419084">
                                          <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                              <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                  <div class="wpb_wrapper">
                                                  {!! $post->description !!}
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        {!! $post->content !!}
                                      </div>
                                      <div class="mkdf-post-info-bottom clearfix">
                                        <div class="mkdf-post-info-bottom-left">
                                          <div class="mkdf-blog-share">
                                            <div class="mkdf-social-share-holder mkdf-list">
                                              <ul>
                                                <li class="mkdf-facebook-share">
                                                  <a itemprop="url" class="mkdf-share-link" href="#"
                                                    onclick="window.open('http://www.facebook.com/sharer.php?u={{ route('post.view', $post->slug) }}', 'sharer', 'toolbar=0,status=0,width=620,height=280');">
                                                    <span class="mkdf-social-network-icon social_facebook"></span>
                                                  </a>
                                                </li>
                                                <li class="mkdf-twitter-share">
                                                  <a itemprop="url" class="mkdf-share-link" href="#"
                                                    onclick="window.open('https://twitter.com/share?text=At+vero+eos+et+accusamus+et+iusto+odio+dignis+simos+ducimus+qui+blanditiis+praesentium+voluptatu+deleniti+atque+&amp;url={{ route('post.view', $post->slug) }}', 'popupwindow', 'scrollbars=yes,width=800,height=400');">
                                                    <span class="mkdf-social-network-icon social_twitter"></span>
                                                  </a>
                                                </li>
                                                <li class="mkdf-pinterest-share">
                                                  <a itemprop="url" class="mkdf-share-link" href="#"
                                                    onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url={{ route('post.view', $post->slug) }}&amp;description=wooden-contructasts-a-lifetime&amp;media={{ asset('storage/pages/' . $post->image) }}', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;">
                                                    <span class="mkdf-social-network-icon social_pinterest"></span>
                                                  </a>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="mkdf-post-info-bottom-right">
                                          <div class="mkdf-tags-holder">
                                            <div class="mkdf-tags">
                                            @foreach ($post->tags as $item)
                                                <a href="{{ route('post.view', $item->slug) }}" rel="tag">{{ $item->name }}</a>
                                            @endforeach
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </article>
                              <!-- End chi tiet bai viet -->
                              <div class="vc_empty_space" style="height: 90px"><span
                                  class="vc_empty_space_inner"></span></div>
                              <!-- danh sách tin -->
                              <div class="mkdf-section-title-holder  ">
                                <div class="mkdf-st-inner">
                                  <h2 class="mkdf-st-title"> Bài viết liên quan</h2>
                                  <div class="mkdf-st-line"></div>
                                </div>
                              </div>
                              <div class="vc_empty_space" style="height: 40px"><span
                                  class="vc_empty_space_inner"></span></div>

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
                                  @foreach ($related_post as $item)
                                    <li class="mkdf-bl-item mkdf-item-space">
                                      <div class="mkdf-bli-inner">
                                        <div class="mkdf-post-image">
                                          <a itemprop="url" href="{{ route('post.view', $item->slug) }}"
                                            title="{{ $item->title }}">
                                            <img width="415" height="277"
                                              src="{{ asset('storage/' . $item->image) }}"
                                              class="attachment-full size-full" alt="{{ $item->title }}"/> </a>
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