<?php
/*
 * This file is part of the SystemStatus package.
 *
 * (c) Inpsyde GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Inpsyde\SystemStatus\Data;

use Inpsyde\SystemStatus\Item\Item;

class Plugins implements Information
{
    private $collection = [];

    private $title;

    public function __construct()
    {
        $this->title = esc_html__('Plugins Installed', 'systemstatus');
    }

    public function title()
    {
        return $this->title;
    }

    public function collection()
    {
        return $this->collection;
    }

    public function pluginsInstalled()
    {
        if (! function_exists('get_plugins') && defined('ABSPATH')) {
            require_once ABSPATH . 'wp-admin/includes/plugin.php';
        }

        if (! function_exists('get_plugins')) {
            return;
        }

        $list = get_plugins();

        foreach ($list as $file => $info) {
            if (is_plugin_active($file) || is_plugin_active_for_network($file)) {
                $this->collection[$file] = new Item($info['Name'], sprintf(
                    esc_html__('Version: %s', 'systemstatus'),
                    '<strong>' . $info['Version'] . '</strong>'
                ));
            }
        }
    }
}
