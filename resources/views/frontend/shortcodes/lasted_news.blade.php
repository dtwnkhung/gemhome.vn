
@if (count($list) > 1)
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
            @foreach ($list as $item)
            <!-- Item -->
            <li class="mkdf-bl-item mkdf-item-space">
                <div class="mkdf-bli-inner">
                <div class="mkdf-post-image">
                    <a itemprop="url" href="{{ route('post.view', $item->slug) }}"
                    title="How to Reach the Top and Stay There">
                    <img width="415" height="277"
                        src="{{ asset('storage/' . $item->image) }}.jpg"
                        class="attachment-full size-full" alt="a" loading="lazy"
                        srcset="{{ asset('storage/' . $item->image) }} 415w, {{ asset('storage/' . $item->image) }} 300w"
                        sizes="(max-width: 415px) 100vw, 415px" /> </a>
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
                        title="How to Reach the Top and Stay There">
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
@endif