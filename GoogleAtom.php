<?php
require_once __DIR__ . '/google/google-functions.php';

$pub_date = date("c", strtotime( 'A' ) );
$last_build_date = date("c", strtotime( '12121212' ) );
?><?xml version="1.0" encoding="utf-8"?>
	<feed xmlns="http://www.w3.org/2005/Atom"
	      xmlns:media="http://search.yahoo.com/mrss/"
	      xmlns:g="http://schemas.google.com/pcn/2020">
		<title><?php echo esc_html( 'A' ); ?></title>
		<link rel="self" href="<?php echo esc_url( 'b' ); ?>"/>
		<?php content_feed_render_single_panel( [], 'test' ); ?>
	</feed>
<?php

echo 'new line';
