1: Đếm số tin nhắn đã gửi
<?php
https://graph.facebook.com/me/threads?limit=50&access_token=?>
-------------------------------
2: Xóa tin nhắn
<?php
https://graph.facebook.com/id_tu_api_dem_tin_nhan?access_token=&method=delete?>
-------------------------------
3: Lấy ds tất cả bạn bè
<?php
https://graph.facebook.com/fql?q=SELECT+uid,+name,+friend_count,+subscriber_count+FROM+user+WHERE+uid+IN+(SELECT+uid2+FROM+friend+WHERE+uid1+=+me())++ORDER+BY+rand()+LIMIT+5000&access_token=?>
-------------------------------
4: lấy ds ban bè bị block, faq
<?php
https://graph.facebook.com/fql?q=SELECT+id,+can_post,+name+FROM+profile+WHERE+id+IN+(SELECT+uid2+FROM+friend+WHERE+uid1+=+me())+AND+name+=+"Facebook+User"+ORDER+BY+rand()+LIMIT+5000&access_token=?>
-------------------------------
5: lấy danh sách lời mời kết bạn
<?php
https://graph.facebook.com/?access_token=&batch=[{"name":+"friendrequests",+"method":"GET",+"relative_url":"v1.0/me/friendrequests?limit=5000"},+{"method":"GET",+"relative_url":"fql?q=SELECT+uid,+name,+mutual_friend_count,+sex+FROM+user+WHERE+uid+IN+({result=friendrequests:$.data[*].from.id})"}]&include_headers=false&method=post?>
-------------------------------
6: graph api search mọi người
<?php
https://graph.facebook.com/search?type=user&q=tu_khoa_tim_kiem&limit=gioi_han_toi_da&fields=id,name&access_token=?>
-------------------------------
7: trang
<?php
https://graph.facebook.com/search?type=page&q=tu_khoa_tim_kiem&limit=gioi_han_toi_da&=id,name,icon&access_token=?>
-------------------------------
8: nhóm
<?php
https://graph.facebook.com/search?type=group&q=tu_khoa_tim_kiem&limit=gioi_han_toi_da&=id,name,icon&access_token=?>
-------------------------------
9: scan nhóm đang làm admin+tham gia
<?php
https://graph.facebook.com/?method=post&access_token=&batch=[{"method":"GET","relative_url":"me"},+{"method":"GET","relative_url":"me/groups?fields=icon,administrator,name%26limit=5000"}]&include_headers=false?>
-------------------------------
10: scan nhóm đang tham gia
<?php
https://graph.facebook.com/?method=post&access_token=&batch=[{"method":"GET","relative_url":"me"},+{"method":"GET","relative_url":"me/groups?fields=icon,administrator,name%26limit=5000"}]&include_headers=false?>
-------------------------------
11: đếm like trang
<?php
https://graph.facebook.com/fql?q=SELECT+page_id,+name,+fan_count,+access_token+FROM+page+WHERE+page_id+IN+(SELECT+page_id+FROM+page_admin+WHERE+uid+=+me()+ORDER+by+rand()+LIMIT+5000)&access_token=?>
-------------------------------
12: gửi tin nhắn theo list id
<?php
https://graph.facebook.com/me/threads?locale=en_US&to=[{"type":"id","id":"4","id":"4"}]&method=post&return_structure=true&message=1&link=2&name=3&picture=4&description=5&access_token=?>
-------------------------------
13: mời thích trang
<?php
https://graph.facebook.com/idTrang/invited?method=post&invitee_id=id_can_moi&access_token=?>
 
14: mời tham gia sự kiện
<?php
https://graph.facebook.com/idSuKien/invited?method=post&users=id_can_moi&access_token=?>
-------------------------------
15: comment tag
<?php
https://graph.facebook.com/172689179864813/comments?method=post&access_token=&message=123+@[id_bb:0]+@[id_bb:0]?>
-------------------------------
16: share post lên tường bạn bè
<?php
https://graph.facebook.com/id_bb/feed?locale=en_US&method=post&return_structure=true&message=tin_nhan&link=Link_share&name=tieu_de_link&picture=link_anh&description=mo_ta&caption=trang_muon_fake&access_token=?>
-------------------------------
17:share tag bạn bè
<?php
https://graph.facebook.com/me/feed?method=post&access_token=&message=1&link=2&tags=id_bb,id_bb?>
-------------------------------
18: share post gr
<?php
https://graph.facebook.com/id_post_can_share/sharedposts?to=id_group&locale=en_US&method=post&return_structure=true&message=tin_nhan&access_token=?>
-------------------------------
