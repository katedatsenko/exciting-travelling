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
    'option_single_select' => array(
        'type'  => 'select',
        'value' => 'choice-3',
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'label' => __('Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Description', MY_THEME_TEXTDOMAIN),
        'help'  => __('Help tip', MY_THEME_TEXTDOMAIN),
        'choices' => array(
            '' => '---',
            'choice-1' => __('Choice 1', MY_THEME_TEXTDOMAIN),
            'choice-2' => array(
                'text' => __('Choice 2', MY_THEME_TEXTDOMAIN),
                'attr' => array('data-foo' => 'bar'),
            ),
            array( // optgroup
                'attr'    => array('label' => __('Group 1', MY_THEME_TEXTDOMAIN)),
                'choices' => array(
                    'choice-3' => __('Choice 3', MY_THEME_TEXTDOMAIN),
                    // ...
                ),
            ),
        ),
        /**
         * Разрешить сохранение не существующих вариантов
         * Полезно, когда вы используете select для его динамического заполнения из js
         */
        'no-validate' => false,
    ),
    'option_select_multiple' => array(
        'type'  => 'select-multiple',
        'value' => array( 'choice-1', 'choice-3' ),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Description', MY_THEME_TEXTDOMAIN),
        'help'  => __('Help tip', MY_THEME_TEXTDOMAIN),
        'choices' => array(
            '' => '---',
            'choice-1' => __('Choice 1', MY_THEME_TEXTDOMAIN),
            'choice-2' => array(
                'text' => __('Choice 2', MY_THEME_TEXTDOMAIN),
                'attr' => array('data-foo' => 'bar'),
            ),
            array( // optgroup
                'attr'    => array('label' => __('Group 1', MY_THEME_TEXTDOMAIN)),
                'choices' => array(
                    'choice-3' => __('Choice 3', MY_THEME_TEXTDOMAIN),
                    // ...
                ),
            ),
        ),
    ),
    'option_select_multi_select' => array(
        'type'  => 'multi-select',
        'value' => array( 'choice-1', 'choice-3' ),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        /**
         * Set population method
         * Доступны: 'posts', 'taxonomy', 'users', 'array'
         */
        'population' => 'array',
        /**
         * Установить post types, taxonomies, user roles для поиска
         *
         * 'population' => 'posts'
         * 'source' => 'page',
         *
         * 'population' => 'taxonomy'
         * 'source' => 'category',
         *
         * 'population' => 'users'
         * 'source' => array( 'editor', 'subscriber', 'author' ),
         *
         * 'population' => 'array'
         * 'source' => '' // will populate with 'choices' array
         */
        'source' => '',
        //'population' => 'posts',
        //'source' => 'post',
        /**
         * Установите количество posts/users/taxonomies, которые будут выбраны с множественным выбором
         * Или установите значение false, чтобы отключить эту функцию.
         */
        'prepopulate' => 10,
        /**
         * Массив с доступными вариантами выбора
         * Используется только тогда, когда 'population' => 'array'
         */
        'choices' => array(
            'choice-1' => __('Choice 1', '{domain}'),
            'choice-2' => __('Choice 2', '{domain}'),
            'choice-3' => __('Choice 3', '{domain}'),
        ),
        /**
         * Установить количество максимальных элементов, которые могут быть выбраны
         */
        'limit' => 100,
    ),
    'option_switch' => array(
        'type'  => 'switch',
        'value' => 'hello',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'left-choice' => array(
            'value' => 'goodbye',
            'label' => __('Goodbye', '{domain}'),
        ),
        'right-choice' => array(
            'value' => 'hello',
            'label' => __('Hello', '{domain}'),
        ),
    ),
    'option_color_picker' => array(
        'type'  => 'color-picker',
        'value' => '#FF0050',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        // Палитра цветов
        'palettes' => array( '#ba474e', '#0ce0ed', '#946940' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    ),
    'option_rgba_color_picker' => array(
        'type'  => 'rgba-color-picker',
        'value' => 'rgba(245,0,0,0.5)',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        // Палитра цветов
        'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    ),
    'option_gradient' => array(
        'type'  => 'gradient',
        'value' => array(
            'primary'   => '#0000FF',
            'secondary' => '#FF0000',
        ),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    ),
    'option_image_picker' => array(
        'type'  => 'image-picker',
        'value' => 'value-3',
        'attr'  => array(
            'class'    => 'custom-class',
            'data-foo' => 'bar',
        ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'choices' => array(
            'value-1' => get_template_directory_uri() .'/img/1.png',
            'value-2' => array(
                // (required) url for thumbnail
                'small' => get_template_directory_uri() .'/img/2.png',
                // (optional) url  для большого изображения, которое появится в подсказке
                'large' => get_template_directory_uri() .'/img/2.png',
                // (optional) Выбор дополнительных данных для js, доступных в пользовательских событиях
                'data' => array()
            ),
            'value-3' => array(
                // (required) url for thumbnail
                'small' => array(
                    'src' => get_template_directory_uri() .'/img/1.png',
                    'height' => 70
                ),
                // (optional) url for large image that will appear in tooltip
                'large' => array(
                    'src' => get_template_directory_uri() .'/img/1.png',
                    'height' => 400
                ),
                // (optional) choice extra data for js, available in custom events
                'data' => array()
                ),
            ),
        'blank' => true, // (optional) Если true, изображения могут быть отменены
    ),
);