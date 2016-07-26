<?php

$basicPath = dirname(__FILE__);
$patternSubPath = 'pattern';
$testSubPath = 'test';

/**
 * lädt eine Klasse falls noch nicht bekannt.
 * 
 * @param unknown $class_name
 */
function __autoload($class_name) {
	include $class_name . '.php';
}

echo 'hallo';