
@if ($list)

    <div class="mkdf-clients-carousel-holder mkdf-cc-hover-roll-over">
        <div class="mkdf-cc-inner mkdf-owl-slider" data-number-of-items="5"
            data-enable-loop="yes" data-enable-autoplay="yes" data-slider-speed="4000"
            data-slider-speed-animation="600" data-enable-navigation="no"
            data-enable-pagination="no">
                @foreach ($list as $item)
                    <!-- Item -->
                    <div class="mkdf-cc-item mkdf-item-space mkdf-cci-has-link">
                        <div class="mkdf-cc-item-content">
                            <a itemprop="url" class="mkdf-cc-link mkdf-block-drag-link" href="{{ $item->link }}"
                            target="_self">
                            <img itemprop="image" class="mkdf-cc-image"
                                src="{{ asset('storage/' . $item->image_1) }}" alt="d" />
                            <img itemprop="image" class="mkdf-cc-hover-image"
                                src="{{ asset('storage/' . $item->image) }}" alt="d" />
                            </a>
                        </div>
                    </div>
                    <!-- End Item -->
                @endforeach
        </div>
    </div>
    
@endif