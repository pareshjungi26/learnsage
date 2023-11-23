<section class="follow_instagram relative py-40 bg-main_green z-1">
        <div class="container-fluid">
            <div class="row flex flex-wrap gap-[160px]">
                <div class="insta_heading">
                    @if (!empty($instagram_heading))
                    <div class="heading_inner">
                        <h2>{!!$instagram_heading!!}</h2>
                    </div>
                    @endif
                    @if(!empty($instagram_account))
                    <p>{!!$instagram_account!!}</p>
                    @endif
                </div>
                @if(!empty($instagram_shortcode))
                <div class="insta_feed">
                    {!! $instagram_shortcode !!}
                </div>
                @endif
            </div>
        </div>
</section>
<footer>
        <div class="footer_top relative bg-dark_green py-80 lgscreentwo:py-60 mdscreen:py-50 smscreen:py-40 pl-[118px] pr-[272px] 1400:px-[118px] xlscreen:px-80 mdscreen2:px-[60px] mdscreen:px-30">
            <div class="footer-row grid grid-cols-12 gap-[100px] 1400:gap-[60px] xlscreen:gap-[40px] mdscreen:gap-[12px]">
                <div class="f_logo col-span-4 mdscreen:col-span-12 flex flex-col gap-20">
                    @if (!empty($footer_logo))
                    <img src="{!! $footer_logo['url'] !!}" class="w-fit" alt="{!! $footer_logo['alt'] !!}">
                    @endif
                    <div class="contact_us_inner">
                        @if (!empty($contact_number))
                        <div class="connect_box flex flex-wrap gap-2">
                            <span>Call:</span> 
                            <a href="tel:{!! $contact_number !!}"> {!! $contact_number !!} </a>
                        </div>
                        @endif
                        @if (!empty($email_address))
                        <div class="connect_box flex flex-wrap gap-2">
                            <span>Email:</span>  
                            <a href="mailto:{!!$email_address!!}" target="_blank">{!!$email_address!!}</a>
                        </div>
                        @endif
                    </div>
                    @if (!empty($footer_button))
                    <a href="{!!$footer_button['url']!!}" class="link-btn w-fit !mt-0">{!!$footer_button['title']!!}</a>
                    @endif
                    <ul class="social_link">
                        @foreach ($social_icons as $icon)
                        <li>
                            <a href="{!! $icon['link'] !!}" target="_blank"> <img src="{!! $icon['icon']['url'] !!}"
                                alt="icon"></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="main_link col-span-4 mdscreen:col-span-12 flex flex-rap items-center">
                    <ul>
                        <li><a href="#0">Vehicles & Amenities</a></li>
                        <li><a href="#0">Exploring the magic</a></li>
                        <li><a href="#0">Plan Your Trip</a></li>
                    </ul>
                </div>
                <div class="footer_menu col-span-4 mdscreen:col-span-12 flex flex-wrap items-center justify-between">
                    <ul>
                        <li><a href="#0">about</a></li>
                        <li><a href="#0">Blog</a></li>
                        <li><a href="#0">Contact</a></li>
                        <li><a href="#0">FAQ</a></li>
                        <li><a href="#0">Terms & Conditions</a></li>
                        <li><a href="#0">Camper Van Rental</a></li>
                        <li><a href="#0">Camp Sites</a></li>
                        <li><a href="#0">Local Activities</a></li>
                        <li><a href="#0">Recommendations</a></li>
                        <li><a href="#0">Useful Links</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_bottom relative px-[105px] py-[24px] xlscreen:px-80">
            <div class="footer-row flex flex-wrap 1200:justify-between justify-center gap-10 items-center">
                <div class="f_copyright xlscreen:order-2">
                    <p>©Copyright 2020-2021 Go Camp Maui. LLC. All Rights Reserved</p>
                </div>
                <div class="f_signup flex flex-wrap justify-center gap-20 mdscreen:gap-10 items-center xlscreen:order-1">
                    <p>Sign up for our newsletter for the latest adventure information</p>
                    <a href="#0" class="link-btn">sign up</a>
                </div>
            </div>
        </div>
    </footer>