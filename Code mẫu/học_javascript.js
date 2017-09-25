/*string*/
str.indexOf("locate"); /*vị trí xuất hiện đầu*/
str.indexOf("locate",15);/*vị trí xuất hiện đầu tiên xét từ kí tự vị trí 15*/
str.lastIndexOf("locate"); /* vị trí xuất hiện cuối*/
/*trả về -2 nếu k tồn tại*/
str.slice(7, 13); /* cắt từ 7 đến 13*/
str.slice(5); /*cắt đến cuối*/


console.time('myTime'); //Starts the timer with label - myTime
console.timeEnd('myTime'); //Ends the timer with Label - myTime
//Output: myTime:123.00 ms

console.table(variableName); /*hiển thị biến dưới dạng bảng*/
/*10. Clear the Console and the Memory*/
clear(); /*hoặc Ctrl+L nếu bạn lười gõ =))*/

/*Operator*/
delete person.age;// or delete person["age"]; xóa age khỏ person
type = typeof a; /*trả về kiểu dữ liệu của x*/
for (var x in person) {
    text += person[x] + " ";
}
try { 
    if(x === "")  throw "is Empty";
    if(isNaN(x)) throw "not a number";
    if(x > 10)   throw "too high";
    if(x < 5)    throw "too low";
}
catch(err) {
    message.innerHTML = "Input " + err;
}
try {
    adddlert("Welcome guest!");
}
catch(err) {
    document.getElementById("demo").innerHTML = err.message;
}
finally{

}

/*math xem sau*/

/*Date xem sau*/

var length = arr.length; /* trả về độ dài của mảng*/
arr3 = arr1.concat(arr2); /* nối mảng 1 với mảng 2 lưa vào mảng 3*/

var ages = [32, 33, 16, 40];
function checkAdult(age) {
    return age >= 18;
}
bool = ages.every(checkAdult); 	/*trả về true nết tất cả ptử của mảng đều thỏa mãn funtion*/
arr = ages.filter(checkAdult); 	/*lọc ra các phần tử thỏa mãn*/
ages.find(checkAdult); 			/*trả về giá trị đầu tiên thỏa mãn*/
ages.findIndex(checkAdult);		/*trả về vị trí giá trị đầu tiên thỏa mãn*/

fruits.indexOf("Apple"); /*trả về vị trí có giá trị =*/
array.indexOf(item, start);
fruits.lastIndexOf("Apple");

array.fill(value, start, end); /*gán value cho các phần tử từ start đến end*/
array.fill(value);/*gán value cho tất cả các phần tử của mảng*/
arr.forEach(function(item, index) {
	/*duyệt từng phần tử của mảng*/
});
Array.isArray(fruits); /*kiểm tra 1 biến có là Array hay k*/
fruits.join("jsdsd"); /*nối mảng thành string*/
fruits.unshift("Lemon","Pineapple"); /*thêm vảo đầu*/

var str;
n = str.length; /* đội dài chuỗi*/
employee.prototype.salary = 2000; /*định nghĩa thuộc tính salary cho employee*/
res = str.charAt(0); /*lấy ra kí tự ở vị trí 0*/
n = str.charCodeAt(0); /* lấy ra mã ascii của kí tự ở vị trí 0*/
res = str1.concat(str2); /*nối chuỗi 1 với chuỗi 2*/
/*boolean */str.startsWith("Hello"); /*kiểm tra chuỗi có bắt đầu bằng universe. hay k*/
/*boolean */str.endsWith("universe."); /*kiểm tra chuỗi có kết thức bằng universe. hay k*/

