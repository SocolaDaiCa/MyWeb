lấy dữ liệu
SELECT column1, column2 FROM table_name;
lấy dữ liệu theo điều kiện
SELECT column1, column2 FROM table_name WHERE condition;
lấy dữ liệu theo nhiều điều kiện
SELECT column1, column2 FROM table_name WHERE condition1 AND condition2 OR condition3;
SELECT column1, column2 FROM table_name WHERE NOT condition1;
lọc trùng khi lấy dữ liệu
SELECT DISTINCT Country FROM Customers;

lọc trùng khi đếm dữ liệu
SELECT COUNT(DISTINCT Country) FROM Customers;

toán tử
= bằng
<> khác
> lớn hơn
< nhỏ hơn
>= lớn hơn hoặc bằng
BETWEEN 1 AND 2 trong khoảng
