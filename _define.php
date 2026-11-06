<?php

/**
 * @brief zh2 dark, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @copyright Franck Paul (contact@open-time.net)
 * @copyright GPL-2.0
 */
declare(strict_types=1);

if (isset($this) && is_object($this) && method_exists($this, 'registerModule') && isset($this->id) && is_string($this->id)) {
    $this->registerModule(
        'zh2_dark',
        'Zen habits (based on eponym Wordpress theme designed by Leo Babuta), dark variation',
        'Franck Paul',
        '8.1',
        [
            'date'     => '2026-11-06T10:14:34+0100',
            'requires' => [['core', '2.36']],
            'type'     => 'theme',
            'parent'   => 'zh2',
            'overload' => true,

            'details'    => 'https://open-time.net/?q=zh2_dark',
            'support'    => 'https://github.com/franck-paul/zh2_dark',
            'repository' => 'https://raw.githubusercontent.com/franck-paul/zh2_dark/main/dcstore.xml',
            'license'    => 'gpl2',
        ]
    );
}
