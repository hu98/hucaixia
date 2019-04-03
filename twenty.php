<?php
function CountSteps($x,$y)
{
	if($x == 0 && $y == 0)
	{
		return 0;
	}
	else if($x == 0 || $y == 0)
	{
		return 1;
	}
	else
	{
		return CountSteps($x-1,$y)+CountSteps($x,$y-1);
	}
}
echo "得到的结果是".CountSteps(2,2)."种走法";