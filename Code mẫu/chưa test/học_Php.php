<?php 
string http_build_query($arrParam); tạo url value
string http_build_query($arrParam, $tuNoi);

$_REQUEST bằng $_POST và $_GET

if(filter_var($url2,FILTER_VALIDATE_URL)) validate url


highlight_string("<?php echo('ngu'); ?>"); tạo màu cho code php khi in ra
levenshtein($str2, $str2); đến số kí tự khác nhau
	$str1 = "tôi yêu lập trình";
	$str2 = "tôi yêeu lậap trình";
	echo levenshtein($str1, $str2); // có 2 sự khac biệt
print_r(get_defined_vars()); in ra toàn bộ biến đang tồn tại trước khi hàm này được gọi
?>