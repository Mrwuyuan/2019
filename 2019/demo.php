<?php
//循环文件夹   loopDir方法 先获取打开文件夹句柄handle while循环读取file名称readdir且判断不等于false  判断读取到的是否为 .  .. 不是输出 判断路径是否为目录（is_dir or filetype） 递归调用
// $dir = 'D:\zwk\vendor\yiisoft\yii2-swiftmailer';
// function loopDir($dir){
//     $handle = opendir($dir);
//     // var_dump($file);die;
//     // $file =readdir($handle);
//     while(false !== ($file =readdir($handle))){
//     	// echo $file;die;
//         if($file!='.'&&$file!='..'){
//         	echo $file;die;
//             echo $file."\n\r";
//             if(filetype($dir.'/'.$file)=='dir'){
//                 loopDir($dir.'/'.$file);
//             }
//         }
//     }
// }

// loopDir($dir);

//冒泡 外层是要循环趟数数组减一  内层外是依照比较次数递减
// $arr = [3,2,1];
// function maopao($arr){
//     $len = count($arr)-1;
//     for($i=0;$i<$len;$i++){
//         for($j=0;$j < $len - $i;$j++){
//             if($arr[$j]<$arr[$j+1]){
//                 $temp = $arr[$j+1];
//                 $arr[$j+1] = $arr[$j];
//                 $arr[$j] =$temp;
//             }
//         }
//     }
//     return $arr;
// }
// var_dump(maopao($arr));