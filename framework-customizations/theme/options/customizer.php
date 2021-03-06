<?php

if ( ! defined('FW') ){
    die('Forbidden');
}
$options = array(
    'body-color' => array(
        'type' => 'color-picker',
        'label' => __('Body Color', MY_THEME_TEXTDOMAIN),
        'value' => '#2ff1ff',
    ),
    'section_1' => array(
        'title' => __('Unyson Section', MY_THEME_TEXTDOMAIN),
        'options' => array(
            'option_1' => array(
                'type' => 'text',
                'value' => 'Default Value',
                'label' => __('Unyson Option 1', MY_THEME_TEXTDOMAIN),
                'desc' => __('Option Description', MY_THEME_TEXTDOMAIN),
            ),
            'option_2' => array(
                'type' => 'text',
                'value' => 'Default Value',
                'label' => __('Unyson Option 2', MY_THEME_TEXTDOMAIN),
                'desc' => __('Option Description', MY_THEME_TEXTDOMAIN),

                'wp-customizer-args' => array(
                    'priority' => 3,
                ),
            ),

        ),
    ),
    'panel_1' => array(
        'title' => __('Unyson Panel', MY_THEME_TEXTDOMAIN),
        'options' => array(
            'section_11' => array(
                'title' => __('Unyson Section #1', MY_THEME_TEXTDOMAIN),
                'options' => array(
                    'option_11' => array(
                        'type' => 'text',
                        'value' => 'Default Value',
                        'label' => __('Unyson Option #1', MY_THEME_TEXTDOMAIN),
                        'desc' => __('Option Description', MY_THEME_TEXTDOMAIN),
                    ),
                ),
            ),
            'section_22' => array(
                'title' => __('Unyson Section #2', MY_THEME_TEXTDOMAIN),
                'options' => array(
                    'option_22' => array(
                        'type' => 'text',
                        'value' => 'Default Value',
                        'label' => __('Unyson Option #2', MY_THEME_TEXTDOMAIN),
                        'desc' => __('Option Description', MY_THEME_TEXTDOMAIN),
                    ),
                    'option_33' => array(
                        'type' => 'text',
                        'value' => 'Default Value',
                        'label' => __('Unyson Option #3', MY_THEME_TEXTDOMAIN),
                        'desc' => __('Option Description', MY_THEME_TEXTDOMAIN),
                    ),
                ),
            ),
            'section_33' => array(
                'title' => __('Unyson Section #3', MY_THEME_TEXTDOMAIN),
                'options' => array(
                    'option_44' => array(
                        'type' => 'text',
                        'value' => 'Default Value',
                        'label' => __('Unyson Option #4', MY_THEME_TEXTDOMAIN),
                        'desc' => __('Option Description', MY_THEME_TEXTDOMAIN),
                    ),
                    'option_55' => array(
                        'type' => 'text',
                        'value' => 'Default Value',
                        'label' => __('Unyson Option #5', MY_THEME_TEXTDOMAIN),
                        'desc' => __('Option Description', MY_THEME_TEXTDOMAIN),
                    ),
                ),
            ),
        ),
    ),

);