<?php
function contains($v, Array $vs)
{
	foreach ($vs as $val) {
		if ($v === $val) return true;
	}
	return false;
}
