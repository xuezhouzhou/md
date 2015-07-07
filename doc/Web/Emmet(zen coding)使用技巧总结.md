##Emmet(zen coding)使用技巧总结


还记得Emmet（即Zen coding）吗？最棒的书写HTML代码的利器之一，能够帮助你快速书写HTML代码的工具。在今天这篇文章中，我们将要分享7个超酷的Emmet书写HTML的技巧，希望大家喜欢！

###1. 跳过Div

第一个小技巧就是跳过div，Emmet非常清楚你需要输入什么内容，你只需要输入class或者是id，Emmet会自动帮助你生成正确的div。如下：

![](http://xuezz.qiniudn.com/5301c84ecfc7d-1.jpg)

大家可以看到，不管你是否添加了div，Emmet都会自动生成需要div元素。

####含糊标签名称

这个技巧属于implicit tag names特性，你不需要指定div或者li，Emmet会自动帮助你生成，如下：

![](http://xuezz.qiniudn.com/5301c84ecfc7d-2.jpg)

###2. 带有DOM导航的链式缩写

如果你使用Emmet来扩展简单的class名称生成div的话。这个方式可以帮助你省去大量的时间。你只需要记住如下语法：

- > 子节点：在DOM树下一层添加创建一个元素。
- + 同级别：在DOM树同一层添加创建一个元素。
- ^ 向上层：向上一层添加创建创建一个元素。

![](http://xuezz.qiniudn.com/5301c84ecfc7d-3.jpg)

![](http://xuezz.qiniudn.com/5301c84ecfc7d-4.jpg)

####向上一层

![](http://xuezz.qiniudn.com/5301c84ecfc7d-5.jpg)

如果需要的话你可以向上多层，如下：

![](http://xuezz.qiniudn.com/5301c84ecfc7d-6.jpg)

###3. 使用分组来简化你的代码结构


有的时候你可能会发现使用向上符号比较复杂，这时候可能使用分组更加的合理。如下：

![](http://xuezz.qiniudn.com/5301c84ecfc7d-7.jpg)

一个更复杂一些的例子，如下：

![](http://xuezz.qiniudn.com/5301c84ecfc7d-8.jpg)

###4. 插入文本和属性

如果你需要生成HTML，内容和属性也是你常常需要添加的。很多开发人员只是使用Emmet来生成框架，然后再添加内容。其实你可以在生成页面框架的过程中同时添加属性和内容。

从下面代码可以看到，你输入的文字和属性都可以分别通过大括号和中括号来生成。

![](http://xuezz.qiniudn.com/5301c84ecfc7d-9.jpg)

###5. 添加多个class到一个元素 

这个非常简单，你只需要使用逗号来添加多个class，如下：

![](http://xuezz.qiniudn.com/5301c84ecfc7d-10.jpg)

###6.  重复添加

这可能是最让人舒服的操作了，帮助你重复添加元素：

![](http://xuezz.qiniudn.com/5301c84ecfc7d-11.jpg)

如果你整合分组功能，那么你将能够处理更复杂的HTML生成：

![](http://xuezz.qiniudn.com/5301c84ecfc7d-12.jpg)

###7. 自动列表记数
 
如果你需要按顺序生成HTML元素，这个技巧你一定喜欢，使用$符号可以帮助你生成一系列数字，支持class，id，属性，内容等等。如下：

![](http://xuezz.qiniudn.com/5301c84ecfc7d-13.jpg)

注意如果你需要生成2位的数字，使用两个$符号即可。























