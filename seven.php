<?php
function ugly($n)
{
	$m = $n;
	$a = 0;
	while($n % 2 == 0)
	{
		$n /= 2;
	}
	while($n % 3 == 0)
	{
		$n /= 3;
	}
	while($n % 5 == 0)
	{
		$n /= 5;
	}
	if($n == 1)  //是丑数
	{
		//判断是第几个丑数
		for($i=1;$i<=$m;$i++)
		{
			$j = $i;
			while($j % 2 == 0)
			{
				$j /= 2;
			}
			while($j % 3 == 0)
			{
				$j /= 3;
			}
			while($j % 5 == 0)
			{
				$j /= 5;
			}
			if($j == 1)
			{
				$a++;   //是丑数
			}
		}
		if($m == 1)
		{
			echo "第".$m."个丑数";
		}
		else
		{
			echo "第".$a."个丑数";
		}
	}
	else
	{
		echo $n."不是丑数";
	}
}
echo ugly(1);