<?php
	include_once 'lib/dir.php';
	error_reporting(0);
	$path = "doc/"; 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MD</title>
<link href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" />
<link href="css/index.min.css" rel="stylesheet" />
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-header">
	 <a class="navbar-brand" href="http://www.xuezz.cn/" title="多总结一点知识,就少写一行代码。">薛周周的博客</a> 
	</div>
	<ul class="nav navbar-nav">
	  <li><a href="http://www.xuezz.cn/">首页</a></li>
		<li><a href="http://www.xuezz.cn/laboratory">WEB实验室</a></li>
		<li class="active"><a href="javascript:void(0)">MD笔记</a></li>
  </ul>
</nav>

<div id="side-bar">
  <ul class="nav nav-tabs">
    <li data="dir" class="active"><a href="javascript:void(0)">目录</a></li>
    <li data="search" ><a href="javascript:void(0)">检索</a></li>
  </ul>
  
  <div id="list-wrap">
    <div id="dir-list">
      <?php createDir($path);?>
    </div>
    <div id="search-list">
      <div class="key"><input id="key" type="text" class="form-control" placeholder="请输入关键字"></div>
      <div class="s-list"></div>
    </div>
  </div>
</div>
  
<div id="main">
  <iframe id="mainFrame" src="default.html" frameborder="0" name="mainFrame"></iframe>
</div>

<script src="http://cdn.bootcss.com/jquery/1.7.1/jquery.min.js"></script>
<script src="js/index.min.js"></script>
</body>
</html>