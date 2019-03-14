<?php
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

?>