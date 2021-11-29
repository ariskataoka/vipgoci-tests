<?php
/*
 * This file is part of the SystemStatus package.
 *
 * (c) Inpsyde GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Inpsyde\SystemStatus\Assets;

class Styles
{
    private $assetsUrl;

    private $assetsDir;

    public function __construct($assetsUrl, $assetsDir)
    {
        $this->assetsUrl = $assetsUrl;
        $this->assetsDir = $assetsDir;
    }

    public function init()
    {
        add_action('admin_enqueue_scripts', [$this, 'register']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue'], 20);
    }

    public function register()
    {
        wp_register_style(
            'main',
            untrailingslashit($this->assetsUrl) . '/system-status.css',
            [],
            false,
            'screen'
        );
    }

    public function enqueue()
    {
        if (wp_style_is('main', 'registered')) {
            wp_enqueue_style('main');
        }
    }
}
