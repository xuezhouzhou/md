##PHP常用函数总结

###字符串操作函数

strlen()  返回字符串的长度

strrev()  字符串翻转

str_repeat(string,repeat) 重复输出字符串

trim()  去掉字符串两端的空格

nl2br()  将php源码中的字符串出现的换行变成标记，以便html显示的时候也换行

strtoupper()  将字符串中的小写变大写

strtolower()   将字符串中的大写变小写

explode("|",$str)  以"|"分割字符串

split("|",$str)  以"|"分割字符串

implode("|",$arr)  以"|"返回连接后的字符串

join("|",数组)  以"|"连接返回连接后的字符串

substr  ($str，$start，$end)，当第三个参数为正数是为截取的长度，为负数时为截取的结束位置

strcmp(字符串1，字符串2)返回0：相同 1：参数2字符串比参数1字符串大 -1参数2字符串比参数1字符串小

strpos(字符串1,匹配字符串)  返回匹配字符串在字符串1中的位置

str_replace(查找的字符串1，用来替换字符串1的字符串，操作的字符串)

substr_replace:(原字符串，替换字符串，起始位置，结束位置)

serialize(数组)序列化 返回一个字符串

unserialize(字符串)反序列化 返回一个数组

###文件操作函数

file(目标文件路径) 返回值为数组，每一个元素为目标文件每一行内容 

readfile(目标文件路径)返回目标文件中字符串的长度

fopen(目标文件的路径，读取方式)打开文件流

feof(文件流)判断文件流是否结束

fgets(文件流)提取文件流

fclose(文件流)关闭文件

fseek(文件流)定位开始偏移量

ftell(文件流)返回已经读取的偏移量

file_exists(文件路径)判断文件是否存在

fputs(文件流,$str)将$str写入文件

copy(缓存文件，目标路径)

move_uploaded_file(缓存文件，目标路径)

###数组操作函数

sort(数组)将数组中的值按升序排序(改变键值)

asort(数组)将数组中的值按升序排序(不改变键值)

ksort(数组)将数组中的键值按升序排列

shuffle(数组)随机排序

array_push(数组，值1，值2,...)数组尾部追加

array_unshift(数组，值1，值2,...)数组头部追加

array_pop(数组)数组尾部删除一个元素

array_shift(数组)数组头部删除一个元素

range(min,max)产生一个连续的区间段

count(数组)返回数组中元素的个数

sizeof(数组)返回数组中元素的个数

array_count_values(数组)统计数组中某个值出现的次数，结果以数组形式返回

array_key_exists("索引名1"，数组)判断数组中是否有'索引名1'，有返回true，无返回false

serialize(数组)序列化 返回一个字符串

unserialize(字符串)反序列化 返回一个数组

array_rand($arr，$num)  返回一个存放随机选择$arr中的$num条索引值的一维数组