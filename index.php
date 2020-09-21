<?php

function mutateTheArray($n, $a)
{
	$res = [];
	for ($i = 0; $i < $n; $i++) {
		$res[] = ($a[$i - 1] ?? 0) + ($a[$i] ?? 0) + ($a[$i + 1] ?? 0);
	}
	
	return $res;
}

var_dump( mutateTheArray(5, [4, 0, 1, -2, 3]) );

// thanks for checking this file :)
