mysql 导出sql文件大小的限制问题

mysql> show global variables like 'max_allowed_packet';//查看最大允许的大小

mysql> set global max_allowed_packet=1024*1024*16;//临时改变大小

永久改变大小  my.cnf  修改max_allowed_packet = 1M

mysqldump -uroot -p abc > abc.sql导出

mysql>source d:\wcnc_db.sql 导入



1.以mysql最高管理员登录，在mysql>create database XXXXX;  
xxxxx即为数据库名.  
2.在mysql中如何创建用户,使该用户对该数据库有完全权限.
3.可 以 用 GRANT 命 令 ， 格 式 如 下 :  
    GRANT 许可权 ON 数据库名.表名 TO 新用户名@主机名 IDENTIFIED BY '密码';  
    grant all on husidb.* to john@localhost identified by ’201314’;
