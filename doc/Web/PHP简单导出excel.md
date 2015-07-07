##PHP简单导出execl



	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename=demo.xls');
	header('Pragma: no-cache');
	header('Expires: 0');
	
	$title = array('编号', '姓名', '性别', '年龄', '身高', '体重');
	$data = array(
		array(1, '张三', '男', '22', 183, 72),
		array(2, '李四', '女', '18', 170, 50),
		array(3, '王五', '男', '14', 178, 68),
		array(4, '赵六', '女', '34', 163, 48)
	);
	echo iconv('utf-8', 'gbk', implode("\t", $title)), "\n";
	foreach ($data as $value) {
		echo iconv('utf-8', 'gbk', implode("\t", $value)), "\n";
	}
