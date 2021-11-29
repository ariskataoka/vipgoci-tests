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

class Database implements Information
{
    private $collection = [];

    private $title;

    public function __construct()
    {
        $this->title = esc_html__('Database', 'systemstatus');
    }

    public function title()
    {
        return $this->title;
    }

    public function collection()
    {
        return $this->collection;
    }

    public function mysqlVersion()
    {
        global $wpdb;

        if (! $wpdb) {
            return;
        }

        $this->collection['database_version'] = new Item(
            esc_html__('Database Version', 'systemstatus'),
            $wpdb->db_version()
        );
    }
}
