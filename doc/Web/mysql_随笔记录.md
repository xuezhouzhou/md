##Mysql 随笔记录

####修改数据库密码

方法1： 用SET PASSWORD命令

	SET PASSWORD FOR 'root'@'localhost' = PASSWORD('newpass');

方法2：用mysqladmin
	
	mysqladmin -u root password oldpass "newpass"

方法3： 用UPDATE直接编辑user表

	UPDATE user SET Password = PASSWORD('newpass') WHERE user = 'root';
	
	

　　


