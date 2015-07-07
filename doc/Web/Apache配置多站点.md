##Apache配置多站点

###1.apache\conf\extra\httpd-vhosts.conf中添加如下代码

	NameVirtualHost *:80
	<virtualhost *:80>
	ServerName xx.com
	DocumentRoot "E:\xx"
	 <directory "E:\xx">
	  AllowOverride All
	  Allow from all
	 </directory>
	</virtualhost>

###2.将 httpd-vhosts.conf 文件引入到 apache\conf\httpd.conf 中

	Include conf/extra/httpd-vhosts.conf