##Javascript 正则表达式

###1.什么是正则表达式 

Javascript正则表达式(regular expression)是一个描述字符模式的对象。主要用来验证客户端的输入数据。

###2.创建正则表达式

	//new方法创建
	var pattern = new RegExp('box');
	
	//第二个参数可选，i:忽略大小写 g: 全局匹配 m:多行匹配
	var pattern = new ReqExp('box','ig');
	
	//字面量方式创建
	var pattern = /box/;
	var pattern = /box/ig;


###3.测试正则表达式 

RexExp对象包含两个方法：test() 和 exec()。test()方法在字符串中查找指定的正则表达式并返回布尔值，若存在返回true，不存在返回false。exec()方法也用于查找字符串中指定的正则表达式，如何exec()匹配成功返回包含查找字符串相关数据的数组；若匹配失败返回null

	var pattern = new RegExp('box','i');
	var str = 'This is a box!';
	
	alert(pattern.test(str));//返回true
	alert(pattern.exec(str));//返回box

###4.使用字符串的正则表达式方法 

match(pattern) 返回pattern中的子串或null 

	var pattern = /Box/i;
	var str = 'This is a box!';
	var str2 = 'This is a xox!';
	alert(str.match(pattern));//box
	alert(str2.match(pattern));//null

replace(pattern,str) 用str替换pattern 

	var pattern = /Box/i;
	var str = 'This is a box!';
	alert(str.replace(pattern,'xox'));//This is a xox!


search(pattern) 返回字符串中pattern开始的位置 

	var pattern = /Box/i;
	var str = 'This is a box!';
	alert(str.search(pattern));//10

split(pattern) 返回字符串指定pattern拆分的数组

	var pattern = / /;
	var str = 'This is a box!';
	alert(typeof str.split(pattern));//object
	alert(str.split(pattern));//This,is,a,box!
