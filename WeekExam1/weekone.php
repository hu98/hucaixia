<?php
//1.实现1+2+3+...+100的和
echo "1.实现1+2+3+...+100的和<br>";
//循环实现
function num1()
{
	$sum = 0;  //和 
	for($i=1;$i<=100;$i++)
	{
		$sum = $sum+$i;
	}
	print_r($sum);
}
echo num1();
echo "<br>";

//递归实现
function num2($n)
{
	if($n == 1)
	{
		return 1;
	}
	else
	{
		return $n+num2($n-1);
	}
}
echo num2(100);
echo "<br>";

//方法三
// function num3($num)
// {
// 	$data = range(1,$num)
// 	echo array_sum($data);
// }
// echo num3(100);
echo "<br>";


//2.实现N的阶乘
echo "2.实现N的阶乘<br>";
//递归实现
function sum1($n)
{
	if($n == 0 || $n == 1)  
	{
		return 1;
	}
	else
	{
		return sum1($n-1)*$n;
	}
}
echo sum1(5);
echo "<br>";

//循环实现
function sum2($n)
{
	$sum = 1;
	for($i=1;$i<=$n;$i++)
	{
		$sum = $sum*$i;
	}
	print_r($sum);
}
echo sum2(6);
echo "<br>";
echo "<br>";
//3.回文字符串
echo "3.回文字符串<br>";
$n = 'abccba';  //定义一个字符串
function hw($n)
{
	// $res = strrev($n);  //使字符串反转
	// if($res == $n)  //判断反转后的字符串是否跟之前一样
	// {
	// 	echo $n."是回文字符串";
	// }
	// else
	// {
	// 	echo $n."不是回文字符串";
	// }

	$arr = '';  //空数组
	for($i=strlen($n)-1;$i>=0;$i--)  //倒着循环
	{
		$arr .= $n[$i];
	}
	if($arr == $n)
	{
		echo $n."是回文字符串";
	}
	else
	{
		echo $n."不是回文字符串";
	}
}
echo hw($n);
echo "<br>";