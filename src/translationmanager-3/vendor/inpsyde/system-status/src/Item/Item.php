<?php
/*
 * This file is part of the SystemStatus package.
 *
 * (c) Inpsyde GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Inpsyde\SystemStatus\Item;

final class Item implements Informative
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $info;

    /**
     * @var string
     */
    private $shortDescription;

    /**
     * Item constructor
     *
     * @param string $name
     * @param string $info
     * @param string $shortDescription
     */
    public function __construct($name, $info, $shortDescription = '')
    {
        $this->name = $name;
        $this->info = $info;
        $this->shortDescription = $shortDescription;
    }

    /**
     * @inheritdoc
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @inheritdoc
     */
    public function info()
    {
        return $this->info;
    }

    /**
     * @inheritdoc
     */
    public function shortDescription()
    {
        return $this->shortDescription;
    }
}
