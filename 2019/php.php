<?php
// echo 'php基础';

//1.echo、print、print_r、var_dump 区别
//答：
// echo和print是语言结构、print_r和var_dump是普通函数
// echo：输出一个或多个字符串
// print：输出字符串
// print_r：打印关于变量的易于理解的信息
// var_dump：打印关于变量的易于理解的信息(带类型)
//总结：echo和print为语言结构，print_r和var_dump是普通函数，echo可输出一个或者多个字符串，print输出字符串，var_dump打印变量易于理解的消息带类型，print_r不带类型


//2.单引号和双引号的区别
//答：
//双引号可以被分析器解析，单引号则不行，单引号快

//3.isset 和 empty 的区别
//答：
//isset：检测变量是否已设置并且非 NULL
//empty：判断变量是否为空，变量为 0/false 也会被认为是空；变量不存在，不会产生警告

//4.static、self、$this 的区别
//答：
// static：static 可以用于静态或非静态方法中，也可以访问类的静态属性、静态方法、常量和非静态方法，但不能访问非静态属性
// self：可以用于访问类的静态属性、静态方法和常量，但 self 指向的是当前定义所在的类，这是 self 的限制
// $this：指向的是实际调用时的对象，也就是说，实际运行过程中，谁调用了类的属性或方法，$this 指向的就是哪个对象。但 $this 不能访问类的静态属性和常量，且 $this 不能存在于静态方法中

//5.include、require、include_once、require_once 的区别
//答：
// require 和 include 几乎完全一样，除了处理失败的方式不同之外。require 在出错时产生 E_COMPILE_ERROR 级别的错误。换句话说require将导致脚本中止而 include 只产生警告（E_WARNING），脚本会继续运行
// include_once 语句在脚本执行期间包含并运行指定文件。此行为和 include 语句类似，唯一区别是如果该文件中已经被包含过，则不会再次包含。如同此语句名字暗示的那样，只会包含一次

//6.常见数组函数
//答：
// array_count_values — 统计数组中所有的值
// array_flip — 交换数组中的键和值
// array_merge — 合并一个或多个数组
// array_multisort — 对多个数组或多维数组进行排序
// array_pad — 以指定长度将一个值填充进数组
// array_pop — 弹出数组最后一个单元(出栈)
// array_push — 将一个或多个单元压入数组的末尾(入栈)
// array_rand — 从数组中随机(伪随机)取出一个或多个单元
// array_keys — 返回数组中部分的或所有的键名
// array_values — 返回数组中所有的值
// count — 计算数组中的单元数目，或对象中的属性个数
// sort — 对数组排序
// array_map()  - 俩个参数 第一个参数是函数名称 第二个参数是数组
// array_colunm() - 三个参数 第一个参数是多位数组 第二个是column_key 第三个是index_key

//7.Cookie 和 Session
//答：
// Cookie：PHP 透明的支持 HTTP cookie 。cookie 是一种远程浏览器端存储数据并以此来跟踪和识别用户的机制
// Session：会话机制(Session)在 PHP 中用于保持用户连续访问Web应用时的相关数据

//8.预定义变量
//答：
// $GLOBALS — 引用全局作用域中可用的全部变量
// $_SERVER — 服务器和执行环境信息
// $_GET — HTTP GET 变量
// $_POST — HTTP POST 变量
// $_FILES — HTTP 文件上传变量
// $_REQUEST — HTTP Request 变量
// $_SESSION — Session 变量
// $_ENV — 环境变量
// $_COOKIE — HTTP Cookies
// $php_errormsg — 前一个错误信息
// $HTTP_RAW_POST_DATA — 原生POST数据
// $http_response_header — HTTP 响应头
// $argc — 传递给脚本的参数数目
// $argv — 传递给脚本的参数数组

//9.传值和传引用的区别
//答:
//传值导致对象生成了一个拷贝，传引用则可以用两个变量指向同一个内容

//10.构造函数和析构函数
//答：
// 构造函数：PHP 5 允行开发者在一个类中定义一个方法作为构造函数。具有构造函数的类会在每次创建新对象时先调用此方法，所以非常适合在使用对象之前做一些初始化工作
// 析构函数：PHP 5 引入了析构函数的概念，这类似于其它面向对象的语言，如 C++。析构函数会在到某个对象的所有引用都被删除或者当对象被显式销毁时执行

