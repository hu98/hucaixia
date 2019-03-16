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

//5.水仙花
echo "<br>";
echo "5.水仙花<br>";
//水仙花
function flower()
{
	for($i=1;$i<=9;$i++)  //百位
	{
		for($j=0;$j<=9;$j++)  //十位
		{
			for($z=0;$z<=9;$z++)  //个位
			{
				//判断各位数字的立方和是否等于本身
				if($i*$i*$i + $j*$j*$j + $z*$z*$z == 100*$i+10*$j+$z)
				{
					echo "$i$j$z<br>";
				}
			}
		}
	}
}
echo flower();
echo "<br>";

//6.斐波那契
echo "6.斐波那契<br>";
class fbnq
{
	//递归方法
	static function num($n)
	{
		$arr = [];
		for($i=0;$i<=$n;$i++)
		{
			if(count($arr)<2)
			{
				$arr[] = 1;
			}
			else
			{
				$arr[] = $arr[$i-1] + $arr[$i-2];
			}
		}
		$res = implode($arr,',');
		// print_r($arr);
		echo $res;
	}

	//递归方法
	static function num2($n)
	{
		if($n == 1 || $n == 2)
		{
			return 1;
		}
		return self::num2($n-1) + self::num2($n-2);
	}
}

echo fbnq::num(10);

echo "<br>";

$m = 10;
for($i=1;$i<=$m;$i++)
{
	echo fbnq::num2($i).',';
}
echo "<br>";
echo "<br>";

//7.台阶
echo "7.台阶<br>";
  //递归
function fbnq1($n)
{
	if($n==1 || $n==2)
	{
		return 1;
	}
	else
	{
		return fbnq1($n-1)+fbnq1($n-2);
	}
}
print_r(fbnq1(10));
echo "<br>";
//非递归
function feidigui($m)
{
	if($m <0)
	{
		return 0;
	}
	$array[1] = $array[2] = 1;
	for ($i=3; $i <=$m ; $i++) 
	{ 
		$array[$i] = $array[$i-1]+$array[$i-2];
	}
	
	return $array[$m];
}
print_r(feidigui(15));