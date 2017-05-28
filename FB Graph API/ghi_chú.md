[Like count, comments count](http://stackoverflow.com/questions/17755753/how-to-get-likes-count-when-searching-facebook-graph-api-with-search-xxx) <br>
https://graph.facebook.com/{id}/feed?fields=comments.limit(1).summary(true),likes.limit(1).summary(true)

Action comment stt <br>
https://graph.facebook.com/$id/comments?method=post&access_token=$token&message=$message

Lấy avatar <br>
https://graph.facebook.com/$id/picture?type=large&redirect=true&width=40&height=40

order(reverse_chronological) sắp xếp theo trình tự mới nhất