//11.魔术方法
//答：
//__construct()， __destruct()， __call()， __callStatic()， __get()， __set()， __isset()， __unset()， __sleep()， __wakeup()， __toString()， __invoke() 等方法在 PHP 中被称为"魔术方法"（Magic methods）


//12.var_dump(sort($a));
//答
//打印出bool(false) 不考虑报错

//13.设计模式六大原则
//答
//1.开闭原则（扩展放开，修改封闭）
//2.里氏代换原则
//3.依赖倒转原则（针对接口编程依赖抽象而不依赖具体）
//4.接口隔离原则（使用多个接口降低耦合）
//5.迪米特法则（一个实体尽可能少的与其他实体发生相互作用，使系统模块相对独立）
//6.合成复用原则（使用合成聚合方式，不使用继承）


//14.客户端/服务端 IP 获取，了解代理透传 实际IP 的概念
//答：
//客户端IP: $_SERVER['REMOTE_ADDR']
//服务端IP: $_SERVER['SERVER_ADDR']
//客户端IP(代理透传): $_SERVER['HTTP_X_FORWARDED_FOR']

//15.fastcgi
//答
//快速公共网管接口 fastcgi协议服务器与后端语言通信  php-fpm解析服务器打包好的cgi协议

//16.502、504 错误产生原因及解决方式
//答：
//502 表示网关错误，当 PHP-CGI 得到一个无效响应，网关就会输出这个错误
//504 表示网关超时，PHP-CGI 没有在指定时间响应请求，网关将输出这个错误

//17.ip2long实现
//答：
//124.205.30.150=2093817494
//list($p1,$p2,$p3,$p4) = explode('.','124.205.30.150');
//$realNum = $p1<<24+$p2<<16+$p3<<8+$p4;

//18.php垃圾回收机制
//答：
//当变量被复制时refcount加一 当使用unsert函数或者变量离开作用域时引用减一

//19.PHP7 新特性
//答：
//标量类型声明、返回值类型声明、通过 define() 定义常量数组、匿名类、相同命名空间类一次性导入

//20.正向代理，反向代理
//答：
//正向代理用户访问不到的服务器访问中间的服务器间接访问到想要的资源（翻墙）
//反向代理正好相反，对于客户端而言它就像是原始服务器，并且客户端不需要进行任何特别的设置。客户端向反向代理 的命名空间(name-space)中的内容发送普通请求，接着反向代理将判断向何处(原始服务器)转交请求，并将获得的内容返回给客户端，就像这些内容 原本就是它自己的一样

//21.负载均衡几种算法
//答：
//1.简单轮训 2.最小链接 3.加权随机法 4.源地址hash 5.随机算法 6.加权轮询


//22.控制反转，依赖注入
//答：
//依赖注入是从应用程序的角度在描述，应用程序依赖容器创建并注入它所需要的外部资源；而控制反转是从容器的角度在描述，容器控制应用程序，由容器反向的向应用程序注入应用程序所需要的外部资源。

//23.请选择以下代码运行的结果： if ('1e3' == '1000') echo 'LOL'; 
//答
//LOL 

//24.$a = "aabbzz"; $a++; echo $a;
//答
//aabcaa

//25.写出一下程序的输出结果：
// $data = ['a','b','c']; 
// foreach($data as $k=>$v){
//     $v = &$data[$k];
// }
//答
//C $data = ['b','c','c']; 

//26. $a= 0.1; $b = 0.7;if($a+$b ==0.8){ echo true; }else{ echo false; }
//答：
//空

//27.
// $val1= 5;
// $val2 = 10;
// function foo(&$my_val){
//     global $val1;
//     $val1 += 2;//7
//     $val2 = 4;//4
//     $my_val +=3;//8
//     return $val2;//4
// }
// $my_val = 5;
// echo foo($my_val)."\n";//4
// echo $my_val;//8
// echo $val1."\n".$val2;//7   10
// $bar = 'foo';
// $my_val =10;
// echo $bar($my_val)."\n";//4s

//28.用PHP方式对目录进行遍历
// $dir = './test';
// function loopDir($dir){
//     $handle = opendir($dir);
//     while(false !==($file =readdir($handle))){
//         if($file!='.'&&$file!='..'){
//             echo $file."<br>";
//             if(filetype($dir.'/'.$file)=='dir'){
//                 loopDir($dir.'/'.$file);
//             }
//         }
//     }
// }

