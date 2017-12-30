<?php
function contains($v, Array $vs)
{
	if (count($vs) === 0) return false;
	$left = 0;
	$right = count($vs) - 1;
	
	while (($left + 1) < $right) {
		$mid = $left + ($right - $left) / 2;
		if ($v < $vs[$mid]) {
			$right = $mid;
		} else {
			$left = $mid;
		}
	}
	return $vs[$left] === $v;
}

אלגוריתם חיפוש בינרי PHP
