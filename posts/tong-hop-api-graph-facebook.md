https://graph.facebook.com/v2.7/FB_ID/permissions?method=delete&access_token=TOKEN
https://www.facebook.com/share.php?u={url}&quote={quote}
Facebook có cung cấp cho chúng ta một phương thức có thể tương tác với dữ liệu trên Facebook qua token đó chính là graph API. Dưới đây là một số endpoint mình hay dùng hi vọng nó sẽ có ích cho các bạn. API share Đọc tin nhắn https://graph.facebook.com/100006907028797/threads?method=post&access_token=&message=123   Lấy danh sách file trong group https://graph.facebook.com/<groupID>/files?access_token=<token> Get link Shuterstock https://graph.facebook.com/v2.8/ssimg_<IMAGE_ID>?fields=preview_url&access_token=<token> Delete Token https://graph.facebook.com/v2.7/<FB_ID>/permissions?method=delete&access_token=TOKEN  thời gian tồn tại của token https://graph.facebook.com/oauth/access_token_info?client_id=<CLIEND_ID>&access_token=<ACCESS_TOKEN> Kiểm tra quyền của token https://graph.facebook.com/me/permissions?access_token=<ACCESS_TOKEN> Lấy token các page mà mình quản lý https://graph.facebook.com/me/accounts?access_token=<ACCESS_TOKEN>
Action
Reactions a post (LIKE, LOVE, WOW, HAHA, SAD, ANGRY, THANKFUL) https://graph.facebook.com/v2.9/<USER_ID>_<POST_ID>/reactions/?type=<TYPE>&method=post&version=v2.8&access_token=<ACCESS_TOKEN> TYPE: LIKE, LOVE, WOW, HAHA, SAD, ANGRY, THANKFUL       RIP Token https://api.facebook.com/restserver.php?method=auth.expireSession&access_token=<ACCESS_TOKEN>
Group
Xoá thành viên (có thể là chính mình): token Android https://graph.facebook.com/<GROUP_ID>/members?member=<MEMBER_ID>&method=delete&access_token=<ACCESS_TOKEN>
Đăng bài https://graph.facebook.com/<GROUP_ID>/feed?method=post&message=<MESSAGE>&access_token=<ACCESS_TOKEN>
Đăng ảnh https://graph.facebook.com/<groupID>/photos?method=post&url=<link ảnh>&access_token=<ACCESS_TOKEN>
User
List Friend https://graph.facebook.com/me/friends?limit=5000&fields=id,gender&access_token=<ACCESS_TOKEN>
Delete a post https://graph.facebook.com/v2.9/<POST_ID>?method=delete&access_token=<ACCESS_TOKEN>
Action Comment https://graph.facebook.com/<POST_ID>/comments?method=post&access_token=<ACCESS_TOKEN>&message=<MESSAGE>
Send inbox https://graph.facebook.com/t_<USER_ID>?method=post&message=<MESSAGE>&access_token=<ACCESS_TOKEN>
List Block User https://graph.facebook.com/v2.8/me/blocked?access_token=<ACCESS_TOKEN>
Block User https://graph.facebook.com/v2.8/me/blocked?uid=<USER_ID>&method=post&access_token=<ACCESS_TOKEN>

Đọc tin nhắn
https://graph.facebook.com/100006907028797/threads?method=post&access_token=EAACW5Fg5N2IBADH0nQnQ34m9zggO3ZBrUnVmMZAZCzmQDRA4AAcTdYjccPT726s21yCV2GJLiNIHs6Isn96HkRoOnRVgbZCmAPSXppZCWxTsO4CialwU8kV3gblTYr28cRvp9qykztl6CCP5omOFctwpmENB6lILb17KGx3WGetuOoutHnXLmAGn4CkXHEGUZD&message=123

https://graph.facebook.com/(id nhóm)/photos?method=post&access_token=(token)&url=(link ảnh)

https://graph.facebook.com/(id nhóm)/files?access_token=(token)
