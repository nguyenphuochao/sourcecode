<?php
if (!isset($_SESSION)) session_start();
$tam= isset($_SESSION['cart'])?$_SESSION['cart']:[];
?>

<?php
// echo '<pre>';
// print_r($tam);
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Chủ</title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/font-awesome.min.css" rel="stylesheet" type="text/css">
<style>
 .container {
    width:50%;
    margin: auto;
}
 
.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 50%;
}
 
.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
 
.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; 
}
</style>
</head>
<body>


<div class="container">
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>
     
    <div class="main">
        <h1>Freetuts.net hướng dẫn tạo Fixed Top Menu</h1>
        <p> PHP (viết tắt hồi quy "PHP: Hypertext Preprocessor") là một ngôn ngữ lập</p>
        <p> trình kịch bản hay một loại mã lệnh chủ yếu được dùng để phát triển các</p>
        <p> ứng dụng viết cho máy chủ, mã nguồn mở, dùng cho mục đích tổng quát. </p>
        <p> Nó rất thích hợp với web và có thể dễ dàng nhúng vào trang HTML. </p>
        <p> Do được tối ưu hóa cho các ứng dụng web, tốc độ nhanh, nhỏ gọn, </p>
        <p> cú pháp giống C và Java, dễ học và thời gian xây dựng sản phẩm </p>
        <p> tương đối ngắn hơn so với các ngôn ngữ khác nên PHP đã nhanh chóng</p>
        <p> trở thành một ngôn ngữ lập trình web phổ biến nhất thế giới.</p>
 
        <p> Thẻ  và thẻ  sẽ đánh đấu sự bắt đầu và sự kết thúc của phần </p>
        <p> mã PHP qua đó máy chủ biết để xử lý và dịch mã cho đúng. </p>
        <p> Đây là một điểm khá tiện lợi của PHP giúp cho việc viết mã PHP </p>
        <p> trở nên khá trực quan và dễ dàng trong việc xây dựng phần </p>
        <p> giao diện ứng dụng HTTP.
        <p> Ngôn ngữ, các thư viện, tài liệu gốc của PHP được xây dựng </p>
        <p> bởi cộng đồng và có sự đóng góp rất lớn của Zend Inc., </p>
        <p> công ty do các nhà phát triển cốt lõi của PHP lập nên nhằm tạo ra </p>
        <p> một môi trường chuyên nghiệp để đưa PHP phát triển ở quy mô doanh nghiệp. </p>
    </div>
</div>
</body>
</html>