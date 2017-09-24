
<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

function stock_theme_metabox($options){
    $options      = array(); // remove old options

    // page metabox options
    $options[]    = array(
        'id'        => 'stock_page_options',
        'title'     => 'Page Options',
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'high',
        'sections'    => array(

            // begin a section
            array(
                'name'  => 'stock_page_options_meta',
                'icon' => 'fa fa-cog',

                // begin : fields
                'fields' => array(

                    // begin a field
                    array(
                        'id' => 'enable_title',
                        'type' => 'switcher',
                        'title' => 'Enable page title?',
                        'default' => true,
                        'desc' => esc_html__('If you want to enable title, select yes.', 'stock-mr')
                    ),

                    array(
                        'id'=>'enable_content',
                        'type'=>'switcher',
                        'title'=> 'Enable Content?',
                        'default'=> false,
                        'desc'=> esc_html__('If you want to enable content , select yes.', 'stock-mr'),
                    ),

                    array(
                        'id'        => 'unique_option_4002',
                        'type'      => 'typography',
                        'title'     => 'Typography Field',
                        'default'   => array(
                        'family'    => 'Open Sans',
                        'variant'   => '800',
                        'font'      => 'google', // this is helper for output
                        ),
                    ),
                )
            )
        )
    );
    return $options;
}
add_filter('cs_metabox_options', 'stock_theme_metabox');

