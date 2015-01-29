##Javascript刷新页面的几种方法


	history.go(0)
	
	location.reload()
	
	location=location
	
	location.assign(location)
	
	document.execCommand('Refresh')
	
	window.navigate(location)
	
	location.replace(location)
	
	document.URL=location.href