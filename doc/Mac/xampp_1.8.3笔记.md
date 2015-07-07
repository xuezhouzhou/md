##Mac os xampp 1.8.3 笔记



###apahce 开启，关闭，重启

	sudo /Applications/Xampp/bin/apachectl -k start

	sudo /Applications/Xampp/bin/apachectl -k stop

	sudo /Applications/Xampp/bin/apachectl -k restart


###mysql 开启，关闭，重启

	sudo /Applications/XAMPP/xamppfiles/bin/mysql.server start

	sudo /Applications/XAMPP/xamppfiles/bin/mysql.server stop

	sudo /Applications/XAMPP/xamppfiles/bin/mysql.server restart

### Mac host 目录

	/etc/host

### Xampp 面板无法启动Mysql的问题


在xampp安装目录下找到xampp这个文件（默认路径是：/Applications/XAMPP/xamppfiles/xampp）

用文本编辑器打开，搜索：

	$XAMPP_ROOT/bin/mysql.server start > /dev/null &

在那一行前面添加：  

	unset DYLD_LIBRARY_PATH

保存退出，重新打开xampp，开启MySQL。








