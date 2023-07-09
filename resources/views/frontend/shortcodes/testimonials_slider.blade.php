
@if ($list)

    <div class="wpb_wrapper">
        <div class="mkdf-elements-holder   mkdf-three-columns  mkdf-responsive-mode-768 ">
        @foreach ($list as $item)

        <div class="mkdf-eh-item    " data-item-class="mkdf-eh-custom-9932"
            data-1367-1600="95px 90px 0 0" data-1025-1366="95px 90px 0 0"
            data-769-1024="95px 15px 0px 0px" data-681-768="70px 90px 5px 90px"
            data-680="70px 0 5px 0">
            <div class="mkdf-eh-item-inner">
            <div class="mkdf-eh-item-content mkdf-eh-custom-9932"
                style="padding: 95px 110px 0 0">
                <div class="mkdf-team-holder mkdf-team-info-below-image">
                <div class="mkdf-team-inner">
                    <div class="mkdf-team-image">
                    <img width="800" height="800"
                        src="{{ asset('storage/' . $item->image) }}"
                        class="attachment-full size-full" alt="d" loading="lazy"
                        srcset="{{ asset('storage/' . $item->image) }} 800w, {{ asset('storage/' . $item->image) }} 150w, {{ asset('storage/' . $item->image) }} 300w, {{ asset('storage/' . $item->image) }} 768w, {{ asset('storage/' . $item->image) }} 650w, {{ asset('storage/' . $item->image) }} 450w, {{ asset('storage/' . $item->image) }} 100w"
                        sizes="(max-width: 800px) 100vw, 800px" />
                    </div>
                    <div class="mkdf-team-info-main">
                    <div class="mkdf-team-info">
                        <h5 class="mkdf-team-name">
                        {{ $item->title }} </h5>
                        <h6 class="mkdf-team-position">{{ $item->description }}</h6>
                        <div class="mkdf-team-social-holder">
                        {!! $item->contenthtml !!}
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        
        <!-- End Item -->
        @endforeach

        </div>
    </div>
    
@endif