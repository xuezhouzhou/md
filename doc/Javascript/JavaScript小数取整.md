##JavaScript小数取整


	//丢弃小数部分,保留整数部分 
	console.log(parseInt(3.1));
	console.log(parseInt(3.6));
	
	//向上取整,有小数就整数部分加1 
	console.log(Math.ceil(3.1));
	console.log(Math.ceil(3.6)); 
	
	//向下取整,小数部分舍弃 
	console.log(Math.floor(3.1));
	console.log(Math.floor(3.6));
	
	//四舍五入. 
	console.log(Math.round(3.1));
	console.log(Math.round(3.6));