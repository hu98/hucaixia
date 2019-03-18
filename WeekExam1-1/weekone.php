<?php
//1.实现1-100的和
echo "1.实现1-100的和<br>";
//循环方式
$sum = 0;
for($i=1;$i<=100;$i++)
{
	$sum = $sum + $i;
}
echo $sum;
echo "<br>";

//递归方式
function sum1($num)
{
	if($num == 1)
	{
		return 1;
	}
	else
	{
		return $num + sum1($num-1);
	}
}
echo sum1(100);
echo "<br>";

echo "<br>";
//2.实现N的阶乘
echo "2.实现N的阶乘<br>";
//递归方式
function num1($n)
{
	if($n == 1)
	{
		return 1;
	}
	else
	{
		return num1($n-1) * $n;
	}
}
echo num1(6);
echo "<br>";
//循环方式
function num2($n)
{
	$sum = 1;
	for($i=1;$i<=$n;$i++)
	{
		$sum = $sum * $i;
	}
	print_r($sum);
}
echo num2(6);
echo "<br>";

echo "<br>";
//3.回文字符串
echo "3.回文字符串<br>";
$str = 'abccba';
function num($str)
{
	$res = strrev($str);
	if($res == $str)
	{
		echo $str."是回文字符串";
	}
	else
	{
		echo $str."不是回文字符串";
	}
}
echo num($str);