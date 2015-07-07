##PHP环境配置


###Apache httpd.conf的配置

1、 找到DocumentRoot 路径 把路径改为你的apache的htdocs的路径。

2、 找到<Directory 路径 >改为你的apache的相应路径。

3、 找到 ScriptAlias /cgi-bin/ 路径 改为你的apache相应的路径。

4、 找到Listen 端口 改为你的端口。

5、运行bin目录下的httpd.exe，在浏览器中输入http://localhost:端口，测试是否安装成功。

###Apache与php连接的配置：


1、  在httpd.conf 的结尾加入以下三行
	
	LoadModule php5_module C:/php/php5apache2_2.dll
	PHPIniDir "C:/php"
	AddType application/x-httpd-php .php .html

2、  找到DirectoryIndex index.html 改为DirectoryIndex index.html index.php

###php与mysql连接的配置

1、  将php.ini-dist复制一份，命名php.ini

2、  找到Dynamic Extensions位置，加入如下的几行：
	
	extension=php_curl.dll
	extension=php_gd2.dll
	extension=php_mbstring.dll
	extension=php_mysql.dll
	extension=php_pdo_mysql.dll
	extension=php_pdo_odbc.dll
	extension=php_xmlrpc.dll
	extension=php_dbase.dll
	extension=php_pdo.dll

3、  找到extension_dir 修改ext的相应路径