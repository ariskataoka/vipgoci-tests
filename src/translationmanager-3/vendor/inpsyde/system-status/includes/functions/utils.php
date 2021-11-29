<?php
/*
 * This file is part of the SystemStatus package.
 *
 * (c) Inpsyde GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Inpsyde\Functions\Utils;

/**
 * Convert String To Boolean
 *
 * This function is the same of wc_string_to_bool.
 *
 * @param string|int $value The string to convert to boolean. 'yes', 1, 'true', '1' are converted
 *                          to true.
 *
 * @return bool True or false depending on the passed value.
 */
function stringToBool($value)
{
    return is_bool($value) ?
        $value :
        ('yes' === $value || 1 === $value || 'true' === $value || '1' === $value || 'on' === $value);
}

/**
 * Convert Boolean to String
 *
 * This function is the same of wc_bool_to_string
 *
 * @param bool $bool The bool value to convert
 *
 * @return string The converted value. 'yes' or 'no'.
 */
function boolToString($bool)
{
    if (! is_bool($bool)) {
        $bool = stringToBool($bool);
    }

    return true === $bool ? 'yes' : 'no';
}
