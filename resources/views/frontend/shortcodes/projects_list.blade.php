
@if ($list)

<div class="vc_row wpb_row vc_row-fluid vc_custom_1551867590443">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="mkdf-portfolio-list-holder mkdf-grid-list mkdf-pl-gallery mkdf-four-columns mkdf-no-space  mkdf-disable-bottom-space mkdf-pl-gallery-overlay    mkdf-pl-pag-no-pagination      " data-type="gallery" data-number-of-columns="four" data-space-between-items="no" data-number-of-items="-1" data-image-proportions="full" data-enable-fixed-proportions="no" data-enable-image-shadow="no" data-tag="architecture" data-orderby="date" data-order="ASC" data-item-style="gallery-overlay" data-enable-title="yes" data-title-tag="h5" data-enable-category="yes" data-enable-count-images="yes" data-enable-excerpt="no" data-excerpt-length="20" data-pagination-type="no-pagination" data-filter="no" data-filter-order-by="name" data-enable-article-animation="no" data-portfolio-slider-on="no" data-enable-loop="yes" data-enable-autoplay="yes" data-slider-speed="5000" data-slider-speed-animation="800" data-enable-navigation="yes" data-enable-pagination="yes" data-list-is-slider="no" data-custom-stylization="no" data-max-num-pages="0" data-next-page="2">
                    <div class="mkdf-pl-inner mkdf-outer-space  clearfix">
                        @foreach ($list as $item)
                            <!-- Item -->
                            <article class="mkdf-pl-item mkdf-item-space  post-517 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-projects portfolio-tag-architecture">
                                <div class="mkdf-pl-item-inner">
                                    <div class="mkdf-pli-image">
                                    <a itemprop="url" class="mkdf-pli-image-main" href="{{ route('project.view', $item->slug) }}" target="_self">
                                        <img width="800" height="667" src="{{ asset('storage/' . $item->image) }}"
                                        class="attachment-full size-full wp-post-image"
                                        alt="D"
                                        loading="lazy"
                                        srcset="{{ asset('storage/' . $item->image) }} 800w, {{ asset('storage/' . $item->image) }} 300w, {{ asset('storage/' . $item->image) }} 768w" sizes="(max-width: 800px) 100vw, 800px"> </a>
                                    </div>
                                    <div class="mkdf-pli-text-holder">
                                    <div class="mkdf-pli-text-wrapper">
                                        <div class="mkdf-pli-text">
                                        <h5 itemprop="name" class="mkdf-pli-title entry-title">
                                            <a itemprop="url" href="{{ route('project.view', $item->slug) }}" target="_self">
                                            {{ $item->title }} </a>
                                        </h5>
                                        <div class="mkdf-pli-category-holder">
                                            <span class="mkdf-pli-category-outer"><a itemprop="url" class="mkdf-pli-category" href="#">
                                            {{ $item->categories[0]->name }}
                                            </a></span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <a itemprop="url" class="mkdf-pli-link mkdf-block-drag-link" href="{{ route('project.view', $item->slug) }}" target="_self"></a>
                                </div>
                            </article>
                            <!-- End Item -->
                            @endforeach
                    </div>
                            <div class="text-center readmore_project" style="padding: 60px 60px 0 60px;display: flex;flex-basis: 100%;justify-content: center;">
                                <a itemprop="url" href="/du-an.html" target="_self" class="mkdf-btn mkdf-btn-medium mkdf-btn-solid">
                                  <span class="mkdf-btn-border-holder"></span>
                                  <span class="mkdf-btn-line-holder"></span>
                                  <span class="mkdf-btn-text">Xem dự án</span>
                                </a>
                              </div> <!-- ./readmore_project -->
                </div>
            </div>
        </div>
    </div>
</div>
@endif