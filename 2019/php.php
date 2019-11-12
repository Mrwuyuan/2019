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