<?php
$n = 10;  //定义一个正整数
function NumberOf1($n)
{
	$sum = 0;       //计算1的个数  
	while($n != 0)  
	{
		$sum ++;
		$n &= ($n-1);
	}
	return $sum;
}
echo NumberOf1($n);