String.fromCharCode(65); /*trả về kí tự mang mã 65*/
/*boolean */str.includes("world"); /* trả về true neus world có trong chuỗi*/
/*int*/str.indexOf("welcome");/*trả về vị trí xuất hiện đâu tiên của welcode trong chuỗi, k có trả về -1*/
/*int*/str.lastIndexOf("planet");/*trả về vị xuất hiện cuối cùng của planet, k có trả về -1*/
/*int*/str1.localeCompare(str2);/*so sánh 2 chuỗi trả về -1 0 1*/
res = str.match(/ain/g);/*lọc trong chuỗi theo điều kiện*/
/*string*/str.repeat(n);/*lặp chuỗi n lần*/
/*string*/str.replace(search, replaceWith); /*thay thế trong chuỗi*/
str.search("W3Schools"); /*giống indexOf ở trên*/
str.slice(start, finish); /*cắt chuỗi từ start đến finish*/
str.substring(start, finish); /*cắt chuỗi từ start đến finish*/
str.substr(start, length); /*tắt chuỗi thừ start với độ dài length*/
/*arr*/str.split(x); /*cắt chuỗi thàng mảng với lát cắt x*/

/*string*/str.toLocaleLowerCase(); /*chuyển tất cả về chữ thường*/
/*string*/str.toLocaleUpperCase(); /*chuyển tất cả về chữ hoa*/
/*string*/str.toLowerCase(); /*chuyển tất cả về chữ thường*/
/*string*/str.toUpperCase(); /*chuyển tất cả về chữ hoa*/

/*string*/str.toString(); /*chuyễn sang dạng chuỗi*/
/*string*/str.trim(); /*xóa khoẳng trắng 2 đầu*/
str.valueOf(); /*lất ra giá trị của str*/

str.big(); /*cỡ to*/
str.bold(); /*in đậm*/
str.fixed();/*<tt>string</tt>*/
str.fontcolor("green"); /*<font color="green">string</font>*/
str.fontsize(7);/*<font size="size">string</font>*/
str.italics();/*<i>string</i>*/
str.link(url); /*<a href="url">str</a>*/
str.small(); /*<small>string</small>*/
str.sup(); /*mũ trên*/
str.sub(); /*mữ dưới*/
str.strike(); /*gạch ngang*/


/*só*/
x = Number.MIN_VALUE; /*max*/
x = Number.MIN_VALUE; /*min*/
x = Number.NEGATIVE_INFINITY; /*âm vô cừng*/
x = Number.POSITIVE_INFINITY; /*dương vô cùng*/
x = Number.NaN; /*not a number*/
Number.prototype.myMethod = function() {
    return this.valueOf() / 2;
}; /* định nghĩa hàm cho số*/
Number.isFinite(123); //true có hạn
Number.isFinite(Infinity); //false vô hạn
Number.isFinite(-Infinity); //false vô hạn

Number.isInteger(123); //true là số nguyên
Number.isInteger(0.5);//false
Number.isInteger('123'); //false
Number.isSafeInteger(123); //true số nguyên an toàn, k quá lớn < max
isNaN(123); /*false không phải là số*/

x = num.toExponential(); /*dấu phẩy động*/
x = Math.PI;
x = Math.pow(8, 2);
x = Math.sqrt(64);
x = Math.abs(x);

x = num.toFixed(2); /*làm tròn 2 số sau dâu phẩy*/
Math.ceil(4.4); /* 5 làm tròn lên*/
Math.floor(4.7); /*returns 4 làm tròn xuống*/
Math.sin(x);
Math.min(0, 150, 30, 20, -8, -200); /*returns -200*/
Math.max(0, 150, 30, 20, -8, -200); /*returns 150*/
Math.random(); /*returns a random numberbetween 0 (inclusive),  and 1 (exclusive)*/

x= Math.E;       // returns Euler's number
x= Math.PI;      // returns PI
x= Math.SQRT2;    // returns the square root of 2
x= Math.SQRT1_2;  // returns the square root of 1/2
x= Math.LN2;      // returns the natural logarithm of 2
x= Math.LN10;     // returns the natural logarithm of 10
x= Math.LOG2E;   // returns base 2 logarithm of E
x= Math.LOG10E ;  // returns base 10 logarithm of E
x= Math.floor(Math.random() * 11);// returns a number between 0 and 10
x= Math.floor(Math.random() * 10) + 1;  // returns a number between 1 and 10
fruits.push("Lemon"); /*thêm vào cuối và trả về kích thước mảng*/
fruits.pop(); /*lấy ở cuối ra*/
fruits.unshift("Lemon"); /*thêm vào đầu và trả về kích thước mảng*/
fruits.shift(); /*lấy ở đầu ra*/
Array.isArray(fruits);  /*true kiểm tra fruit có là mảng k*/
myChildren = myGirls.concat(myBoys); /*nối 2 mảng*/








