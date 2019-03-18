<?php
include 'Student.php';

$obj1  = new Student('小胡',20);
$obj2  = new Student('小红',12);
$obj3  = new Student('小陈',35);
$obj4  = new Student('小杨',18);
$obj5  = new Student('小王',8);
$obj6  = new Student('小李',24);
$obj7  = new Student('小赵',14);
$obj8  = new Student('小孙',40);

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
echo objSort(8);
