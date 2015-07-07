##chrome浏览器设置滚动条样式

早在以前,你可以在IE(5.5)中自定义滚动条和使用非标准的CSS属性"scrollbar-base-color"。

那么如何在WebKit内核下自定义滚动条呢。下面我们一起来看看把。

	::-webkit-scrollbar              { /* 1 */ }  //滚动条整体部分
	::-webkit-scrollbar-button       { /* 2 */ }  //滚动条两端的按钮
	::-webkit-scrollbar-track        { /* 3 */ }  //外层轨道
	::-webkit-scrollbar-track-piece  { /* 4 */ }  //内层轨道，滚动条中间部分（除去）
	::-webkit-scrollbar-thumb        { /* 5 */ }  //拖动按钮
	::-webkit-scrollbar-corner       { /* 6 */ }  //边角
	::-webkit-resizer                { /* 7 */ }  //定义右下角拖动块的样式

现在来看一看基本的，这些都是伪元素，实际看一看。

![](http://md-xuezz-cn.qiniudn.com/2014-10-29-a.png)


下面是更详细的陈述每一个滚动原件的。

	:horizontal – 应用于水平方向的滚动条
 
	:vertical – 应用于垂直方向的滚动条
	 
	:decrement – 应用于按钮和内层轨道（track piece）。它用来指示按钮或者内层轨道是否会减小视窗的位置（比如，垂直滚动条的上面，水平滚动条的左边。）
	 
	:increment – 伪类和decrement类似，用来指示按钮或内层轨道是否会增大视窗的位置（比如，垂直滚动条的下面和水平滚动条的右边。）
	 
	:start – 应用于按钮和滑块。它用来定义对象是否放到滑块的前面
	 
	:end – 应用于按钮和滑块。它用来定义对象是否放到滑块的后面.
	 
	:double-button – 用于按钮和内层轨道。用于判断一个按钮是不是放在滚动条同一端的一对按钮中的一个。对于内层轨道来说，它表示内层轨道是否紧靠一对按钮.
	 
	:single-button – 对按钮来说，它用于判断一个按钮是否自己独立的在滚动条的一段。对内层轨道来说，它表示内层轨道是否紧靠一个single-button.
	 
	:no-button – 用于内层轨道，表示内层轨道是否要滚动到滚动条的终端，比如，滚动条两端没有按钮的时候。.
	 
	:corner-present – 用于所有滚动条轨道，指示滚动条圆角是否显示.
	 
	:window-inactive – 用于所有的滚动条轨道，指示应用滚动条的某个页面容器（元素）是否当前被激活。（在webkit最近的版本中，该伪类也可以用于：：selection伪元素。webkit团队有计划扩展它并推动成为一个标准的伪类）

另外，:enabled、:disabled、:hover 和 :active 等伪类同样可以用于滚动条中。