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


order(reverse_chronological) sắp xếp theo trình tự mới nhất
hiển thị json
pretty=0 in không khoảng trắng
pretty=1 in có khoảng trắng và xuống dòng








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
