##git命令


创建版本库

	git init

添加文件到暂存区
	
	git add

提交更改

	git commit

查看代码仓库当前的状态

	git status

查看文件文件修改

	git diff

查看提交日志
	
	git log


查看提交日志一行显示

	git log --pretty=oneline

回退到上一个版本

	git reset --hard HEAD^

回退到上上一个版本

	git reset --hard HEAD^^

回退到100以前的版本

	git reset --hard HEAD~100

回退到指定版本号

	git reset --hard 版本号前几位

删除文件

	git rm xxx.txt 
	
错删文件恢复

	git checkout -- xxx.txt

提交远程仓库

	git push origin master



