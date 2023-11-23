@if ($content->hide_section == 'no')
    <section {!! $content->id ? 'id="' . $content->id . '"' : '' !!}
        class=" {!! $content->extra_class ? $content->extra_class : '' !!} camp-site relative z-1 py-80 lgscreentwo:py-60 mdscreen:py-40 smscreen:py-30">
        <div class="container-fluid minmdscreen:!px-0">
            <div class="text-center w-[510px] smscreen2:w-[90%] mx-auto mb-40">
                @if (!empty($content->main_heading))
                    <div class="heading_inner relative text-center mx-auto">
                        <h2>{!! $content->main_heading !!}</h2>
                        <span>{!! $content->sub_heading !!}</span>
                    </div>
                @endif
                <p>{!! $content->short_content !!}</p>
            </div>
            <div class="swiper campsite_swiper mdscreen:w-[90%] mdscreen:mx-auto">
                <div class="swiper-wrapper">
                    @foreach ($content->vehicle_slide as $slide)
                    <div class="swiper-slide">
                        <div class="camp_site_inner">
                            <div class="campsite_img">
                                <img src="{!! $slide['vehicle_image']['url'] !!}">
                            </div>
                            <div class="campsite_content">
                                <div class="campsite_content_inner">
                                    <h2>Maggie</h2>
                                    <h4>Strong In Spirit, Mind And Navigating</h4>
                                    <ul>
                                        <li>Automatic max. 2 ppl</li>
                                        <li>Full Foam Mattress with Topper</li>
                                        <li>Sheets, Pillows, Blanket, Beach Towels</li>
                                        <li>Cooler, Camp Chairs, 2 Burner Camp stove with Propane</li>
                                        <li>Cutlery, Cookware, Hammock, Body Wash</li>
                                        <li>Sun Shades</li>
                                        <li>Maui Revealed Book and Full Size Map</li>
                                        <li>Auxiliary and USB outlet</li>
                                        <li>A/C</li>
                                    </ul>
                                    <a href="#0" class="link-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper_navigation">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="mt-60 text-center view_btn">
                <a href="#0" class="link-btn">View all Vehicles</a>
            </div>
        </div>
    </section>
@endif
