```javascript
----DOM節點選擇----

//全部選擇(回傳一個)
document.querySelector(' ');
//全部選擇(回傳陣列)
document.querySelectorAll(' ')[ ];
//ID選擇(回傳一個)
document.getElementById
//class選擇(回傳陣列)
document.getElementsByClassName
//標籤選擇(回傳陣列)
document.getElementsByTagName


//父節點
.parentNode

//第一或最後一個子節點
.firstChild/.lastChild

//前一個或後一個兄弟節點
.previousSibling/.nextSibling

//
childNodes[]


//取得內容
.textContent
.innerText
.innetHTML  //*安全問題(使用者輸入不建議使用)未受信任來源字元跳脫處理
.nodeValue  //需加入節點位置 ex. firstChild.nodeValue 


----加入元件----
let newTag = document.createElement('li'); //建立標籤

newTag.textContent ='New Content';//方法一 建立內容 
OR
let newTagText = document.createTextNode('New Content'); //方法二 建立內容
newTag.appendChild(newTagText);//標籤加入內容

let position = document.querySelectorAll('#text li')[0] ; //新節點加入的位置
position.appendChild(newTag);//加入元件

position.insertBefore(newTag,position.firstChild);//加入至起始位置

----移除元件----
let deleTag = document.querySelectorAll('#text li')[0] ; //欲移除的元件

deleTag.remove();
OR
let position = deleTag.parentNode;//欲移除的元件的父節點
position.removeChild(deleTag);//移除元件


----設定屬性節點----
ex. 
if(document.querySelector('').hasAttribute('class')){
	OOXX.getAttribute('class');
	OOXX.removeAttribute('class');
};

//取得屬性值內容
.getAttribute('')

//檢察屬性值是否存在
.hasAttribute('')

//設定屬性值 ex.  .setAttribute('type','input');
.setAttribute('','')

//移除屬性值
.removeAttribute('')

//變更屬性值內容
.className .id .value .title .href .name = XXXX



//停止元件預設行為
preventDefault() 
//停止事件傳播
stopPropagation()


//取得下拉選單內容 select option "change"
 this.options[this.selectedIndex].value

//計算子節點的數量
.children.length

----陣列使用----
let arr = ["A","B","C","D","E"];

//陣列前取出
arr.shift()
//arr=["B","C","D","E"];

//陣列前加入
arr.unshift("F")
//arr=["F","A","B","C","D","E"];

//陣列後取出
arr.pop()
//arr=["A","B","C","D"];

//陣列後加入
arr.push("F","G")
//arr=["A","B","C","D","E","F","G"];

//陣列後加入(不影響原陣列)
let arr2 = ["F","G"]
let arr3 = arr.concat(arr2)
//arr=["A","B","C","D","E"];
//arr3=["A","B","C","D","E","F","G"];

//取出或加入指定位置陣列 (取出的位置,要取出幾個,要加入的值)
let arr2 = arr.splice(2,2);
//arr=["A","B","E"];
//arr2=["C","D"];

arr.splice(2,0,"F");
//arr=["A","B","F","C","D","E"];

arr.splice(2,1,"F");
//arr=["A","B","F","D","E"]; 取代原位置

//轉成字串(不影響原陣列)
let arr2 =  arr.join();
//arr2="A,B,C,D,E"
//也可使用arr.toString();
let arr3 =  arr.join("");
//arr3="ABCDE"
let arr4 =  arr.join("-");
//arr4="A-B-C-D-E"


//原陣列反向排序
 arr.reverse();
//arr=["E","D","C","B","A"];

//重新排序(字串)
arr.sort()
//重新排序(數字)
arr.sort(function(a,b){
    return a-b;
});

let arr = [1,3,5,7,9,11];
//回傳第一個滿足所提供之測試函式的value
let find1 = arr.find(function(value){
	return value > 6;
})
//find1 = 7;
//回傳第一個滿足所提供之測試函式的index(索引)
let findIndex1 = arr.findIndex(function(value){
	return value > 6;
})
//findIndex1 = 3;

//尋找資料(由左至右)有資料回傳位址 沒資料回傳-1 (不影響原陣列)
let key = arr.indexOf("B");
//key = 1;
//(由右至左)
let key = arr.lastIndexOf("B");
//key = 1;

//將陣列內的每個元素，皆傳入並執行給定的函式
arr.forEach(function(value,index){
    arr[index] =  value +1 ;
});
//arr=["A1","B1","C1","D1","E1"];


//字串轉陣列(不影響原陣列)
let str="The quick brown fox jumps over the lazy dog.";
let words=str.split(" ");
//words=['The', 'quick', 'brown', 'fox', 'jumps', 'over', 'the', 'lazy', 'dog.']


//篩選陣列 return篩選條件(不影響原陣列)
//用於刪除 某資料retuen XXX  !== XXX
let arr1 = [1,3,5,7,9];
let arr2 = arr1.filter(function(value,index){
    return value>=5;
});
//arr1 = [1,3,5,7,9];
//arr2=[5,7,9];

//將一個累加器及陣列中每項元素(由左至右)傳入回呼函式(不影響原陣列)
//也可用於比較找出最大值
//轉成單一物件 起始值{}
let arr2 = arr.reduce(function(prev,next){
    return prev+next;
})
//arr2="ABCDE"
//(由右至左)
let arr2 = arr.reduceRight(function(prev,next){
    return prev+next;
})
//arr2="EDCBA"

//產生新陣列 將陣列內的每個元素，皆傳入並執行給定的函式(不影響原陣列) 
//用於 對所有資料處理 也可修改某特定資料
let arr2 = arr.map(function(value,index){
    return value+1;
});
//arr=["A","B","C","D","E"];
//arr2=["A1","B1","C1","D1","E1"];	

//物件轉 物件陣列  先用Object.key取得物件KEY 再用.map(key)回傳新組成的物件 
let newArr = Object.key(obj).map( (key) => { return ({newObject}) } )
```