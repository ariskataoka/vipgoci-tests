<?php
/*
 * This file is part of the SystemStatus package.
 *
 * (c) Inpsyde GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Inpsyde\SystemStatus\Page;

class SystemStatus
{
    private $title;

    private $parentSlug;

    private $prefix;

    private $callback;

    public function __construct($title, $parentSlug, $prefix, callable $callback)
    {
        $this->title = $title;
        $this->parentSlug = $parentSlug;
        $this->prefix = $prefix;
        $this->callback = $callback;
    }

    public function init()
    {
        add_action('admin_menu', [$this, 'addMenuPage']);
    }

    public function addMenuPage()
    {
        add_submenu_page(
            $this->parentSlug,
            $this->title,
            $this->title,
            'manage_options',
            "{$this->prefix}-system-status",
            [$this, 'pageTemplate']
        );
    }

    public function callback()
    {
        ($this->callback)();
    }

    public function pageTemplate()
    {
        $closure = \Closure::bind(function () {
            require_once dirname(dirname(__DIR__)) . '/views/system-status.php';
        }, $this);

        // Render the template.
        $closure();
    }
}
