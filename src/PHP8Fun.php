<?php

/**
 * @param $a
 * @param $b
 * Call str_contains!
 * @return bool
 */
function find_my_string( $a, $b ): bool {
	if ( $x = str_contains( $a, $b ) ) {
		echo 'The string has been found';
	} else {
		echo "String not found";
	}

	return $x;
}
$result2 = find_my_string('a', 'b');
var_dump( $result2 );

// Just a test files with various cool PHP8 stuffs
$my_super_array = [
	1.0,
	'string',
	true,
];

/**
 * Yay fun function
 *
 * @param integer|string|boolean $arg
 *
 * @return string
 */
function php8_fun( int|string|bool $arg ): string {
	$result = match ( $arg ) {
		1.0 => 'Float!',
		'string' => 'String',
		'sup' => 'string!!!',
		default => gettype( $arg )
	};
	return $result;
}

$result = fn( $c ) => $c . php8_fun( $my_super_array[ array_rand( $my_super_array, 1 ) ] );

$x = 'x';
var_dump( $result($x) );

