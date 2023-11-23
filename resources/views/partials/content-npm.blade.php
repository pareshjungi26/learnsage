@if ($npmContetData)
    @foreach ($npmContetData as $content)
        @if ($content->layout == 'hero_section')
            @include('partials.sections.hero_section')
        @elseif($content->layout == 'travel_section')
            @include('partials.sections.travel_section')
        @elseif($content->layout == 'content_with_background')
            @include('partials.sections.content_with_background')
        @elseif($content->layout == 'vehicle_slider')
            @include('partials.sections.vehicle_slider')
        @endif
    @endforeach
@endif
