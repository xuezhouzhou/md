(function($){
	//md文档 数据
	var mdData;

	getMdData();

	//获取后台数据
	function getMdData(){
		$.ajax({
			type:'GET',
			url:'data.php',
			cache: false,
			async: false,
			dataType:'json',
			success:function(data){
				mdData = data;
			}	
		});
	}

	//显示搜索结果列表
	function showList(key){
		var html = '';
		mdData.forEach(function(item){
			if(key==""){
				html += '<a data-url="'+ item.file_path + '/' + item.file_name +'">' + item.file_name + '</a>';
			}else{
				var re = new RegExp();
				re = new RegExp(key,"i");
				if(re.test(item.file_name)){
					html += '<a data-url="'+ item.file_path + '/' + item.file_name +'">' + highLight(key,item.file_name) + '</a>';
				}
			}
		});
		$('#search-list .s-list').empty().append(html);
	}

	//搜索结果高亮处理
	function highLight (key,file){
		if($.trim(key)==""){
			return file;
		}else{
			var pattern = new RegExp(key,'ig');
			return file.replace(pattern,'<span style="color:red">'+ key +'</span>');
		}
	}

	//默认显示全部
	showList('');

	//目录伸缩处理
	$("#dir-list .toggle").on('click',function(){
		var $_this = $(this);
		var openStatue = $_this.attr('data-open');
		$_this.siblings('ul').slideToggle();
		if(openStatue=='1'){
			$_this.children('span.glyphicon').removeClass('glyphicon-folder-open');
			$_this.children('span.glyphicon').addClass('glyphicon-folder-close');
			$_this.attr('data-open','0');
		}else{
			$_this.children('span.glyphicon').addClass('glyphicon-folder-open');
			$_this.children('span.glyphicon').removeClass('glyphicon-folder-close');
			$_this.attr('data-open','1');
		}
	});

	//目录和搜索 Tab切换
	$('#side-bar .nav li').on('click',function(){
		var $_this = $(this);
		$_this.siblings().removeClass('active').end().addClass('active');
		
		var statue = $_this.attr('data');
		
		if(statue=="search"){
			$('#dir-list').hide();
			$('#search-list').show();
			$_this.attr('data','search');
		}else{
			$('#dir-list').show();
			$('#search-list').hide();
			$_this.attr('data','dir');
		}
	});

	//目录列表下的列表绑定click
	$("#dir-list .link a").on('click',function(){
		var url = 'md.php?md='+$(this).attr('data-url');
		$("#mainFrame").attr('src',url);
	});

	//搜索列表下的列表绑定click
	$("#search-list a").live('click',function(){
		var url = 'md.php?md='+$(this).attr('data-url');
		$("#mainFrame").attr('src',url);
	});

	//搜索框关键字索引
	$('#key').on("keyup",function(){
		var key = $(this).val();
		showList(key);
	});
	
})(jQuery);