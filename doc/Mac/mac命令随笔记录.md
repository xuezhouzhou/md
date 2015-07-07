##Mac命令随笔记录

####更该文件权限为777

	sudo chmod -R 777 filename
	
####显示/不显示 隐藏的文件 命令
	
	
显示隐藏的文件：

	defaults write com.apple.finder AppleShowAllFiles -bool true

不显示隐藏的文件：

	defaults write com.apple.finder AppleShowAllFiles -bool false
	
####打开/关闭 Dashboard

关闭dashboard

	defaults write com.apple.dashboard mcx-disabled -boolean YES
	killall Dock

打开dashboard
	
	defaults write com.apple.dashboard mcx-disabled -boolean NO
	killall Dock
	
	
####设置文件状态为 隐藏/显示

隐藏文件/文件夹 

	chflags hidden filename
	
显示文件/文件夹

	chflags nohidden filename


####删除文件

	sudo rm -r -f filename

