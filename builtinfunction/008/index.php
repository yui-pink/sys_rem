<?php

function my_array_pop($array) {
	foreach ($array as $item) {
		$lastItem = $item;
	}
	return $lastItem;
}

$array = ['東海オンエア', '水溜りボンド', 'まあたそ', ];$array = ['東海オンエア', '水溜りボンド', 'まあたそ', ];
echo my_array_pop($array);
