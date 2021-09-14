<?php

/**
 * Fatal error
 */
class C1 {
	public function method(array $a) {}
}
class C2 extends C1 {
	public function method(int $a) {}
}