//29.请简单叙述 CGI fastCGI h和  PHP-FPM的区别
//答：
// CGI 代表为了联系PHP 和websevae 的一个桥梁
// fastCGI 是CGI的改良版
// PHP-FPM  进程管理器

//冒泡排序
// function bubbleSort($arr)
// {
// 	$len = count($arr);
// 	for($i=0;$i<$len-1;$i++)
// 	{
// 		for($j=0;$j<$len-1-$i;$j++)
// 		{
// 			if($arr[$j]>$arr[$j+1])
// 			{
// 				$temp = $arr[$j];
// 				$arr[$j] = $arr[$j+1];
// 				$arr[$j+1] = $temp;
// 			}
// 		}
// 	}
// }
// //递归
// function abc($n)
// {
// 	if($n == 1)
// 	{
// 		return 1;
// 	}else
// 	{
// 		return $n*abc($n-1);
// 	}
// }
// //二分法查找
// function search($array,$k,$low=0,$high=0)
// {	
// 	//判断是否第一次调用
// 	if(count($array)!=0 and $high == 0)
// 	{
// 		$high = count($array);
// 	}	
// 	if($low<=$high)
// 	{
// 		$mid = intval(($low+$high)/2);
// 		if($array[$mid] == $k)
// 		{
// 			return $mid;
// 		}elseif($k < $array[$mid])
// 		{
// 			return search($array,$k,$low,$mid-1);
// 		}else
// 		{
// 			return search($array,$k,$mid+1,$high);
// 		}
// 	}
// 	return -1;
// }

// //快排
// function quick_sort($arr)
// {	
// 	 if(count($arr)<=1)
// 	 {
// 		return $arr;
// 	 }
// 	 $key = array_shift($arr);
// 	 $key_arr = array($key);
// 	 $left_arr = array();
// 	 $right_arr = array();
// 	 foreach($arr as $value)
// 	 {
// 		if($value < $key)
// 		{
// 			$left_arr[] = $value;
// 		}else
// 		{
// 			$right_arr[] = $value;
// 		}
// 	 }
// 	 return array_merge(quick_sort($left_arr),$key_arr,quick_sort($right_arr));
// }

// //创建多级目录
// function create_dir($path,$mode=0777)
// {
// 	if(is_dir($path))
// 	{
// 		echo '该目录已经存在';
// 	}else
// 	{
// 		if(mkdir($path,$mode,true))
// 		{
// 			echo '创建目录成功';
// 		}else
// 		{
// 			echo '创建目录失败';
// 		}
// 	}
// }


// // 单例
// //定义单例的数据库操作类
// class Db{
// 	//私有的静态的保存对象的属性
// 	private static $obj = NULL;
// 	//私有的构造方法：阻止类外new对象
// 	private function __construct(){}
// 	//私有的克隆方法：阻止类外clone对象
// 	private function __clone(){}
// 	//公共的静态的创建对象的方法
// 	public static function getInstance(){
// 		//判断对象是否存在
// 		if(!self::$obj instanceof self)
// 		{
// 			//如果对象不存在，则创建它
// 			self::$obj = new self;
// 		}
// 		return self::$obj;//返回对象
// 	}
// }
// //创建类的对象
// $obj1 = Db::getInstance();
// $obj2 = Db::getInstance();
// var_dump($obj1,$obj2);
// //工厂
// //(1)定义一个学生类
// class Student{}
// //(2)定义一个教师类
// class Teacher{}
// //(3)创建一个工厂类：生产不同类的对象的工厂
// final class Factory{
// 	//公共的静态的创建不同类对象的方法
// 	public static function getInstance($className)
// 	{
// 		return new $className();
// 	}
// }

