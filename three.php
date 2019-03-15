<?php
class fbnq
{
	//递归方法
	static function num($n)
	{
		$arr[] = '';
		for($i=1;$i<=$n;$i++)
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
?>