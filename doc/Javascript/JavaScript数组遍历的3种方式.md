##JavaScript数组遍历的三种方式


#### No.1

    var arr = [1,2,3,4,5,6];
    arr.forEach(function(item){
    	console.log(item);
    });

#### No.2

    arr.map(function(item){
    	console.log(item);
    });

#### No.3

    for(var i=0;i<arr.length;i++){
    	console.log(arr[i]);	
    }
