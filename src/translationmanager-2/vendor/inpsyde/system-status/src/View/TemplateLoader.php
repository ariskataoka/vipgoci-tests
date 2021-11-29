<?php
/*
 * This file is part of the SystemStatus package.
 *
 * (c) Inpsyde GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Inpsyde\SystemStatus\View;

class TemplateLoader
{
    private $viewable;

    public function __construct(Viewable $viewable)
    {
        $this->viewable = $viewable;
    }

    public function render()
    {
        $path = $this->viewable->path();
        $closure = \Closure::bind(function () use ($path) {
            include $path;
        }, $this->viewable->collection());

        // Render.
        $closure();
    }
}
