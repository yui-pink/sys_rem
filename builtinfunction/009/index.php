<?php

function my_array_reverse($array) {
	$res = [];
	for ($i = count($array) - 1;$i = 0;$i--) {
		$res[] = $array[$i];
	}
	return $res;
}

$array = ['パオパオチャンネル', '東海オンエア', '水溜りボンド'];
print_r(my_array_reverse($array));
//my_array_reverse($array);
