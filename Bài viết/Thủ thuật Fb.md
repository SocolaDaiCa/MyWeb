# Thủ thuật Facebook

## bình luận trắng
alt + 0173

# vẫn chưa test đâu

## Xóa toàn bộ lời mời kết bạn
https://m.facebook.com/friends/center/requests/outgoing/#friends_center_main
```
javascript:var x=document.getElementsByClassName("_55sr");
for(var i=0; i < x.length; i++)
	if (x[i].innerHTML=='Hoàn tác')
		x[i].click();
```

## Mời bại bè thích trang
copy đoạn code này, vào trang fanpage , chọn mời bạn bè thích trang này sau đó ấn F12 , chọn qua chỗ Console 
dán code vào khung trống có dấu > màu xanh bên trái , r ấn enter
```
javascript:var inputs = document.getElementsByClassName('uiButton _1sm');
for(var i=0; i < inputs.length; i++)
	inputs[i].click();
```

I.	Code Auto Tham Gia Nhóm ( Clear )
Code có 1 đoạn nên mk up ở đây luôn  
Bước 1 : Tìm kiếm nhóm theo tên :
VD : ở đây mình đang tìm nhóm có tên là " thủ thuật " trên fb, vì thế, nhóm nào tên có chữ "Thủ thuật" thì sẽ hiện ra. Bạn nên kéo xuống dưới cùng, vì càng nhiều nhóm hiển thị thì bạn sẽ tham gia được bấy nhiêu nhóm.
http://on.fb.me/1qn75q7
Bước 2: Bạn nhấn F12, chọn thẻ "Console" paste code vào và enter và đợi  )
Code này mình đã test và ko thấy bị block. Bạn nào bị block khi chạy code thì ib vs mình để tháo code xuống  


Link Code: http://pastebin.com/raw.php?i=1yBfHXPy
II. Code unfriend
Code này chỉ việc copy và chạy thôi. F12 và chạy   khôq có lựa chọn đâu nhé  
Link : http://pastebin.com/raw.php?i=GeUwtgSU

III. Code Auto Tag Thành Viên Group 
Code này là code tag thành viên group, f12 mà chạy.
Link code: http://pastebin.com/raw.php?i=xEDKF18i


>> Code auto tag bạn bè vào stt, ảnh ...




IV. Code Auto Post Wall Friend Fb (Clear)
Đây là code tự động đăng bài lên tất cả wall của bạn bè
Lưu ý: Khi sử dụng cần có điều độ, cẩn thận ăn gạch đá từ friend  
Code 1: http://pastebin.com/raw.php?i=L8WeAANC
Code 2: http://pastebin.com/raw.php?i=nTCUzBWD
Firefox
1.Copy code ở trên
2.Vào https://www.facebook.com/  Nhấn CTRL + SHIFT + K Sau đó paste code vào, đợi tí cho xuất hiện bảng, điền nội dung sau đó nhấn Post
3. Đợi  
Google chrome
1.Copy code ở trên
2.Vào https://www.facebook.com/  Nhấn CTRL + SHIFT + J Sau đó paste code vào, đợi tí cho xuất hiện bảng, điền nội dung sau đó nhấn Post
3. Đợi  
V. Code thêm tất cả bạn bè vào group
>>Đi đến Group bạn muốn add friend<<
link code: http://pastebin.com/raw.php?i=qwcVne2j
Firefox
1.Copy code ở trên
2.Vào Group mà bạn muốn thêm  Nhấn CTRL + SHIFT + K Sau đó paste code vào, đợi tí cho xuất hiện bảng thì chương trình hoạt động thành công
3. Đợi  
Google chrome
1.Copy code ở trên
2.Vào https://www.facebook.com/  Nhấn CTRL + SHIFT + J Sau đó paste code vào, đợi tí cho xuất hiện bảng thì chương trình hoạt động thành công
3. Đợi  

VI. Code tự động post bài trên tất cả Group với 1 click
Tự động post bài trên group chỉ với 1 click:
Link code: http://pastebin.com/raw.php?i=GRULrJpC
Firefox
1.Copy code ở trên
2.Vào https://www.facebook.com/  Nhấn CTRL + SHIFT + K Sau đó paste code vào, đợi tí cho xuất hiện bảng, điền nội dung sau đó nhấn Post
3. Đợi  
Google chrome
1.Copy code ở trên
2.Vào https://www.facebook.com/  Nhấn CTRL + SHIFT + J Sau đó paste code vào, đợi tí cho xuất hiện bảng, điền nội dung sau đó nhấn Post
3. Đợi  

