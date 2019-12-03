<?php
//1.聚簇索引和非聚簇索引
//答：
// 按物理存储分类：聚簇索引(clustered index)、非聚簇索引(non-clustered index)
// 聚簇索引的叶子节点就是数据节点（一个文件 innodb），而非聚簇索引的叶子节点仍然是索引节点，只不过有指向对应数据块的指针

//2.数据库设计范式
//答：
// 第一范式：属性具有原子性，不可再分解，即不能表中有表(原子性，不可表中表)
// 第二范式：唯一性约束，每条记录有唯一标示，所有的非主键字段均需依赖于主键字段（唯一约束，每条记录非主键字段依赖主键字段）
// 第三范式：冗余性约束，非主键字段间不能相互依赖（冗余约束，非主键字段不可相互依赖）

//3.事务
// 事务就是一组原子性的 SQL 语句，或者说一个独立的工作单元。事务内的语句，要么全部执行成功，要么全部执行失败
// ACID 特性：原子性(atomicity)、一致性(consistency)、隔离性(isolation)、持久性(durability)


//4.事务（隔离级别）
//答：
// 1.未提交读 2.提交读 3.可重复读 4.可串行化读

//5.常见存储引擎  
//答：
//myisam innodb  memory


//6.索引类型及创建语句
//答：
// ALTER TABLE `table_name` ADD INDEX index_name (`column`); #普通索引
// ALTER TABLE `table_name` ADD UNIQUE (`column`); #唯一索引
// ALTER TABLE `table_name` ADD PRIMARY KEY (`column`); #主键索引
// ALTER TABLE `table_name` ADD FULLTEXT (`column`); #全文索引
// ALTER TABLE `table_name` ADD INDEX index_name (`column1`, `column2`, `column3`); #组合索引


//7.索引区别
// 普通索引：最基本的索引，没有任何限制
// 唯一索引：与"普通索引"类似，不同的就是：索引列的值必须唯一，但允许有空值
// 主键索引：它是一种特殊的唯一索引，不允许有空值
// 全文索引：仅可用于 MyISAM 表，针对较大的数据，生成全文索引很耗时好空间
// 组合索引：为了更多的提高 MySQL 效率可建立组合索引，遵循"最左前缀"原则

//8.假设index（a,b,c）
//答：
//最左前缀匹配：模糊查询时，使用%匹配时：’a%‘会使用索引，’%a‘不会使用索引
//条件中有or，索引不会生效
//a and c，a生效，c不生效
//b and c，都不生效
//a and b > 5 and c,a和b生效，c不生效。

//9.TINYINT(M)中M表示的含义是什么, 比如TINYINT(1)
//  比如TINYINT(1)和TINYINT(2)没有区别
// 如果设置zerofill(左前位置零填充), 对于TINYINT(1)和TINYINT(2), 
// 如果存入1, TINYINT(1)存入的是1, 而TINYINT(2)存入的是01
//也就是说,没有zerofill,M值是没用的

//10.mysql中int、bigint、smallint 和 tinyint长度范围和区别

//tinyint:带符号的范围是-128到127。无符号的范围是0到255。
//smallint:带符号的范围是-32768到32767。无符号的范围是0到65535。
//bigint:带符号的范围是-8388608到8388607。无符号的范围是0到16777215。
//int:带符号的范围是-2147483648到2147483647。无符号的范围是0到4294967295。


























