<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

 ?>
Chèn code này vào file bạn muốn chuyển hướng:
<meta http-equiv=refresh content="X; URL=Y">
Trong đó, X là thời gian chuyển hướng tính theo giây, Y là địa chỉ định chuyển hướng.
https://vinahost.vn/ac/knowledgebase/102/Cu-hinh-file-htaccess-c-bn-danh-cho-Hosting.html

lấy địa chỉ web
document.write(document.location.href);
<?php 
/*link*/


/*các hàm xử lý mảng*/
/*Chuyển tất cả các key trong mảng $array sang chữ hoa nếu $case = 1 và sang chữ thường nếu $case = 0. Ta có thể dùng hằng số CASE_UPPER thay cho số 1 và CASE_LOWER thay cho số 0*/
array_change_key_case($array, $case);
/*Trộn 2 mảng $array_keys và $array_values thành một mảng kết hợp với $array_keys là danh sách keys, $array_value là danh sách value tương ứng với key. Điều kiện là 2 mảng này phải bằng nhau*/
$array_keys = array('a', 'b', 'c');
$array_values = array('one', 'two', 'three');
print_r(array_combine($array_keys, $array_values));
/* kết quả:
Array(
[a] => one
[b] => two
1 => three;
)*/
/*Đếm số lần xuất hiện của các phần tử giống nhau trong mảng $array và trả về một mảng */
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
/* Kết quả:
Array (
[1] => 2;
[hello] => 2;
[world] => 1
)*/

/*mảng*/
http_build_query($param); chuyển mảng thành value url 
array_push($array, $add_value1, $add_value2, ...);/*Thêm vào cuối mảng $array một hoặc nhiều phần tử*/
array_unshift($array, $value1, $value2, ...);/*Thêm các giá trị vào đầu mảng $array*/
$x=array_pop($array);							/*Xóa trong mảng $array phần tử cuối cùng và trả về phần tử đã xóa*/
$x=array_shift($array);						/*Xóa phần tử đầu tiên ra khỏi mảng $array và trả về phần tử vừa xóa đó.*/
is_array($variable);						/*Kiểm tra một biến có phải kiểu mảng hay không*/
in_array($needle, $haystackarray);			/*Kiểm tra giá trị $needle có nằm trong mảng $haystackarray không*/
array_key_exists($key, $searcharray);		/*Kiểm tra key $key có tồn tại trong mảng $searcharray không*/
$result=array_unique($array);				/*Loại bỏ giá trị trùng trong mảng $array*/
$result=array_values($array);				/*Chuyển mảng $array sang dạng mảng chỉ mục*/
$mang-array_filter( $array, 'is_file' ); 	/*lọc theo điều kiện*/
$mang=array_map('realpath', $arr_link);		/*làm gì đó với cả mảng và trả về mảng kết quả*/
$mang = array_merge(array1,array2,array3...); trộn nhiều mảng lại với nhau
/*chuỗi*/
$x=strlen($string): /*lấy chiều dài chuỗi*/

