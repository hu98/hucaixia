<?php
$array = [1,2,3,4,5,6,7,8,9,10];  //定义数组
function FindNumbersWithSum($array,$sum)
{
	$len = count($array);  //计算数组长度
	for($i=1;$i<$len;$i++)
	{
		for($j=1;$j<$i;$j++)
		{
			if(($i+$j) == $sum)  //如果两数之和等于$sum
			{
				$arr[] = $i*$j;  //两个数的乘积放入数组
			}
		}
	}
	// var_dump($arr);
	$data = min($arr);  //找出数组中最小的值
	var_dump($data);
}
FindNumbersWithSum($array,10);