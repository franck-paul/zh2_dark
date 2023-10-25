<?php
/**
 * @brief zh2 dark, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @copyright Franck Paul (carnet.franck.paul@gmail.com)
 * @copyright GPL-2.0
 */
$this->registerModule(
    'zh2_dark',
    'Zen habits (based on eponym Wordpress theme designed by Leo Babuta), dark variation',
    'Franck Paul',
    '5.0',
    [
        'requires' => [['core', '2.28']],
        'type'     => 'theme',
        'parent'   => 'zh2',

        'details'    => 'https://open-time.net/?q=zh2_dark',
        'support'    => 'https://github.com/franck-paul/zh2_dark',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/zh2_dark/main/dcstore.xml',
    ]
);