VII. Code tag tất cả bạn bè stt, ảnh ...
Hướng dẫn Tag tất cả bạn bè vào comment hình ảnh, bài viết trên facebook
1. Đăng nhập vào Facebook.com
2. Viết 1 Status hay up một bức ảnh nào đó lên
3. Đến trực tiếp liên kết Status, hay hình ảnh đã viết hay ảnh up lên bằng cách click vào thời gian up ảnh hoặc status...
4. Ấn F12 hoặc Click chuột phải và chọn "kiểm tra phần tử", tại đây bạn chọn tab "Console" và dán toàn bộ code dưới đây vào đấy >> Enter và bạn chỉ chờ trong vòng 5 giây sẽ thấy ngay kết quả.
Code tag có thêm nội dung : http://pastebin.com/raw.php?i=7vWyC5Mu
Vào đây để copy code (Ctrl + A => Ctrl + C ) hoặc copy code bên dưới
Link code: http://pastebin.com/raw.php?i=X41vdgbh
Sử dụng code bừa bãi là mất Fr ráng chịu nha, ad ko chịu trách nhiệm  
VIII. Code Tự động mời bạn bè Like page (Clear)
Hôm nay, mình sẽ hướng dẫn các bạn mời bạn bè Like page
Trước đây khi mời bạn bè like Fanpage facebook thì vẫn còn ô để bạn tích và khi đó phần mềm - công cụ của trình duyệt đó là Facebook Select All rất hữu ích, bạn chỉ cần bấm vào công cụ đó là nó tích tất các bạn bè mà chưa được mời là xong, nhưng sau này Facebook đã thay thành nút mời vậy là bạn không thể sử dụng phần mềm đó được nữa.

Và hôm nay Thegioicode xin chia sẻ với các bạn cách nhanh không kém phần mềm trước.
Đầu tiên các bạn vào Fanpage mà bạn muốn mời, sau đó chọn vào "See All" tiếng việt là "xem tất cả" (ở trong mục mời bạn Like) và bạn phải load hết danh sách bạn của mình (kéo con chuột xuống dưới cùng) . Tiếp theo bạn sẽ phải sử dụng code dưới đây để tự động mời.

Link code: http://pastebin.com/raw.php?i=EH1DfzVQ

Copy toàn bộ đoạn code trên rồi quay lại Fanpage, bạn bấm F12 hoặc click phải chuột chọn "Kiểm tra phần tử" sẽ hiện ra cửa sổ và bạn chọn mục "Console" và paste đoạn code vào cửa sổ đó và bấm Enter.
Giờ bạn chỉ cần chờ kết quả.
Chúc bạn thành công!

IX. Code Max bạn bè chỉ với 5p ( Gợi ý kết bạn ) (Clear)
Sau đây mình sẽ hướng dẫn các bạn các add friend mà không bị FB chặn
Code dưới đây là hoàn toàn sạch:

Link code : http://pastebin.com/raw.php?i=xmKWzuxc
Bạn phải có tối thiểu 2 nick FB,
+1 Nick bạn đang cần add friend max
+1 nick bạn có nhiều bạn bè để gợi ý cho nick kia
Bạn đăng nhập vào nick có nhiều bạn bè, sau đó mở nick mà bạn muốn add friend max trên FB
Click vào tab "Bạn bè", click " Gợi ý kết bạn "
Bấm Ctrl + Shift + J , paste cái code lúc nãy vào
Nhấn enter và đợi đến khi nó chạy hết, khi nào nó hiện        Đã gửi gợi ý kết bạn
Thì bạn đã thành công, đóng tab đó và vào FB tận hưởng
Nếu cần code đồng ý thì mình cũng có:

Link Code: http://pastebin.com/raw.php?i=c4RCSXaL


hủy theo dõi người khá
javascript:var inputs = document.getElementsByClassName('_42ft _4jy0 _5lzl _4jy3 _517h _51sy');
for (i = 1;i<inputs.length;i++) {
inputs[i].click();
setTimeout("function(){gamemod=0}", 300);
}

Vào link : https://www.facebook.com/username/following
Chú Ý : : thay username thành id hoặc username của bạn.


viết 1 stt màu xanh
- @@_[0:[0:1:Nội dung stt hoặc cmt]] ( chỉ hiện ở chế độ m.facebook.com hoặc mbasic.facebook.com nhé )
- Stt xanh dẫn về wall bất kỳ (thích hợp cho dẫn link fan page)
- @@_[0:[ID:1:Nộidung stt hoặc cmt ]] _@_[ID:]
❇ Bỏ dấu “_” sau @ nhé !!
