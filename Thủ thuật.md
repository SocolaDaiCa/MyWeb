## Bình luận trống
Bạn có muốn bình luận trống trên Facebook. Hãy làm các bước đơn giản sau đây:
Mở Num Lock (nếu chưa mở) --> Ấn giữ phím ALT đồng thời gõ dãy số sau "0173".
Rồi Enter để "để lại ý kiến của bạn".

## Fake link Facebook
Sử dụng link mà bạn muốn fake
(VD: http://vnexpress.net/tin-tuc/phap-luat/nghi-pham-giet-6-nguoi-o-binh-phuoc-bi-hang-loat-tinh-tiet-tang-nang-3303152.html)

Paste vào dòng trạng thái trên fb. Chuột phải vào hình ảnh phía dưới, chọn Inspect.
Sẽ hiện thị lên tab hiển thị HTML của các element trong wed
Kéo xuống tìm đến 2 thẻ Input giống với tiêu đề của link
(http://sv1.upsieutoc.com/2017/03/25/Untitledf04b9.jpg)
Chỉnh sửa với nội dung bạn muốn.
nếu chính tittle thì phải tìm tất cả các value của tittle để cùng sửa, tương tự với nội dung và ảnh, thì mới thành công
Enjoy

## Mở nhanh console browser
	`Ctrl + Shift + j`
## Cheat Chrome://Dino
```javascript
/* Cheat life*/
Runner.prototype.gameOver = function(){console.log("SOMETEXT")}
/* Cheat speed */
Runner.instance_.setSpeed(10);
Runner.instance_.setSpeed(50000);
```
nếu speed = 50000 thì con khủng long bất tử luôn
Cách troll bạn bè về số điểm Dinashor Chrome:
## Fake result random.org
Chạy code bên dưới (Copy - Paste - ENTER), nhớ thay 11, 22, 33, 44, 55, 69 bằng dãy số bạn muốn. Có thể ẩn Console trong lúc live stream.
```javascript
!function() {
	var setResult = [11, 22, 33, 44, 55, 69],
	count = 0,
	iframe = document.getElementById('homepage-generator').getElementsByTagName('IFRAME')[0];
	iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
	generator = iframeDocument.getElementById('true-random-integer-generator-button');
	result = iframeDocument.getElementById('true-random-integer-generator-result');
	generator.removeAttribute('onclick');
	generator.onclick = function() {
		var n = count++;
		if (n >= setResult.length) return;
		result.innerHTML = '<img src="/util/cp/images/ajax-loader.gif" alt="Loading..." />';
		setTimeout(function() {
			result.innerHTML = setResult[n];
		}, ((Math.floor(Math.random() * 4) + 2) * 100));
	};
}();
```
## Comment Youtube
-	Cách viết bình luận đậm = *nội dung*
-	Cách viết bình luận in nghiêng = _nội dung_
-	Cách viết bình luận gạch ngang = -nội dung-

## tạo link xanh fb trỏ về trang cá nhân
Hướng dẫn các bạn thủ thuật đăng status xanh trỏ về 1 trang cá nhận, group, hoặc 1 người nào đó. <br>
B1: các bạn đổi trang web sang chế độ điện thoại https://www.facebook.com thành https://m.facebook.com
B2: nhập dòng này vào status của bạn  <br>
@@[0:[id facebook:1: Nhập nội dung bạn muốn ]]  <br>
@[id facebook:0]  <br>
vd:  <br>
@@[0:[364997627165697:1: Hello ]]  <br>
@[364997627165697:0]  <br>
B3: Nhấn đăng thôi :))

## hủy lời mời kết bạn đã gửi
Chia sẻ cho các bạn cách hủy những lời mời kết bạn mà trước giờ bạn gửi đi.
B1: vào https://m.facebook.com/friends/center/requests/outgoing/#friends_center_main
B2: Bấm F12 chọn thẻ Console
B3 : Dán code này vào
```javascript
var x=document.getElementsByClassName("_55sr");
for(var i=0;i<x.length;i++){
	if (x[i].innerHTML=='Hoàn tác'){
		x[i].click();
		}
	};
```
B4 : Lặp lại 1 vài lần là hủy xong vài trăm lời mời rồi