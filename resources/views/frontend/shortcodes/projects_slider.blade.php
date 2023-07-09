
@if ($list)
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="mkdf-elements-holder   mkdf-one-column  mkdf-responsive-mode-768 ">
                <div class="mkdf-eh-item    " data-item-class="mkdf-eh-custom-5022"
                    data-1367-1600="0 4% 155px 0" data-1025-1366="0 4% 155px 0" data-769-1024="0 4% 155px 4%"
                    data-681-768="0 7.5% 100px 7.5%" data-680="5px 8% 110px 8%">
                    <div class="mkdf-eh-item-inner">
                    <div class="mkdf-eh-item-content mkdf-eh-custom-5022" style="padding: 30px 4% 185px 0">
                        <div class="mkdf-portfolio-slider-holder">
                        <div
                            class="mkdf-portfolio-list-holder mkdf-grid-list mkdf-pl-gallery mkdf-four-columns mkdf-normal-space mkdf-pl-predefined-layout-waves  mkdf-pl-gallery-slide-from-image-bottom    mkdf-pl-pag-no-pagination     mkdf-pag-below-slider "
                            data-type=gallery data-number-of-columns=four data-space-between-items=normal
                            data-number-of-items=9 data-image-proportions=full
                            data-enable-fixed-proportions=no data-enable-image-shadow=no data-tag=company
                            data-orderby=date data-order=ASC data-item-style=gallery-slide-from-image-bottom
                            data-enable-title=yes data-title-tag=h5 data-enable-category=yes
                            data-enable-count-images=yes data-enable-excerpt=no data-excerpt-length=20
                            data-predefined-layout=waves data-pagination-type=no-pagination data-filter=no
                            data-filter-order-by=name data-enable-article-animation=no
                            data-portfolio-slider-on=yes data-enable-loop=yes data-enable-autoplay=yes
                            data-slider-speed=5000 data-slider-speed-animation=800 data-enable-navigation=yes
                            data-enable-pagination=no data-pagination-position=below-slider
                            data-list-is-slider=yes data-custom-stylization=no data-max-num-pages=1
                            data-next-page=2>
                            <div
                            class="mkdf-pl-inner mkdf-outer-space mkdf-owl-slider mkdf-list-is-slider clearfix">
                            @foreach ($list as $item)
                            <!-- Item -->
                            <article
                                class="mkdf-pl-item mkdf-item-space  post-2333 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-living-rooms portfolio-tag-company portfolio-tag-exterior">
                                <div class="mkdf-pl-item-inner">
                                <div class="mkdf-pli-image">
                                    <a itemprop="url" class="mkdf-pli-image-main" href="{{ route('project.view', $item->slug) }}"
                                    target="_self">
                                    <img width="800" height="1316"
                                        src="{{ asset('storage/' . $item->image_1) }}"
                                        class="attachment-full size-full wp-post-image" alt="d" loading="lazy"
                                        srcset="{{ asset('storage/' . $item->image) }} 800w, {{ asset('storage/' . $item->image) }} 182w, {{ asset('storage/' . $item->image) }} 768w, {{ asset('storage/' . $item->image) }} 622w, {{ asset('storage/' . $item->image) }} 300w"
                                        sizes="(max-width: 800px) 100vw, 800px" />
                                    </a>
                                </div>
                                <div class="mkdf-pli-text-holder">
                                    <div class="mkdf-pli-text-wrapper">
                                    <div class="mkdf-pli-text">
                                        <h5 itemprop="name" class="mkdf-pli-title entry-title">
                                        <a itemprop="url" href="{{ route('project.view', $item->slug) }}" target="_self">
                                            {{ $item->title }}
                                        </a>
                                        </h5>
                                        <div class="mkdf-pli-category-holder">
                                        <span class="mkdf-pli-category-outer"><a itemprop="url"
                                            class="mkdf-pli-category" href="{{ route('project.view', $item->slug) }}">
                                            {{ $item->categories[0]->name }}
                                            </a></span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </article>
                            <!-- End Item -->
                        @endforeach
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
    <style>
        .mkdf-portfolio-list-holder article .mkdf-pli-image img {
            min-height: 480px;
        }
    </style>
@endif