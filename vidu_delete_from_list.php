<?php
    // Truy vấn database để lấy danh sách
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    // C:\xampp\htdocs\web02\
    include_once('dbconect.php');
    // 2. Chuẩn bị QUERY
    // GET
    // http://localhost:1000/web02/vidu_delete_from_list.php?httt_ma=7
    $httt_ma = $_GET['httt_ma'];
    
    // HERE DOC
    $sql = <<<EOT
    DELETE FROM `hinhthucthanhtoan` WHERE httt_ma=$httt_ma
EOT;
    // 3. Yêu cầu PHP thực thi QUERY
    mysqli_query($conn, $sql);
    // Redirect (điều hướng) về trang bạn mong muốn
    header('location:vidu_select.php');
?>