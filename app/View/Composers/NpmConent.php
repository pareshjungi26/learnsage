<?php

namespace App\View\Composers;

use Illuminate\Support\Arr;
use Roots\Acorn\View\Composer;

class NpmConent extends Composer
{

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
        'partials.content-npm',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'npmContetData' => $this->npmContetData(),
        ];
    }

    public function npmContetData()
    {
        $data = [];
        $flexible_content = get_field('page_content');
        if ($flexible_content) {
            foreach ($flexible_content as $content) {
                if ($content['acf_fc_layout'] == 'hero_section') {
                    $this_content = (object) [
                        'layout'            => $content['acf_fc_layout'],
                        'main_heading'    => $content['main_heading'],
                        'sub_heading'  => $content['sub_heading'],
                        'hero_background_image'      => $content['hero_background_image'],
                        'button'            => $content['button'],
                        'id'                => $content['id'],
                        'extra_class'       => $content['extra_class'],
                        'hide_section'      => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'travel_section') {
                    $this_content = (object) [
                        'layout'            => $content['acf_fc_layout'],
                        'main_heading'      => $content['main_heading'],
                        'sub_heading'       => $content['sub_heading'],
                        'travel_box'        => $content['travel_box'],
                        'id'                => $content['id'],
                        'extra_class'       => $content['extra_class'],
                        'hide_section'      => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'content_with_background') {
                    $this_content = (object) [
                        'layout'            => $content['acf_fc_layout'],
                        'background_image'  => $content['background_image'],
                        'heading'           => $content['heading'],
                        'description'       => $content['description'],
                        'button'            => $content['button'],
                        'content_position'  => $content['content_position'],
                        'id'                => $content['id'],
                        'extra_class'       => $content['extra_class'],
                        'hide_section'      => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'vehicle_slider') {
                    $this_content = (object) [
                        'layout'            => $content['acf_fc_layout'],
                        'main_heading'      => $content['main_heading'],
                        'sub_heading'       => $content['sub_heading'],
                        'short_content'     => $content['short_content'],
                        'vehicle_button'    => $content['vehicle_button'],
                        'vehicle_slide'     => $content['vehicle_slide'],                    
                        'id'                => $content['id'],
                        'extra_class'       => $content['extra_class'],
                        'hide_section'      => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }

            }
        }
        return $data;
    }
}