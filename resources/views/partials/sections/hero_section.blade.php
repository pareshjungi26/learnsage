@if ($content->hide_section == 'no')
    <section class="hero_sec relative overflow-hidden leading-none">
        @if (!empty($content->hero_background_image))
            <div class="hero_img relative leading-0">
                <img src="{!! $content->hero_background_image['url'] !!}" alt="{!! $content->hero_background_image['alt'] !!}">
            </div>
        @endif
        <div class="hero_content">
            @if (!empty($content->main_heading))
                <h1>{!! $content->main_heading !!}</h1>
            @endif
            @if (!empty($content->sub_heading))
                <p>{!! $content->sub_heading !!}</p>
            @endif
            @if (!empty($content->button))
                <a href="{!! $content->button['url'] !!}" class="link-btn">{!! $content->button['title'] !!}</a>
            @endif
        </div>
    </section>
@endif
