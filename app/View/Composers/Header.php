<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.header',
        'partials.footer',
        'sections.header',
        'sections.footer',
        'index',
        '404'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [

            /**
             * Header
             */
            'header_logo'      => get_field('header_logo', 'option'),
            'header_button'    => get_field('header_button', 'option'),
            'title'             => get_field('title', 'option'),

            /**
             * Footer
             */
            'footer_logo'           => get_field('footer_logo', 'option'),
            'instagram_heading'     => get_field('instagram_heading', 'option'),
            'instagram_account'     => get_field('instagram_account', 'option'),
            'instagram_shortcode'   => get_field('instagram_shortcode', 'option'),
            'contact_number'        => get_field('contact_number', 'option'),
            'email_address'         => get_field('email_address', 'option'),
            'footer_button'         => get_field('footer_button', 'option'),
            'social_icons'          => get_field('social_icons', 'option'),
            'copyright_text'        => get_field('copyright_text', 'option'),
            'rights_reserved_text'  => get_field('rights_reserved_text', 'option'),
            'newsletter_text'       => get_field('newsletter_text', 'option'),
            'newsletter_button'     => get_field('newsletter_button', 'option'),
        ];
    }
}
