<?php
//1.组成无重复的三位数
echo "1.组成无重复的三位数:<br>";
$arr = [1,2,3,4];
function num1($arr)
{
	$len = count($arr);
	$num = 0;
	for($i=1;$i<=$len;$i++)
	{
		for($j=1;$j<=$len;$j++)
		{
			for($z=1;$z<=$len;$z++)
			{
				if($i!=$j && $j!=$z && $i!=$z)
				{
					echo "$i$j$z".",";
					$num++;
				}
			}
		}
	}
	echo "能组成".$num."个无重复的三位数";
}
num1($arr);
echo "<hr>";

//2.单例类
class Db
{
	//私有的静态属性
	private static $_instance = null;

	//私有的构造方法
	private function __construct()
	{

	}

	//私有的克隆方法
	private function __clone()
	{

	}

	//公共的静态方法
	public static function getInstance()
	{
		if(!(self::$_instance instanceof Db))
		{
			self::$_instance = new Db();
		}
		return self::$_instance;
	}
}

//3.遍历指定文件夹
echo "3.遍历指定文件夹:<br>";
$dir = 'D:\phpstudy\PHPTutorial\WWW\1608phpB\air\exam';
function my_dir($dir)
{
	$dirs = scandir($dir);
	foreach($dirs as $file)
    {
        if (($file == '.')||($file == '..'))
        {
        }
        else if (is_dir($dir.'/'.$file))
        {
            my_dir($dir.'/'.$file);
        }
        else
        {
            echo $dir.'/'.$file."<br>";
        }
    }
}
my_dir($dir);
echo "<hr>";

//4.求出两个路径的公共部分
echo "4.两个路径的公共部分:<br>";
$aPath = "/a/b/c/d/test.php";
$bPath = "/a/b/c/d/e/test.php";
function findCommonPath($aPath,$bPath)
{
	$result = [];
	$aPathArr = explode('/',$aPath);
	$bPathArr = explode('/',$bPath);

	//计算长度
	$len = count($aPathArr)>count($bPathArr)?count($bPathArr):count($aPathArr);

	for($i=0;$i<$len;$i++)
	{
		if($aPathArr[$i] == $bPathArr[$i])
		{
			$result[] = $aPathArr[$i];
		}
		else
		{
			break;
		}
	}
	$res = implode('/',$result);
	echo $res;
}
findCommonPath($aPath,$bPath);