/*tệp tin và thư mục*/
is_file($path):						/*trả về TRUE nếu $path tồn tại và là một file*/
is_dir($path): 						/*trả về TRUE nếu $path tồn tại và là một thư mục*/
file_exists($path): 				/*trả về TRUE nếu $path tồn tại và là một file hoặc thư mục*/
getcwd(): 							/*trả về chuỗi biểu diễn thư mục hiện tại đang làm việc*/
scandir($path): 					/*trả về một mảng chứa danh sách tên file và thư mục trong đường dẫn $path nếu $path là tên 1 thư mục tồn tại, nếu không trả về FALSE*/
realpath($link);					/*lấy đường dẫn đầy đủ*/
        $files = glob( $target . '/*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned
glob('./*', GLOB_ONLYDIR); 			/*lọc danh sách đường dẫn các thư mục trong thư mục cha*/
glob('./*.{php,txt}', GLOB_BRACE);	/*lọc file theo nhiều định dạng*/


/*thời gian*/
date_default_timezone_set("Asia/Ho_Chi_Minh");  /*chọn múi giờ*/
echo date("d/m/Y H:i:s").'<br>'; // 26/09/2014 08:17:43
echo date("d/m/Y H:i:s A").'<br>'; // 26/09/2014 08:17:43 AP hoặc PM
echo date("w").'<br>'; // 5  :  số thứ tự của ngày trong tuần
echo date("D").'<br>'; /*thứ rút gọn VD: Sun*/
echo date("l").'<br>'; /*thứ đầy đủ VD: Sunday*/
echo date("M").'<br>'; /*tháng rút gọn VD: Mar*/
echo date("F").'<br>'; /*tháng đầy đủ VD March*/
echo date("z").'<br>'; /*số thứ tự của ngày trong năm VD 1/2 ngày thứ 32 trong năm*/

strtotime();			/*thay đổi thời gian*/
// 26/09/2014 09:18:14 : thời gian hiện tại
echo date("d/m/Y H:i:s");
// 27/09/2014 09:18:54 : tăng 1 ngày
echo date("d/m/Y H:i:s", strtotime("+1 day")).'<br>';
// 03/10/2014 09:19:19 : tăng 1 tuần
echo date("d/m/Y H:i:s", strtotime("+1 week")).'<br>';
// 03/10/2014 00:00:00 : đến thứ 6 tuần sau
echo date("d/m/Y H:i:s", strtotime("next Friday")).'<br>';
// 24/09/2014 00:00:00 : thứ 4 vừa qua
echo date("d/m/Y H:i:s", strtotime("last Wednesday")).'<br>';

(bool)checkdate($month, $day, $year); /*kiểm tra tính hợp lệ của ngày thánh nắm*/


/*lập trình hàm*/
function FunctionName()		/*không giới hạn số đối truyền vào*/
{
	$list_bien=func_get_args();
}


?>
<form>
		<fieldset>
			<legend>Mô tả công việc</legend>
			vị trí làm việc hiện tại
		</fieldset>
</form>
<b>in đậm:</b>
	<code> &ltb&gt  &lt/b&gt</code><br />
<i>in nghiêng:</i>
	</b><code> &lti&gt  &lt/i&gt</code><br />
<u>gạch chân:</u></b>
	<code> &ltu&gt  &lt/u&gt</code><br />
<s>gạch giữa chữ:</s>
	<code> &lts&gt  &lt/s&gt</code><br />
<big>chữ to:</big>
	<code> &ltbig&gt  &lt/big&gt</code><br />
<small>chữ nhỏ</small>
	<code> &ltsmall&gt  &lt/small&gt</code><br />
<strong>làm nổi bật</strong>
	<code> &ltstrong&gt  &lt/strong&gt</code><br />
<em>nhấn mạnh</em>
	<code> &ltem&gt  &lt/em&gt</code><br />
<tt>định dạng kiểu đánh máy:</tt>
	<code> &lttt&gt  &lt/tt&gt</code><br />
<p>chỉ số dưới<sub>chỉ số dưới</sub>
	<code>: &ltsub&gt  &lt/sub&gt</code></p>
<p>chỉ số trên<sup>chỉ số trên</sup>
	<code>: &ltsup&gt  &lt/sup&gt</code></p>
<p> xuống dòng nhiều lần không cần &ltbr /&gt:
	<code> &ltpre&gt  &lt/pre&gt</code></p>


<!-- upload -->
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
       
      $expensions= array("jpeg","jpg","png");
       
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
      }
       
      if($file_size > 2097152) {
         $errors[]='Kích thước file không được lớn hơn 2MB';
      }
       
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
Khi người dùng submit form, file sẽ được upload lên thư mục tạm của webserver và tên của file đã upload cũng là một tên tạm thời do webserver sinh ra, do đó để di chuyển nó đến thư mục được chỉ định trên webserver chúng ta cần sử dụng hàm move_upload_file($ten_file_tam, $duong_dan_den_thu_muc_moi).
<html>
   <body>
       
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>
             
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul>
             
      </form>
       
   </body>
</html>
<?php 
   echo('<img src="" alt="" >')
 ?>
