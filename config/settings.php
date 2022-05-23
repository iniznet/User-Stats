<?php

// don't call the file directly
if (! defined('ABSPATH')) {
    exit;
}

// this allow for using wordpress server-side translation
return [
    'sections' => [
        'general'   => __('General', \WPUserStatistics\Main::PREFIX),
        'advanced'  => __('Advanced', \WPUserStatistics\Main::PREFIX),
        'debugging' => __('Debugging', \WPUserStatistics\Main::PREFIX),
    ],
    'options'  => [
        'input'                          => [
            'name'        => __('Input', \WPUserStatistics\Main::PREFIX),
            'description' => __('Simple text input', \WPUserStatistics\Main::PREFIX),
            'section'     => 'general',
            'type'        => 'text',
            'default'     => '',
        ],
        'email'                          => [
            'name'        => __('Email', \WPUserStatistics\Main::PREFIX),
            'description' => __('Email type input', \WPUserStatistics\Main::PREFIX),
            'section'     => 'general',
            'type'        => 'email',
            'default'     => '',
        ],
        'url'                            => [
            'name'        => __('URL', \WPUserStatistics\Main::PREFIX),
            'description' => __('URL input', \WPUserStatistics\Main::PREFIX),
            'section'     => 'general',
            'type'        => 'url',
            'default'     => '',
        ],
        'color'                          => [
            'name'        => __('Color', \WPUserStatistics\Main::PREFIX),
            'description' => __('Color picker', \WPUserStatistics\Main::PREFIX),
            'section'     => 'general',
            'type'        => 'color',
            'default'     => '#000', // empty text means #000 by default anyway so might as well set it
        ],
        'textarea'                       => [
            'name'        => __('Textarea', \WPUserStatistics\Main::PREFIX),
            'description' => __('Simple textarea', \WPUserStatistics\Main::PREFIX),
            'section'     => 'general',
            'type'        => 'textarea',
            'default'     => '',
        ],
        'dropdown'                       => [
            'name'        => __('Select one', \WPUserStatistics\Main::PREFIX),
            'description' => __('Single select dropdown', \WPUserStatistics\Main::PREFIX),
            'section'     => 'general',
            'type'        => 'dropdown',
            'default'     => 'option1',
            'options'     => ['option1', 'option2', 'option3'],
        ],
        'additional_css'                 => [
            'name'        => __('Additional CSS', \WPUserStatistics\Main::PREFIX),
            'description' => __('Add additional CSS to page', \WPUserStatistics\Main::PREFIX),
            'section'     => 'advanced',
            'type'        => 'code',
            'default'     => '',
        ],
        'enable_debug_messages'          => [
            'name'        => __('Enable Debug Messages', \WPUserStatistics\Main::PREFIX),
            'description' => __('When enabled the plugin will output debug messages in the JavaScript console.', \WPUserStatistics\Main::PREFIX),
            'section'     => 'debugging',
            'type'        => 'toggle',
            'default'     => false,
        ],
        'cleanup_db_on_plugin_uninstall' => [
            'name'        => __('Cleanup database upon plugin uninstall', \WPUserStatistics\Main::PREFIX),
            'description' => __('When enabled the plugin will remove any database data upon plugin uninstall.', \WPUserStatistics\Main::PREFIX),
            'section'     => 'advanced',
            'type'        => 'toggle',
            'default'     => false,
        ],
        'include_post_types'             => [
            'name'            => __('Post Types', \WPUserStatistics\Main::PREFIX),
            'description'     => __('Demo multi-select dropdown', \WPUserStatistics\Main::PREFIX),
            'section'         => 'general',
            'type'            => 'dropdownMultiselect',
            'optionsCallback' => function () {
                return get_post_types('', 'names');
            },
            'default'         => ['post', 'page'],
        ],
    ],
];
