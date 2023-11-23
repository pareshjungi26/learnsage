@if ($content->hide_section == 'no')
    <section
        class="trip_step py-80 lgscreentwo:py-60 mdscreen:py-40 smscreen:py-30 px-260 mac:px-[180px] xlscreen:px-80 lgscreentwo:px-60 mdscreen:px-40 bg-main_green relative z-1">
        <div class="container-fluid !px-0">
            <div class="heading_inner relative text-center mx-auto">
                @if (!empty($content->sub_heading))
                    <span>{!! $content->sub_heading !!}</span>
                @endif
                @if (!empty($content->main_heading))
                    <h2>{!! $content->main_heading !!}</h2>
                @endif
            </div>
        </div>
        <div
            class="trip_step_inner grid mdscreen:flex mdscreen:flex-col grid-cols-12 mt-60 gap-[86px] mac:gap-[70px] xlscreen:gap-[45px] mdscreen2:gap-[30px] relative z-1">
            @foreach ($content->travel_box as $travel)
                <div class="step_box">
                    <span>{!! $travel['number'] !!}</span>
                    <img src="{!! $travel['image']['url'] !!}" alt="{!! $travel['image']['alt'] !!}" />
                    <h4>{!! $travel['title'] !!}</h4>
                </div>
            @endforeach
        </div>
    </section>
@endif
