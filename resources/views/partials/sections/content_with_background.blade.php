@if ($content->hide_section == 'no')
    @if (!empty($content->background_image))
        <section class="{!! $content->extra_class ? $content->extra_class : '' !!} camping_service  py-100 mac:py-80 lgscreentwo:py-60 mdscreen:py-50 bg-cover bg-no-repeat relative z-1" {!! $content->id ? 'id="' . $content->id . '"' : '' !!} style="background-image: url({!! $content->background_image['url'] !!})" >
           
            <div class="container-fluid">
                <div class="camping_service_content p-[55px] mac:p-40 mdscreen:p-30 bg-main_green/[0.8] relative z-2 w-[729px] mdscreen2:w-[90%] mdscreen2:mx-auto my-[31px] mdscreen2:my-20 rounded-10  @if($content->content_position == 'right') {!! 'mr-0 ml-auto' !!} @endif ">
                    @if (!empty($content->heading))
                        <div class="heading_inner">
                            <h2>{!! $content->heading !!}</h2>
                        </div>
                    @endif
                    @if (!empty($content->description))
                        <p>{!! $content->description !!}</p>
                    @endif
                    @if (!empty($content->button))
                        <a href="{!! $content->button['url'] !!}" class="link-btn mt-20">{!! $content->button['title'] !!}</a>
                    @endif
                </div>
            </div>
        </section>
    @endif
@endif
