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

interface Viewable
{
    public function collection();

    public function path();
}
