<?php
require_once __DIR__ . '/google/google-functions.php';

$pub_date = date("c", strtotime( $pub_date ) );
$last_build_date = date("c", strtotime( $last_build_date ) );
?><?xml version="1.0" encoding="utf-8"?>
	<feed xmlns="http://www.w3.org/2005/Atom"
		  xmlns:media="http://search.yahoo.com/mrss/"
		  xmlns:g="http://schemas.google.com/pcn/2020">
		<title><?php echo esc_html( $site_name ); ?></title>
		<link rel="self" href="<?php echo esc_url( $feed_url ); ?>"/>
		<?php content_feed_render_single_panel( $post_ids, $feed_title ); ?>
	</feed>
<?php
