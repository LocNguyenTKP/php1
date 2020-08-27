<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thao tác CSDL MySQL</title>

</head>
<body>
<h1> my sql</h1>
    <?php
    // Truy vấn database để lấy danh sách
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    // Ví dụ: file đang viết code ở /example/thuc_thi_cau_lenh_insert.php
    // C:\xampp\htdocs\web02\dbconnect.php vào file đang viết code
    // 
    include_once( 'dbconect.php');
    // 2. Chuẩn bị QUERY
    $taikhoanmoi = 'momo'; //$_POST['httt_ten'];
    $sql = "INSERT INTO `hinhthucthanhtoan`(httt_ten) VALUES('$taikhoanmoi');";
    // 3. Thực thi
    mysqli_query($conn, $sql);

   var_dump($sql);
    ?>
</body>
</html>