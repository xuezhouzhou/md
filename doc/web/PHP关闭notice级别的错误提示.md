##PHP关闭notice级别的错误提示


###1、在php.ini文件中改动error_reporting

	error_reporting=E_ALL & ~E_NOTICE

###2、如果你不能操作php.ini文件，你可以使用如下方法 

在你想禁止notice错误提示的页面中加入如下代码：

	error_reporting(E_ALL^E_NOTICE);