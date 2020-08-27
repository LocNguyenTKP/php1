<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ten hinh thuc thanh toan</title>

</head>
<body>
<form name="formnew" id="formnew" method="post" action="">
<table>
<tr>
<td> Ten hinh thuc thanh toan </td>
</tr>
<tr>
<td> 
<input type="text" name="text_httt_ten" id="text_httt_ten"  />
</td>
</tr>
<tr>
<td> 
<input type="submit" name="btnluudulieu" id="btnluudulieu" value="btnluudulieu" />
</td>
</tr>

</table>

</form>

<?php
if (isset($_POST['btnluudulieu'])){
$httt_ten=$_POST['text_httt_ten'];

include_once( 'dbconect.php');

$sql = "INSERT INTO `hinhthucthanhtoan`(httt_ten) VALUES('$httt_ten');";
// // 3. Thực thi
mysqli_query($conn, $sql);


}


?>

</body>
</html>