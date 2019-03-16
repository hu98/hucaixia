<?php
include 'Student.php';

$obj1 = new Student('陈澳龙',19);
$obj2 = new Student('胡彩霞',21);
$obj3 = new Student('杨敏',20);
$obj4 = new Student('孙浩森',22);
$obj5 = new Student('陈澳龙1',15);
$obj6 = new Student('胡彩霞1',16);
$obj7 = new Student('杨敏1',12);
$obj8 = new Student('孙浩森1',17);


function objSort($n)
{
	for($i=1;$i<=$n;$i++)
	{
		$c = "obj".$i;
		global $$c;
	}

	$max = 1;
	for($i=1;$i<=$n;$i++)
	{
		$a = "obj".$i;
		$b = "obj".$max;
		if($$a->_age > $$b->_age)
		{
			$max = $i;
		}
	}
	$c = "obj".$max;
	return $$c->_name.$$c->_age;
}
echo objSort(3);