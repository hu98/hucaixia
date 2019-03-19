<?php
function calFn($n,$m)
{
	$num = 0;
	for($i=$n;$i<=$m;$i++)
	{
		$data = substr_count($i,1);
		$num = $num + $data;
	}
	return $num;
}
echo calFn(100,1300);