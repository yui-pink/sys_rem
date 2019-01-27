<?php

function my_array_push($array, $argument1, $argument2) {
	$array[] = $argument1;
	$array[] = $argument2;
	return count($array);
}

$array = ['東海オンエア', '水溜りボンド', 'まあたそ', ];
echo my_array_push($array, 'スカイピース', 'すしらーめんりく');
