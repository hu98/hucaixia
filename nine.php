<?php
$arr = [3,32,321];  //定义数组
function Number($arr)
{
	$len = count($arr);  //数组长度
	for($i=0;$i<$len;$i++)
	{
		for($j=$i+1;$j<$len;$j++)
		{
			$a = intval($arr[$i].$arr[$j]);
			$b = intval($arr[$j].$arr[$i]);
			if($a > $b)
			{
				$temp = $arr[$i];
				$arr[$i] = $arr[$j+1];
				$arr[$j+1] = $temp;
			}
		}
	}		
	$res = implode('',$arr);  //数组转换成字符串
	echo $res;
}
Number($arr);