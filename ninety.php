<?php
//非递归方法
$array = [1,3,5,7,9,10,11,12,13,14];  //定义数组
function day19($array,$n)
{
	$len = count($array);
	for($i=0;$i<=$len-1;$i++)
	{
		if($array[$i] == $n)
		{
			echo "$n"."在数组中的下标位置是"."$i";
		}
	}
}
day19($array,10);
echo "<hr>";

//递归方法
// $array = [2,4,6,8,10];
// function day19($array,$n)
// {
// 	$len = count($array);
// 	for($i=0;$i<=$len-1;$i++)
// 	{
// 		if($array[$i]!=$n)
// 		{
// 			$arr[] = $array[$i];
// 		}
// 		else
// 		{
// 			echo "$n"."在数组中的下标位置是"."$i";
// 		}
// 	}
// }
// day19($array,4);