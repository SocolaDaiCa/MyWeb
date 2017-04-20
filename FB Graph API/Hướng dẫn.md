Hướng dẫn:
 
===== CHUẨN BỊ =====
 
+ Biết một ngôn ngữ lập trình nào đó.
 
+ Tìm hiểu về Graph API: https://developers.facebook.com/docs/graph-api
 
+ Cách lấy access_token toàn quyền (full permission). Cái này thì tìm mấy bài chia sẻ code autolike trong group sẽ thấy.
 
===== LIỆT KÊ ENDPOINT CẦN SỬ DỤNG =====
 
+ Lấy danh sách bài viết trong nhóm: /{group-id}/feed
 
+ Lấy lượt reaction của bài viết: /{object-id}/reactions
 
+ Lấy lượt bình luận của bài viết: /{object-id}/comments
 
+ Lấy lượt chia sẻ của bài viết: /{object-id}/sharedposts
 
+ Lấy thông tin về người dùng: /{user-id}
 
===== THUẬT TOÁN =====
 
+ Lấy dữ liệu (bài viết) trong khoảng thời gian cụ thể hoặc toàn bộ thời gian (nếu rảnh và có điều kiện).
 
+ Lặp qua toàn bộ bài viết và lấy ra lượt reaction, comment & share và thông tin về người dùng (đối tượng tạo ra reaction/comment/share).
 
+ Cộng điểm và sắp xếp kết quả từ lượng dữ liệu đã thu thập được.
 
Tham khảo bài này để biết mình đặt các mức điểm cụ thể như nào: https://fb.com/409501726048620/
