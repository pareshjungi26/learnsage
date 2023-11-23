<div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <header>
        <div class="top-bar py-12 bg-main_green">
            <div class="container-fluid">
                <div class="flex mdscreen:flex-col justify-between mdscreen:justify-center items-center">
                    <p class="text-white">This is the first example of a sitewide notice, which is used to display messages or announcements to your website’s visitors.</p>
                    <div class="search-bar">
                        <input type="search" id="gsearch" name="gsearch">
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main py-16">
            <div class="container-fluid">
                <div class="header-navbar flex justify-between items-center relative xlscreen:gap-15">
                    @if (!empty($header_logo))
                    <div class="header-logo">
                        <a href="{!! esc_url(home_url()) !!}" title="{!! get_bloginfo('name') !!}"><img src="{!! $header_logo['url'] !!}" alt="{!! $header_logo['alt'] !!}"></a>
                    </div>
                    @endif
                    <div class="header-menu">
                        <nav>
                            <button class="menubtn 1200:hidden"><img src="../assets/images/menu.png"></button>
                            <ul class="menu_wrap">
                                <li><a href="#0">About Us</a></li>
                                <li>
                                    <a href="#0">Vehicles & Amenities</a>
                                    <ul class="submenu">
                                        <li><a href="#0"> Camper Van Rental</a></li>
                                    </ul>
                                </li>
                                <li><a href="#0">Exploring the Magic of Maui</a></li>
                                
                                <li>
                                    <a href="#0">Plan Your Trip</a>
                                    <ul class="submenu">
                                        <li><a href="#0"> Camp Sites</a></li>
                                        <li><a href="#0"> Local Activities</a></li>
                                        <li><a href="#0"> Recommendations</a></li>
                                        <li><a href="#0"> Useful Links</a></li>
                                    </ul>
                                </li>
                                <li><a href="#0">Blog</a></li>
                                <li><a href="#0">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-btn flex gap-20 items-center">
                        @if(!empty($header_button))
                        <a href="{!! $header_button['url'] !!}" class="link-btn">{!! $header_button['title'] !!}</a>
                        @endif
                        <a href="#0" class="header-icon text-dark_green"><i class="fa-solid fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>