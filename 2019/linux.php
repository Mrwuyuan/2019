<?php
//1.命令与文件查找
//答：
//1.1.which-寻找可执行文件
// [root@localhost ~]# which php
// /usr/bin/php

//1.2.whereis-特定目录寻找
// [root@localhost ~]# whereis php
// php: /usr/bin/php /usr/lib64/php /etc/php.d /etc/php.ini /usr/include/php /usr/share/php /usr/share/man/man1/php.1.gz

//1.3.find-直接搜索硬盘
// [root@localhost ~]# find / -name php-fpm
// /run/php-fpm
// /etc/sysconfig/php-fpm
// /etc/logrotate.d/php-fpm
// /var/log/php-fpm
// /usr/sbin/php-fpm

//2.vim常用三种模式
//答：
//正常模式、插入模式、命令模式

//3.查找与替换
//答：
//当进入命令模式后（shift+：），使用  /要搜索的关键字 或者 ？要搜索的关键字 前后向后 后者向前搜索关键字
// n下一个匹配目标 N上一个匹配目标
// n1,n2s/word1/word2/g：n1,n2 表示数字，替换n1行到n2行的单词
// 1,$s/word1/word2/g：全文替换，也可以写成:%s/word1/word2/g
// 1,$s/word1/word2/gc：全文替换，并出现确认提示

//4.Linux下如何查看端口?
//答：
//lsof -i命令用于查看端口占用情况(lsof -i:3306) 或者 netstat -anp | grep 3306

//5.查看文件内容
//答：
// # 查看文件内容
//     cat 文件名
// # 查看文本文件头部10行
//     head filename 
// # 查看文本文件头部20行
//     head -n 20 filename 
// # 实时查看文件最后n行(默认10行)内容
//     tail -f 文件名
// # 实时查看文件最后n行内容(5表示行数)
//     tail -f -n 5 文件名


//6.服务器硬件资源和磁盘操作
//答：
// # 查看内存占用情况
//     free # 详细说明见GitHub
//     free -m # -m表示以M为单位显示
//     free -h # -h表示以方便阅读的方式显示
// # 查看磁盘占用情况
//     df
//     df -h # -h表示以方便阅读的方式显示
// # 查看系统版本
//     cat /etc/redhat-release
// # 查看系统资源使用情况
//     top 
// # 查看系统内核版本
//     uname -r

//7.服务
//答：
// # 服务的启动/关闭/重启
//     service docker start/stop/restart
//     systemctl start/stop/restart docker.service 
// # 查看服务状态
//     service docker status
//     systemctl status docker.service

//8.孤儿进程僵尸进程
//答：
//孤儿进程（父进程结束，子进程未结束），僵尸进程（子进程结束，父进程不晓得）

//9.找出文本中含有'linux'的行,如何统计共有多少行
//答：
//cat 1.txt | grep 'linux' | wc -l

//10.wc(文本统计) [-lwc] -l(统计行数) -w(统计字数) -c(统计字节数)

//11.不打开文件修改文件内容
//答：
//sed
// 选项:
// -i: 直接修改文件内容, 而不是将结果输出到终端

// 动作：
// s：替换
// d：删除行
// a：新增行
//例子：# 格式: sed -i 's/原字符串/新字符串/g' 文件名(加g为全局替换)
//例子：# 格式: sed -i '/字符串/d' 文件名
//例子：# 格式: sed -i 'a\新增内容' 文件名

//12.进程和线程的区别
//答：
//进程是计算机资源分配的最小单位, 线程是程序执行的最小单位

 