/*
anchor() 
blink()

xem sau*/


/*global*/

/*mã hóa url*/
/* k mã hóa các kí tự đặc biệt như ~!@#$&*()=:/,;?+'*/
var enc = encodeURI(uri); 
var dec = decodeURI(enc);
/*mã hóa tất*/
var uri_enc = encodeURIComponent(uri);
var uri_dec = decodeURIComponent(uri_enc);
escape("Need tips? Visit W3Schools!"); /*giống encodeURI và encodeURIComponent*/
unescape(str_esc);

var kq = eval("x * y"); /*biến string thành biến và biểu thức*/
parseInt("10"); /*dổi string thành số nguyên*/
parseFloat("10");
Number(x1); /*ép về số*/
isFinite(123); /*số có hạn (k phải số vô hạn*/
String(Var); /*đổi tất cả về thành string*/

/*window*/
/*mở 1 cửa số bật lên mới*/
myWindow = window.open("https://facebook.com", "myWindow", "width=400, height=200");
/*viết cái gì đó ở trang bật lên*/
myWindow.document.write("<p>This window's name is: " + myWindow.name + "</p>");
/*viết 1 cái gì đó ở trang mẹ*/
myWindow.opener.document.write("<p>This is the source window!</p>");
if(myWindow === false); /*cửa số chưa từng đc mở*/
if(myWindow.closed === true); /*cửa số đã đóng lại*/
if(myWindow.closed === false); /*cửa sổ đang đc mở*/
/*dài rộng hiện tại của cửa sổ*/
var w = window.innerWidth;
var h = window.innerHeight;

/*local*/
var x = location.hash;
var x = location.host;
var x = location.port;
var x = location.href;		/*http://test.dev/testAllCode.php#123*/
var x = location.origin;	/*https://www.w3schools.com:4097*/
var x = location.search;	/*?email=someone@example.com*/
var x = location.protocol;	/*https:*/
var x = location.pathname;	/*/jsref/prop_loc_pathname.asp*/
frames[i].location = "https://www.facebook.com"; /*mở trang này ở frame thứ i*/

/*history*/
var x = history.length; /*Maximum length is 50*/
window.history.back();
window.history.forward(); /*next*/
window.history.go(-2);

/*HTML DOM*/
/*bắt sự kiện click*/
document.addEventListener("click", function(){
    document.getElementById("demo").innerHTML = "Hello World!";
});
document.addEventListener("mouseover", myFunction);
document.addEventListener("click", someOtherFunction);
document.addEventListener("mouseout", someOtherFunction);
console.log(document.cookie);
locale=vi_VN; c_user=100006907028797; act=1498272213712%2F5; wd=1366x329; presence=EDvF3EtimeF1498272222EuserFA21B06907028797A2EstateFDutF1498272222700CEchFDp_5f1B06907028797F4CC
document.cookie = "";

// typeof  trả về loại biến
// instanceof trả về true nếu biến là 1 đối tượng
String.prototype.distance = function (){ 
    //your code 
}
Object.keys(obj).length; //số phần tử trong object
obj[Object.keys(obj)[0]]; //lấy method thứ 0 của obj
console.log(document.URL); //lấy url trang hiện tại
fruits.join('zz');// nối mảng thành chuỗi
console.log(JSON.stringify(res)); // json to string
jQuery
$.ajaxSetup({headers : {'Authorization' : 'Client-ID ee592b9f56e7a64'}});
$.ajaxSetup( { "async": false } ); đồng bộ
$.ajaxSetup( { "async": true } ); bất đồng bộ
$.getJSON();