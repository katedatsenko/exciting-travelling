<?php
if ( ! defined('FW') ){
    die('Forbidden');
}
$options = array(
    'option_id' => array(
        'type'  => 'text',
        'value' => 'This is default value',
        'label' => __('This is label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('This is description', MY_THEME_TEXTDOMAIN),
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'help'  => __('Read this text to get help...', MY_THEME_TEXTDOMAIN),
    ),
    'body-color' => array(
        'type' => 'color-picker',
        'label' => __('Body Color', MY_THEME_TEXTDOMAIN),
        'value' => '#ADFF2F',
    ),
);