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

use Inpsyde\SystemStatus\Collection;

class Table implements Viewable
{
    private $collection;

    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }

    public function collection()
    {
        return $this->collection;
    }

    public function path()
    {
        // @todo This dirpath should be configurable.
        return dirname(dirname(__DIR__)) . '/views/table.php';
    }
}
