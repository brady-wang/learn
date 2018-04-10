<?php
header("content-type:text/html;charset=utf-8");
require_once "Parsedown.php";
$Parsedown = new Parsedown();
$str = '## 一.SVN简介

SVN是Subversion的简称，是一个开放源代码的版本控制系统，相较于RCS、CVS，它采用了分支管理系统，它的设计目标就是取代CVS。互联网上很多版本控制服务已从CVS迁移到Subversion。说得简单一点SVN就是用于多个人共同开发同一个项目，共用资源的目的。

SVN服务器有2种运行方式：独立服务器和借助apache运行。两种方式各有利弊，用户可以自行选择。

下载网址：https://subversion.apache.org/packages.html

本文主要对Centos进行SVN服务器搭建，持续集成Jenkins常需要SVN命令方式执行一些操作。



## 二.安装SVN（Linux）

1.安装SVN
yum -y install subversion
注：想快速安装就用Root用户


2.查看安装内容与位置
rpm -ql subversion


3.建立SVN根目录
mkdir /data/svn


4.新建版本库:TestCode
svnadmin create /data/svn/TestCode
注：执行完后，/data/svn/TestCode目录下文件说明



README.txt   版本库的说明文件
conf              配置文件件夹（后续操作最多的文件夹）
db                SVN数据文件文件夹
format          当前版本库的版本号
hooks           SVN的钩子脚本文件夹
locks            SVN的文件锁相关的文件夹


4.TestCode库添加用户、分配权限
A.配置SVN

vim /data/svn/TestCode/conf/svnserve.conf

anon-access=none     #去除文件前的注释，将read改为none,防止匿名访问
auth-access=write    #去除文件前的注释
password-db=passwd   #去除文件前的注释
authz-db = authz     #去除文件前的注释,访问权限配置，非常重要，不打开，分组权限不生效


B.添加访问TestCode用户

vim /data/svn/TestCode/conf/passwd


复制代码
复制代码
[users]
# harry = harryssecret
# sally = sallyssecret
albert=123456
findyou=123456
abc=123456
love=123456
复制代码
复制代码
注:添加了四个用户





C.设置添加的用户权限
vim /data/svn/TestCode/conf/authz


复制代码
复制代码
[groups]
g_qa=albert,findyou
g_read=abc

[TestCode:/]        #[<版本库名>:<路径>]
@g_qa=rw            #<用户组> = <权限>  ，第一种方式
@g_read=r           #<用户名> = <权限>  ，第二种方式
love=r
*=                  #* = <权限>，第三种方式，*为任意用户，此为禁止匿名用户访问
复制代码
复制代码
注：albert,findyou可读可写，abc、love可读，其他不可访问。





D.防火墙开放SVN端口通行
iptables -A INPUT -p tcp --dport 3690 -j ACCEPT




E.开启SVN服务
svnserve -d -r /data/svn
注：命令写入脚本，开机执行，如需要停止SVN，用 “ps -ef|grep svn”  查找到进程;再 " kill -9 进程号 " 即可。



F.SVN客户端访问

svn://IP/TestCode
例：


7. 启动服务器
#svnserve -d -r /home/svn
8. 测试服务器
svn co svn://192.168.1.00/<repo>
以apple为例:
svn co svn://19.168.1.184/apple
9. 注意
我们的svn是以独立服务器形式运行的,没有和apache做整合,
因为地址svn://xxx/xxx,不是http或https
10. 重启
如果修改了svn配置,需要重启svn服务,步骤如下:
# ps -aux|grep svnserve
# kill -9 ID号
# svnserve -d -r /home/svn


';
echo $Parsedown->text($str); # prints: <p>Hello <em>Parsedown</em>!</p>