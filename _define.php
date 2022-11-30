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
if (!defined('DC_RC_PATH')) {
    return;
}

$this->registerModule(
    'zh2-dark',
    'Zen habits (based on eponym Wordpress theme designed by Leo Babuta), dark variation',
    'Franck Paul',
    '2.0',
    'zh2',
    [
        'requires' => [['core', '2.24']],
        'type'     => 'theme',

        'details'    => 'https://open-time.net/?q=zh2-dark',
        'support'    => 'https://github.com/franck-paul/zh2-dark',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/zh2-dark/main/dcstore.xml',
    ]
);
