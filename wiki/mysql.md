mysql 导出sql文件大小的限制问题

mysql> show global variables like 'max_allowed_packet';//查看最大允许的大小

mysql> set global max_allowed_packet=1024*1024*16;//临时改变大小

永久改变大小  my.cnf  修改max_allowed_packet = 1M

mysqldump -uroot -p abc > abc.sql导出

mysql>source d:\wcnc_db.sql 导入
