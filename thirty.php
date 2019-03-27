<?php
function Add($num1,$num2)
{
	$data = array();
	array_push($data,$num1,$num2);
	$res = array_sum($data);
	echo "$num1".'+'."$num2".'='."$res";
}
Add(13,25);