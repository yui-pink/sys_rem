<?php

function replaceOO($val) {
	return str_replace('OO', $_ENV['NAME'], $val);
}

$val = 'こんにちは OOさん';
echo replaceOO($val);
