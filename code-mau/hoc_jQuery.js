$(this).hide(); a("ẩn");
$(document).ready(function(){
   // jQuery methods go here...
});
/*rút gọn*/
$(function(){
   // jQuery methods go here...
});
$('p');/*chọn theo thẻ*/
$('.socola');/*chọn theo class*/
$('#socola');/*chọn theo id*/
$("*"); /*chọn tất cả*/
$(this); /*chọn đối tượng đang được trỏ đến*/
$("p.intro"); /*chọn những thẻ p mang class intro <p class="intro">socola</p>*/
$("p:first"); /*chọn thẻ p đầu tiên*/
$("ul li:first"); /*chọn thẻ li đầu tiên của thẻ ul đầu tiên*/
$("ul li:first-child"); /*chọn thẻ li đầu tiên của mỗi thẻ ul*/
$("[href]"); /*chọn các thẻ có thuộc tính href*/
$("a[target='_blank']"); /*chọn các thẻ a có thuộc tính target='_blank'*/
$("a[target!='_blank']"); /*chọn các thẻ a có thuộc tính target khác '_blank'*/
$("tr:even"); /*chọn các tr lẻ  1 3 5 7*/
$("tr:odd"); /*chọn các tr chẵn 2 4 6 8*/
/*sự kiệm (tạm thời bỏ qua)*/

/*hiệu ứng Effects*/
var speed; /*tốc độ : theo miliseconds hoặc  "slow", "fast"*/
/*callback: 1 hàm nào đó đc thực hiện khi quá trình hide hoặc show hoàn tất*/
var opacity; /*độ mờ*/
$(selector).hide(speed,callback); /*ẩn*/
$(selector).show(speed,callback); /*hiện*/
$(selector).toggle(speed,callback); /*ẩn nếu đang hiện, hiện nếu đang ẩn*/

$(selector).fadeIn(speed,callback); /*mờ dần rôi biến mất*/
$(selector).fadeOut(speed,callback); /*đậm dần rồi hiện ra*/
$(selector).fadeToggle(speed,callback); /* như trên*/
$(selector).fadeTo(speed,opacity,callback); /*mờ dần đến opacity thì dừng*/

$(selector).slideDown(speed,callback); /*trượt xổ xuống*/
$(selector).slideUp(speed,callback); /*trượt co lên*/
$(selector).slideToggle(speed,callback); /*cả 2*/

/*Animate xem sau*/

$(selector).stop(stopAll,goToEnd); /*dừng toàn bộ hiểu ứng trên thẻ*/

/* nhập thêm sửa xóa*/
/*thêm nội dung vào cuối nhưng vẫn nằm trong thẻ p*/
$("p").append("Some appended text.");
$("p").prepend("Some prepended text."); /*thêm vào đầu*/
$("img").after("Some text after"); /*thêm vào đằng sau thẻ p*/
$("img").before("Some text before"); /* thêm vào đằng trước thẻ p*/
$("#div1").remove(); /*xóa bỏ div1*/
$("#div1").empty(); /*xóa bỏ nội dung trong div1*/
$("#div1").remove(".test"); /*xóa nội dung theo điều kiện*/
$("p").remove(".test, .demo"); /*xóa theo nhiều điều kiện*/

/*Css*/
$("div").addClass("important"); /*thêm class cho div*/
$("h1, h2, p").addClass("blue"); /*thêm class cho nhiều đối tượng*/
$("h1, h2, p").removeClass("blue"); /*xóa class*/
$("h1, h2, p").toggleClass("blue"); /*thêm nếu chưa có, xóa nếu đã có*/
$("p").css("background-color"); /*lấy background-color của thẻ p*/
$("p").css("background-color", "yellow"); /*set background-color cho thẻ p*/
$("p").css({/* set số lượng lớn*/
	"background-color": "yellow",
	"font-size": "200%"
});

/*dài rộng*/
$("#div1").width();		 /* chiều rộng không tính padding*/
$("#div1").height();	 /* chiều cao  không tính padding*/
$("#div1").innerWidth(); /* chiều rộng tính cả padding*/
$("#div1").innerHeight();/* chiều cao  tính cả padding*/
$("#div1").outerWidth(); /* chiều rộng tính cả padding và boder*/
$("#div1").outerHeight();/* chiều cao  tính cả padding và boder*/
$(document).width(); /*dài rộng nội dung*/
$(document).height();
$(window).width();   /*dài rộng cửa sổ làm việc*/
$(window).height();
$("#div1").width(500).height(500); /*thay đổi kịch thước*/

/*Traversing*/
$("span").parent(); /*trả về bố*/
$("span").parents(); /*trả về bố, ông, tổ tiên*/
$("span").parents("ul");/*chỉ trả về tổ tiên là ul*/
$("span").parentsUntil("div");/*trả về các tổ tiên đến khi gặp div thì dừng*/
$("div").children();/*trả về con của div*/
$("div").children("p.first"); /*trả về con mang thẻ p đầu tiên*/
$("div").find("span");/*trả về tất cả span trong div*/
$("div").find("*");/*trả về tất cả các thẻ trong div*/
$("h2").siblings();/*trả về các thẻ ngang hàng với h2*/
$("h2").siblings("p");/*trả về các thẻ p ngang hàng với h2*/
$("h2").next(); /*trả về thẻ liền ngay sau h2*/
$("h2").nextAll();/*trả về tất cả các thẻ liền sau h2*/
$("h2").nextUntil("h6");/*trả về tất cả các thẻ liền sau h2 đến khi gặp h6 thfi dừng*/
/*prev ngược lại với next*/

$("div").first();/*trả về điv đầu tiên*/
$("div").last(); /*trả về điv cuối cùng*/
$("p").eq(3); /*trả về thẻ p có index =3 đếm từ 0*/
$("p").filter(".intro");/*trả về các thẻ p thỏa mãi dk filter*/
$("p").not(".intro");/*trả về các thẻ p không thỏa mãi dk trong not*/

/*Ajact*/
$("#div1").load("demo.txt"); /*load file demo vào div 1*/
/*ResponseTxt - chứa nội dung kết quả nếu cuộc gọi thành công*/
/*StatusTxt - chứa tình trạng cuộc gọi*/
/*Xhr - chứa đối tượng XMLHttpRequest*/
$("#div1").load("demo_test.txt", function(responseTxt, statusTxt, xhr){
    if(statusTxt == "success")
        alert("External content loaded successfully!");
    if(statusTxt == "error")
        alert("Error: " + xhr.status + ": " + xhr.statusText);
});
$("#form").unbind( "submit" );
/*noConflict xem sau*/



