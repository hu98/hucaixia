<?php
$str = 'aeebEcadbc';  //定义字符串
function FirstNotRepeatingChar($str)
{
	//判断字符串长度大于大于0并且小于等于10000
	if(strlen($str) >= 0 && strlen($str) <= 10000)
	{
		for($i=0;$i<strlen($str);$i++)
		{
			$res = substr_count($str,$str[$i]);   //截取字母存放到变量
			if($res < 2)   //如果变量<2 则说明是只出现一次的字符  并结束循环
			{
				echo "下标为".$i."—".$str[$i];
				break;
			}
			else if($res == 0)  //没有输出-1
			{
				echo "-1";
			}
		}
	}
}
FirstNotRepeatingChar($str);