<?php 
?>
<script>
"with_tags" : người đc tag trong bài viết
"caption" : trang chủ của trang đầu tiên người dùng dẫn link
"description" : mô tả của trang đầu tiên mà người dùng dẫn link
"created_time" : thời điểm viết bài
"full_picture" : ảnh của bài viết
"id" : id của bài viết
"message" : nội dung bài viết
"instagram_eligibility" : xác định loại bài viết
instream_eligibility : kiểm tra bài viết có video hay k "INELIGIBLE_VIDEO_LENGTH", "INELIGIBLE_NO_VIDEO", "INELIGIBLE_NO_SOUND"
"from" : người viết gồm
   "name" : tên người viết
   "id" : id người viết
"likes" : thống kê người like bài viết
   còn nữa
"reactions" : thông kê người like love các kiểu 1 mảng data 
   "data": [
      {
        "id": "1733203546992262",
        "name": "Minh Le",
        "type": "LOVE"
      }
      còn nữa
"comments" : lọc cmt trong bài viết 
   "data": [
      {
        "created_time": "2017-04-03T06:27:49+0000",
        "from": {
          "name": "Đức Minh",
          "id": "1568839833335555"
        },
        "message": "ko có cách nào treo online hở bác",
        "id": "471988116466647"
      }
   còn nữa
"shares": {
   "count": 6
   }
"status_type": "added_photos" hoặc "shared_story"
is_app_share
is_crossposting_eligible
is_expired
is_hidden
is_instagram_eligible
is_live_audio
is_popular
is_published
is_spherical
link
message_tags

object_id
parent_id
permalink_url
picture
place
privacy
promotion_status
properties
scheduled_publish_time
source
story
story_tags
subscribed
target
targeting
timeline_visibility
type
updated_time
via
width
will_be_autocropped_when_deliver_to_instagram
with_tags
attachments

edit_actions chịu




to

</script>

https://graph.facebook.com/{{ID_POST}}/?fields=likes.limit(1).summary(true),comments.limit(1).summary(true)&access_token={{ACCESS_TOKEN}}

thay limit bằng số lớn hơn nếu muốn get lớn hơn ;)



1173636692750000/?fields=feed.since(1491120066).limit(10){message,full_picture,source, link}
full_picture
?fields=feed.since(1491120066).limit(100){message,full_picture,source},videos.limit(10)

https://graph.facebook.com/[postid]?access_token=[access_token]
https://graph.facebook.com/1173636692750000/?fields=feed.since(1491120066).limit(100){message,full_picture,source},link&access_token=EAACEdEose0cBAM1q08eFBSUaYhpzcgttKVQv6K5SntYGoKjfu1xahXgCBZBq7T1pP2yc02v6kd9r9y2ZBcq4SfQGX5fvtNdJwEt0SGa81811uYnrKOpy3evfYuG4IviLmE6GnAKSTKEZC9WN9fbLkYuTyZAJcHZC63YebQZCwUqWBKTvOQy4qjAtAwDtblzgUZD
1173636692750000/?fields=videos{embed_html}
1173636692750000/?fields=feed.since('.$since.').limit(500){source,created_time,from},videos

471876229811169/?fields=actions,admin_creator,allowed_advertising_objectives,application,backdated_time,call_to_action,caption,child_attachments,comments_mirroring_domain,coordinates,created_time,description,event,expanded_height,expanded_width,feed_targeting,formatting,from,full_picture,height,icon,id,implicit_place,instagram_eligibility,instream_eligibility,is_app_share,is_crossposting_eligible,is_expired,is_hidden,is_instagram_eligible,is_live_audio,is_popular,is_published,is_spherical,link,message,message_tags,name,object_id,parent_id,permalink_url,picture,place,privacy,promotion_status,properties,scheduled_publish_time,shares,source,status_type,story,story_tags,subscribed,target,targeting,timeline_visibility,type,updated_time,via,width,will_be_autocropped_when_deliver_to_instagram,with_tags,attachments,comments,edit_actions,insights,likes,reactions,sharedposts,to






select.replaceWith(res); thay thể
jQuery.unique(arr); loại bỏ phần tử trùng trong mảng
$("html, body").animate({ scrollTop: $(document).height() }, 0); // scroll bot
</script>

html
[&shy;] dãn
[&nbsp;] space
[&emsp;] tab
<meta name="viewport" content="width=device-width, initial-scale=1.0"> tỷ lệ web so với màn hình

<?php 
header
header('Content-Type: text/html; charset=utf-8');
header('Content-Type: application/json');
ép download toàn bộ nội dung dưới thẻ này và đóng thành file có dạng file_name.dinh_dang
header("Content-type: application/force-download");
header('Content-Disposition: attachment; filename="file_name.dinh_dang"');
header('Location: http://www.vforum.vn'); chuyển hướng web


php7
Random
string random_bytes ( int $length );  random chuỗi nhị phân
int random_int( int $min , int $max ) random số nguyên

số
ceil($x) làm tròn lên
đường dẫn
$_SERVER['SERVER_NAME'];  lấy link sever
$_SERVER['REQUEST_URI'];  lấy link  trang đang làm việc
echo(__FILE__);           dẫn file đang làm việc
dirname(__FILE__);        đường dẫn thư mục đang làm việc
echo(__DIR__);            đường dẫn thư mục đang làm việc


xử lý file 
(bool)unlink($link_file); xóa file
(bool)copy(string $source , string $dest);
mkdir( $pathname, $mode ); taoj thư mục mới

xử lý chuỗi
str_replace(find,replace,string,count);
strval(); int to string
htmlentities($str); html to text

str_repeat( $str, $n) lặp chuỗi n lần
echo strlen($string); độ dài chuỗi
str_split($value, 44);    cắt chuỗi thành 1 mảng các p tử chứa tối đa 44 kí tự
filter_var($link,FILTER_VALIDATE_URL); kiểm tra link
filter_var($email, FILTER_VALIDATE_EMAIL); kiểm tra email
$mang = explode($delimiter, $string); cắt $string thành mảng với lát cắt là $delimiter
$string = mplode($delimiter, $piecesarray) nối mảng thành chuỗi với từ nối $delimiter
strpos($string, $needle); trả về vị trí của $needle trong $string k thấy trả về false
substr($string , $start, $length): cắt chuỗi từ $start và dài $length
int strripos(string $str, string $find, [int $start])
Công dụng: trả ra vị trí cuối cùng của chuỗi $find tìm kiếm trong chuỗi $str
Hàm str_word_count($string ,[ int $format = 0 [, string $charlist ]]) : đếm tổng số từ có trong chuỗi
string: chỉ định chuỗi để kiểm tra
format: chỉ định kiểu giá trị trả về của hàm str_word_count(). Các giá trị này có thể là:
0 - Mặc định - trả về số lượng từ đếm được
1 - Trả về một mảng chứa các từ trong chuỗi
2 - Trả về một mảng với key là vị trí của từ trong chuỗi và value là từ trong chuỗi
charlist: chỉ định các ký tự đặc biệt sẽ được xem như một từ trong chuỗi


dung lượng bộ nhớ
echo "Ban đầu: ".memory_get_usage()." bytes \n";
echo "Cuối cùng : ".memory_get_usage()." bytes \n";
echo "Cao nhất: ".memory_get_peak_usage()." bytes \n";

JSON
echo json_encode($data, JSON_PRETTY_PRINT);
json_encode($array, JSON_UNESCAPED_UNICODE);

cURL 
$ch = curl_init(); khởi một CURL
curl_setopt($ch, CURLOPT_URL, $url); chọn url cần cURL
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.69 Safari/537.36"); giả trình duyệt
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false); in ngay dữ liệu curl đc ra màn hình
$html = curl_exec($ch); thực thi CURL và lưu giữ liệu vào biến
curl_setopt($ch, CURLOPT_FILE, $fp); lưu dữ liệu curl đc vào file
SQL 
mysqli_set_charset($con,"utf8");// Change character set to utf8
?>

metadata=1




<?php
highlight_string ('<h1>ass</h1>'); hightlight code
str_word_count($string); đến từ
levenshtein(str1, str2); đến số điểm khác nhau
get_defined_vars(); danh sách các biến cục bộ và biến trong hàm
escapeshellcmd($string); loại bỏ các kí tự có hại cho hệ thống
checkdate($d, $m, $y); kiểm tra ngày hợp lệ
?>
