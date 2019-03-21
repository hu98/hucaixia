<?php
function Solution($n,$m)
{
	$arr = range(1,$n);
	$i = 0;
	while(count($arr) > 1)
	{
		if(($i+1) % 2 == 0)
		{
			unset($arr[$i]);
		}
		else
		{
			array_push($arr,$arr[$i]);
			unset($arr[$i]);
		}
		$i++;
	}
	$res = implode($arr);
	echo $res;
}
Solution(6,2);