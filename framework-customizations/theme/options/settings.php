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
    'option_regular_text' => array(
        'type'  => 'text',
        'value' => 'Default value',
        'label' => __('Option Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Option Description', MY_THEME_TEXTDOMAIN),
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'help'  => __('Some html that will appear in tip popup', MY_THEME_TEXTDOMAIN),
    ),
    'option_regular_textarea' => array(
        'type'  => 'textarea',
        'value' => 'Default value',
        'label' => __('Option Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Option Description', MY_THEME_TEXTDOMAIN),
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'help'  => __('Some html that will appear in tip popup', MY_THEME_TEXTDOMAIN),
    ),
    'option_single_checkbox' => array(
        'type'  => 'checkbox',
        'value' => true,
        'label' => __('Option Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Option Description', MY_THEME_TEXTDOMAIN),
        'text'  => __('Yes', MY_THEME_TEXTDOMAIN),
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'help'  => __('Some html that will appear in tip popup', MY_THEME_TEXTDOMAIN),
    ),
    'option_single_checkboxes' => array(
        'type'  => 'checkboxes',
        'value' => array(
            'choice-1' => false,
            'choice-2' => true,
        ),
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'label' => __('Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Description', MY_THEME_TEXTDOMAIN),
        'help'  => __('Help tip', MY_THEME_TEXTDOMAIN),
        'choices' => array( // Примечание: избегайте использования ключей bool или int http://bit.ly/1cQgVzk
            'choice-1' => __('Choice 1', MY_THEME_TEXTDOMAIN),
            'choice-2' => __('Choice 2', MY_THEME_TEXTDOMAIN),
            'choice-3' => __('Choice 3', MY_THEME_TEXTDOMAIN),
        ),
        // Display choices inline instead of list
        'inline' => false,
        //'inline' => true,
    ),
    'option_single_radio' => array(
        'type'  => 'radio',
        'value' => 'choice-3',
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'label' => __('Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Description', MY_THEME_TEXTDOMAIN),
        'help'  => __('Help tip', MY_THEME_TEXTDOMAIN),
        'choices' => array( // Примечание: избегайте использования ключей bool или int http://bit.ly/1cQgVzk
            'choice-1' => __('Choice 1', MY_THEME_TEXTDOMAIN),
            'choice-2' => __('Choice 2', MY_THEME_TEXTDOMAIN),
            'choice-3' => __('Choice 3', MY_THEME_TEXTDOMAIN),
        ),
        // Display choices inline instead of list
        'inline' => false,
    ),
);