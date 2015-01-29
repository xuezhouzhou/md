<?php
function createDir($path = '.') {
	if ($handle = opendir($path)){
		echo "<ul>"; 
		while (false !== ($file = readdir($handle))) {
			 	
			if (is_dir($path.$file) && $file != '.' && $file !='..') 
			{
				printSubDir($file, $path, $queue); 	
			}else if ($file != '.' && $file !='..') {
				$queue[] = $file; 
			}
		} 
		printQueue($queue, $path); 
		echo "</ul>"; 
	} 
} 


function printQueue($queue, $path) 
{ 
	foreach ($queue as $file) 
	{ 
		printFile($file, $path); 
	} 
} 

function printFile($file, $path) 
{ 
	$file = iconv('GB2312','UTF-8',$file);
	$path = iconv('GB2312','UTF-8',$path);
	echo '<li class="link"><a data-url="'.$path.$file.'">'.$file.'</a></li>';
}
 
function printSubDir($dir, $path) 
{
	$dir_show = iconv('GB2312','UTF-8',$dir); 
	echo '<li><div class="toggle" data-open="1"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;'.$dir_show.'</div>'; 
	createDir($path.$dir."/"); 
	echo "</li>"; 
}
?>