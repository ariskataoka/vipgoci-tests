<?php
/*
 * This file is part of the SystemStatus package.
 *
 * (c) Inpsyde GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
?>

<div class="wrap">
    <h1><?php echo esc_html($this->title) ?></h1>

    <?php $this->callback() ?>
</div>
