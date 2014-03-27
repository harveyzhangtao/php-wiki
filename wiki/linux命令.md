### netstat   -ano | grep ':80'  查看80端口使用情况
### git blame  文件名  查看文件最后一次是谁修改的

### :set fileformat=unix   设置文件编码

### 安装apache的macro模块
    * $ sudo apt-get install libapache2-mod-macro
    * $ sudo a2enmod
    * > macro

### tar zcvf  压缩
### tar zxvf  解压
### netstat -aux | grep '80' 查看端口
### ps -ef | grep 'apache'  查看进程

###数据库主从配置 http://www.tecmint.com/how-to-setup-mysql-master-slave-replication-in-rhel-centos-fedora/
###翻墙 https://code.google.com/p/goagent/
###https://code.google.com/p/goagent/

###编译安装php
 * sudo ./configure --prefix=/usr/local/php --with-apxs2=/usr/local/apache2/bin/apxs --with-libxml-dir=/usr/include/libxml2 --with-config-file-path=/usr/local/php/etc/ --with-mysql --with-mysqli --with-gd --enable-gd-native-ttf --with-zlib --with-mcrypt=/usr/lib/libmcrypt --with-pdo-mysql --enable-shmop --enable-soap --enable-sockets --enable-wddx --enable-zip --with-xmlrpc --enable-mbstring --with-zlib-dir --with-bz2 --with-curl --enable-exif --enable-ftp --with-jpeg-dir=/usr/local/jpeg --with-png-dir=/usr/lib/libpng --with-iconv=/usr/local/libiconv --enable-xml --enable-bcmath --enable-sysvsem

###安装memcache
 * wget http://pecl.php.net/get/memcache-2.2.5.tgz
 * tar -xvf memcache-2.2.5.tgz
 * cd memcache-2.2.5
 * /usr/local/php-5.3.x/bin/phpize
 * ./configure --with-php-config=/usr/local/php-5.3.x/bin/php-config
 * make
 * make install
### 安装solr
 * wget http://pecl.php.net/get/solr-0.9.11.tgz
 * tar -xvf solr-0.9.11.tgz
 * cd solr-0.9.11
 * /usr/local/php-5.3.x/bin/phpize
 * ./configure --with-php-config=/usr/local/php-5.3.x/bin/php-config
 * make
 * make install

### 安装xcache
 * wget http://xcache.lighttpd.net/pub/Releases/1.3.0/xcache-1.3.0.tar.bz2
 * tar -xjvf xcache-1.3.0.tar.bz2
 * cd xcache-1.3.0
 * /usr/local/php-5.3.x/bin/phpize
 * ./configure --with-php-config=/usr/local/php-5.3.x/bin/php-config
 * make
 * make install

### 家目录.vimrc 添加 set tabstop=4 'vim 设置tab转成4个空格'
 * vim  安装ide  http://www.cnblogs.com/ggjucheng/archive/2012/08/19/2646455.html
