<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "skgp_options";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'SKGP Setting', 'redux-framework-demo' ),
        'page_title'           => __( 'SKGP Setting', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    // Redux::setSection( $opt_name, array(
    //     'title'  => __( 'Basic Field', 'redux-framework-demo' ),
    //     'id'     => 'basic',
    //     'desc'   => __( 'Basic field with no subsections.', 'redux-framework-demo' ),
    //     'icon'   => 'el el-home',
    //     'fields' => array(
    //         array(
    //             'id'       => 'opt-text',
    //             'type'     => 'text',
    //             'title'    => __( 'Example Text', 'redux-framework-demo' ),
    //             'desc'     => __( 'Example description.', 'redux-framework-demo' ),
    //             'subtitle' => __( 'Example subtitle.', 'redux-framework-demo' ),
    //             'hint'     => array(
    //                 'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
    //             )
    //         )
    //     )
    // ) );

    // Redux::setSection( $opt_name, array(
    //     'title' => __( 'Basic Fields', 'redux-framework-demo' ),
    //     'id'    => 'basic',
    //     'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
    //     'icon'  => 'el el-home'
    // ) );

    // Redux::setSection( $opt_name, array(
    //     'title'      => __( 'Text', 'redux-framework-demo' ),
    //     'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/text/</a>',
    //     'id'         => 'opt-text-subsection',
    //     'subsection' => true,
    //     'fields'     => array(
    //         array(
    //             'id'       => 'text-example',
    //             'type'     => 'text',
    //             'title'    => __( 'Text Field', 'redux-framework-demo' ),
    //             'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
    //             'desc'     => __( 'Field Description', 'redux-framework-demo' ),
    //             'default'  => 'Default Text',
    //         ),
    //     )
    // ) );

    // Redux::setSection( $opt_name, array(
    //     'title'      => __( 'Text Area', 'redux-framework-demo' ),
    //     'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">//docs.reduxframework.com/core/fields/textarea/</a>',
    //     'id'         => 'opt-textarea-subsection',
    //     'subsection' => true,
    //     'fields'     => array(
    //         array(
    //             'id'       => 'textarea-example',
    //             'type'     => 'textarea',
    //             'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
    //             'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
    //             'desc'     => __( 'Field Description', 'redux-framework-demo' ),
    //             'default'  => 'Default Text',
    //         ),
    //     )
    // ) );

        Redux::setSection($opt_name,array(
            'id'=>'header_options',
            'title'=>'Header Options',
            'desc'=> 'This is the header options',
            'icon'=>'el el-home-alt'
            ));
        Redux::setSection($opt_name,array(
            'id'=>'header_sub_option',
            'title'=>'Logo Options',
            'subsection'=>true,
            'fields'=>array(
                array(
                    'id'=>'site_logo_one',
                    'title'=>'Home  Page Logo',
                    'url'=>true,
                    'desc'=>'Upload your logo',
                    'type'=>'media',
                    'default'=>array(
                        'url'=>get_template_directory_uri().'/images/logo1.png'
                        )
                    ),
                array(
                    'id'=>'site_logo_two',
                    'title'=>'All Page Logo',
                    'url'=>true,
                    'desc'=>'Upload your logo',
                    'type'=>'media',
                    'default'=>array(
                        'url'=>get_template_directory_uri().'/images/logo-white2.png'
                        )
                    )
                ,
                array(
                    'id'=>'site_favicon',
                    'title'=>'SkGP Favicon',
                    'url'=>true,
                    'desc'=>'Upload your favicon',
                    'type'=>'media',
                    'default'=>array(
                        'url'=>get_template_directory_uri().'/images/favicon.png'
                        )
                    )
                )
            ));

        Redux::setSection($opt_name,array(
            'id'=>'footer_options',
            'title'=>'Footer Options',
            'desc'=> 'This is the footer options',
            'icon'=>'el el-folder'
            ));
        Redux::setSection($opt_name,array(
            'id'=>'footer_sub_option',
            'title'=>'Contact Options',
            'subsection'=>true,
            'fields'=>array(
                array(
                    'id'=>'footer_logo',
                    'title'=>'Footer Logo',
                    'url'=>true,
                    'desc'=>'Upload your footer logo',
                    'type'=>'media',
                    'default'=>array(
                        'url'=>get_template_directory_uri().'/images/logo-white2.png'
                        )
                    ),
                array(
                    'id'=>'footer_address',
                    'title'=>'Address',
                    'desc'=>'Your Address',
                    'type'=>'textarea',
                    'default' => 'Some HTML is allowed in here.'
                    ),
                array(
                    'id'=>'footer_phone',
                    'title'=>'Contact Number',
                    'desc'=>'Your Contact Number',
                    'type'=>'text',
                    'default' => '0987654321'
                    ),
                array(
                    'id'=>'footer_email',
                    'title'=>'Email Address',
                    'desc'=>'Your Email Address',
                    'type'=>'text',
                    'default' => 'test@gmail.com'
                    ),
                array(
                    'id'=>'footer_website',
                    'title'=>'Website URL',
                    'desc'=>'Your Website URL',
                    'type'=>'text',
                    'default' => 'http://wwww.abc.com'
                    )
                )
            ));
        Redux::setSection($opt_name,array(
            'id'=>'footer_sub_option_two',
            'title'=>'Connect With US Options',
            'subsection'=>true,
            'fields'=>array(
               array(
                    'id'=>'connect_facebook',
                    'title'=>'Facebook Page URL',
                    'desc'=>'Your facebook page URL',
                    'type'=>'text',
                    'default' => 'http://wwww.abc.com'
                    ),
               array(
                    'id'=>'connect_twitter',
                    'title'=>'Twitter URL',
                    'desc'=>'Your twitter URL',
                    'type'=>'text',
                    'default' => 'http://wwww.abc.com'
                    ),
               array(
                    'id'=>'connect_youtube',
                    'title'=>'Youtube URL',
                    'desc'=>'Your youtube URL',
                    'type'=>'text',
                    'default' => 'http://wwww.abc.com'
                    ),
               array(
                    'id'=>'connect_instagram',
                    'title'=>'Instagram URL',
                    'desc'=>'Your instagram URL',
                    'type'=>'text',
                    'default' => 'http://wwww.abc.com'
                    )
                )
            ));
        Redux::setSection($opt_name,array(
            'id'=>'footer_sub_option_copy',
            'title'=>'Copy Right Options',
            'subsection'=>true,
            'fields'=>array(
               array(
                    'id'=>'copy_right_year',
                    'title'=>'Copy Right Year',
                    'desc'=>'Your Copy Right',
                    'type'=>'text',
                    'default' => 'Copyright: 2018'
                    ),
               array(
                    'id'=>'copy_website_name',
                    'title'=>'Copy Right Website Name',
                    'desc'=>'Your Copy Right Website Name',
                    'type'=>'text',
                    'default' => 'GetWebSoftware'
                    ),
               array(
                    'id'=>'copy_website_url',
                    'title'=>'Copy Right Website URL',
                    'desc'=>'Your Copy Right Website URL',
                    'type'=>'text',
                    'default' => 'http://www.getwebsoftware.com/'
                    )
               ,
               array(
                    'id'=>'copy_right_text',
                    'title'=>'Copy Right Text',
                    'desc'=>'Your Copy Right Text',
                    'type'=>'text',
                    'default' => 'All Rights Reserved'
                    )

                )
            ));
        Redux::setSection($opt_name,array(
            'id'=>'header_footer_options',
            'title'=>'Header Footer Contact',
            'desc'=> 'This is the footer options',
            'icon'=>'el el-group'
            ));
        Redux::setSection($opt_name,array(
            'id'=>'header_footer_options_field',
            'title'=>'Header Footer Options',
            'subsection'=>true,
            'fields'=>array(
               array(
                    'id'=>'contact_phone_number',
                    'title'=>'Phone Number',
                    'desc'=>'Your Phone Number',
                    'type'=>'text',
                    'default' => '1234567890'
                    ),
               array(
                    'id'=>'contact_location',
                    'title'=>'Address',
                    'desc'=>'Your Address',
                    'type'=>'editor',
                    'default' => '<ul>
                                  <li> <h4>SKGP Homes</h4> </li>
                                    <li>
                                      <p class="p-font-15">Gurgaon,India</p>
                                    </li>
                                  </ul>'
                    ),
               array(
                    'id'=>'contact_email_addr',
                    'title'=>'Email Id',
                    'desc'=>'Your Email Id',
                    'type'=>'text',
                    'default' => 'abc@gmail.com'
                    )

                )
            ));
    /*
     * <--- END SECTIONS
     */
