--TEST--
__construct() with no arguments.
--CREDITS--
Nic Rosental nicrosental@gmail.com
# TestFest Atlanta 2009-5-14 
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
	try {
	    $section = new DOMCDataSection();
	} catch (TypeException $e) {
	    echo $e->getMessage();
	}
?>
--EXPECT--
DOMCdataSection::__construct() expects exactly 1 parameter, 0 given