// //(4)创建学生类和教师类对象
// $stuObj = Factory::getInstance("Student");
// $teaObj = Factory::getInstance("Teacher");
// var_dump($stuObj,$teaObj);
// //单例工厂
// //(1)定义一个学生类
// class Student{}
// //(2)定义一个教师类
// class Teacher{}
// //(3)创建一个工厂类：生产不同类的对象的工厂
// final class Factory{
// 	//私有的静态的保存对象的数组属性
// 	private static $obj = array();
// 	//公共的静态的创建不同类对象的方法
// 	public static function getInstance($className)
// 	{
// 		//判断对应的类的对象是否存在
// 		if(!isset(self::$obj[$className]))
// 		{
// 			//创建新对象，并存于数组属性中
// 			/*
// 				$obj[Student] = Student对象
// 				$obj[Teacher] = Teacher对象
// 				$obj[Product] = Product对象
// 			*/
// 			self::$obj[$className] = new $className;
// 		}
// 		//返回类的对象
// 		return self::$obj[$className];
// 	}
// }
// //(4)创建学生类和教师类对象
// $obj1 = Factory::getInstance("Student");
// $obj2 = Factory::getInstance("Teacher");
// $obj3 = Factory::getInstance("Student");
// $obj4 = Factory::getInstance("Teacher");
// var_dump($obj1,$obj2,$obj3,$obj4);
// //二维数组排序
// $guys = Array
// (
//     0 => Array
//         (
//             'name' => 'jake',
//             'score' => 80,
//             'grade' => 'A'
//         ),
//     1 => Array
//         (
//             'name' => 'jin',
//             'score' => 70,
//             'grade' => 'A'
//         ),
//     2 => Array
//         (
//             'name' => 'john',
//             'score' => 80,
//             'grade' => 'A'
//         ),
//     3 => Array
//         (
//             'name' => 'ben',
//             'score' => 20,
//             'grade' => 'B'
//         )
// );
// // 例如我们想按成绩倒序排列，如果成绩相同就按名字的升序排列。
// // 这时我们就需要根据$guys的顺序多弄两个数组出来：
// $scores = array_column($guys,'score');
// $names = array('jake','jin','john','ben');
// // 然后
// array_multisort($scores, SORT_DESC, $names, $guys);//就行了
// //定义一个方法使，数组中的偶数做键，奇数做值，返回数组
// function odd($var)
// {
// 	return($var & 1);
// }
// function even($var)
// {
// 	return(!($var & 1));
// }
// $arr1 = array('name','aaa','birth','1995','latest','5.6.0');
// function demo($arr1)
// {
// 	$arreven = array_filter($arr1, "even");
// 	$arrodd = array_filter($arr1, "odd");
// 	$arr2 = array_combine($arreven, $arrodd);
// 	return $arr2;
// }
// var_dump(demo($arr1));



//写一个函数, 统计一个字符串中另一个字符串出现的次数?
// function getSubInParentCount($subStr, $parentStr)
// {
//     $arr = explode($subStr, $parentStr);
//     return count($arr) - 1;
// }

// // 测试
// $parentStr = '1234abcabc123abcdef1234';
// $subStr = 'abc';
// // 3
// echo getSubInParentCount($subStr, $parentStr);
// 或者
// echo substr_count($parentStr, $subStr);//php自带函数

//写一个函数将字符串'make_by_id'装换成'MakeById'?
//ucfirst() explode() implode()
// function convertStr($str)
// {
//     $arr = explode('_', $str);
//     foreach ($arr as $k => $v) {
//         $arr[$k] = ucfirst($v);
//     }
//     return implode('', $arr);
// }

// $str = 'make_by_id';
// echo convertStr($str);


//合并数组的方式有哪几种?
//array_meger() +
//array_meger() 相同的数组索引保留前面的值 相同的字符串索引保留后面的值
//+ 不管是什么索引都保留前面的值



//给出多种方法反转字符串
//答：
//#1
//strrev($str) 
//#2//不支持中文
// function rev2($str)
// {
//     $len = strlen($str);
//     $res = '';
//     while ($len) {
//         $res .= $str[--$len];
//     }
//     return $res;
// }
// echo rev2($a);
//#3
// function rev3($str)
// {
//     $res = '';
//     if (strlen($str) > 0) {
//         $res = rev3(mb_substr($str, 1));
//     }
//     return $res . mb_substr($str, 0, 1);
// }
// echo rev3($a);


// 什么是面向对象?
// 面向对象是把解决的问题按照一定规则划分成一个或多个对象, 然后通过调用对象的方法来解决问题
// 面向过程是把解决的问题划分成几个步骤, 然后用函数将这些步骤一一实现, 使用的时候调用函数



