<?php
function Sum_Solution($n)
{
	$sum = 0;  //和
	$n && ($sum = $n + Sum_Solution($n-1));  //同时为真
	return $sum;
}
echo Sum_Solution(100);

echo "<hr>";

function num($n)
{
	echo array_sum(range(1,$n));
}
num(100);