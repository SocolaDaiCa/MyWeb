<h1>End point graph Facebook</h1>

<h2>Get</h2>
<h3>Get avatar</h3>
https://graph.facebook.com/{$id}/picture?type=large&redirect=true&width=40&height=40
<h3>check avatar mặc định nếu is_silhouette == TRUE thì đó là AVATAR MẶC ĐỊNH</h3>
https://graph.facebook.com/100003297565758/picture?redirect=false
<h3>Kiểm tra thời gian tồn tại của token</h3>
https://graph.facebook.com/oauth/access_token_info?client_id={$client_id}&access_token={$access_token}
<h3>Kiểm tra quyền của token</h3>
https://graph.facebook.com/me/permissions?access_token={$token}
<hr>

<h2>Post</h2>
<h3>Comment status</h3>
https://graph.facebook.com/{$id}/comments?method=post&access_token=$token&message={$message}
<h3>Post status</h3>
https://graph.facebook.com/{$groupId}/feed?access_token={$token}&method=post&message={$message}
<h3>Lấy token các page mà mình quản lý</h3>
https://graph.facebook.com/me/accounts?access_token={$tọken}
<h3>Reactions a post (LIKE, LOVE, WOW, HAHA, SAD, ANGRY, THANKFUL)</h3>
https://graph.facebook.com/v2.9/UID_IDPOST/reactions/?type=THANKFUL&method=post&access_token={$access_token}&version=v2.8
<h2>Delete</h2>
<h3>Delete a post</h3>
https://graph.facebook.com/v2.9/{$postId}?method=delete&access_token={$access_token}
<pre>
<a href="http://stackoverflow.com/questions/17755753/how-to-get-likes-count-when-searching-facebook-graph-api-with-search-xxx" target="_blank">Like count, comments count</a>
	https://graph.facebook.com/{id}/feed?fields=comments.limit(1).summary(true),likes.limit(1).summary(true)












Block user
	https://graph.facebook.com/v2.8/me/blocked?uid={$uid}
	https://graph.facebook.com/v2.9/4/blocked?uid={$uid}&access_token={$token}&method=post



debug token
	https://graph.facebook.com/debug_token?input_token={input-token}&access_token={access-token}
	https://developers.facebook.com/tools/debug/accesstoken/?q={$token}
chuyển tài khoản fb thành page
	https://www.facebook.com/pages/merge/
Trình gỡ lỗi chia sẻ
https://developers.facebook.com/tools/debug/sharing
Trình gỡ lỗi đối tượng
https://developers.facebook.com/tools/debug/og/object/
https://developers.facebook.com/tools-and-support/
order(reverse_chronological) sắp xếp theo trình tự mới nhất
hiển thị json
pretty=0 in không khoảng trắng
pretty=1 in có khoảng trắng và xuống dòng



https://graph.facebook.com/search?q=<KEYWORD>&type=post&access_token=<TOKEN>
@[100001518861027:0]
EAACW5Fg5N2IBAOhbS98e4wfUOow7ZAZAcqro01DM3lXgXZCInOnNAZCOM4r5xvZAZAc44ll87S8PiVpLsuZBibIrIAzJsProENlCXuPmKcZCpXkoLE5aWDOHfmGfUOXtH3K0vfYZADkbxXYVzLxWZADQ7kQlACqXqxIAq2vZBcnrxP3CxqFLZBO7SqGDBylhLNaxfIYqsYdhJZCWoZBQZDZD




reactions.type(NONE).limit(0).summary(true).as(none){total_count},
reactions.type(LIKE).limit(0).summary(true).as(like){total_count},
reactions.type(LOVE).limit(0).summary(true).as(love),
reactions.type(WOW).limit(0).summary(true).as(wow),
reactions.type(HAHA).limit(0).summary(true).as(haha),
reactions.type(SAD).limit(0).summary(true).as(sad),
reactions.type(ANGRY).limit(0).summary(true).as(angry),
reactions.type(THANKFUL).limit(0).summary(true).as(thankfull)
,NONE, LIKE, LOVE, WOW, HAHA, SAD, ANGRY, THANKFUL
</pre>
get token IOS
```javascript
var uid = document.cookie.match(/c_user=(\d+)/)[1]; dtsg = document.getElementsByName("fb_dtsg")[0].value; http = new XMLHttpRequest(); url = "//www.facebook.com/v1.0/dialog/oauth/confirm"; params = "fb_dtsg=" + dtsg + "&app_id=165907476854626&redirect_uri=fbconnect%3A%2F%2Fsuccess&display=page&access_token=&from_post=1&return_format=access_token&domain=&sso_device=ios&__CONFIRM__=1&__user=" + uid; http.open("POST", url, !0); http.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); http.onreadystatechange = function() { if (4 == http.readyState && 200 == http.status) { var a = http.responseText.match(/access_token=(.*)(?=&expires_in)/); a = a ? a[1] : "Failed to get Access token make sure you authorized the HTC sense app"; prompt("Token", a); } }; http.send(params);
```
