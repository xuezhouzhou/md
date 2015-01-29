<?php
	if(!isset($_GET['md'])) exit('Not Access!');
	include_once "lib/markdown.php";
	$url = $_GET['md'];
	$temp_arr = explode("/",$url);
	$url = iconv("utf-8", "gbk",$url);
	$count = count($temp_arr) - 1;
	$title = $temp_arr[$count];
	$title = str_replace(".md","",$title );
	if(file_exists($url)){
		$my_text = file_get_contents($url);	
	}else{
		header("Location:http://md.xuezz.cn");	
	}
	$my_html = Markdown($my_text);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?=$title?></title>
<link href="css/md.css" rel="stylesheet" type="text/css">
</head>
<body>
<?=$my_html?>
</body>
</html>