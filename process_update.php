<?php
include './conn.php';

$id = $_POST['id'];
$title = $_POST['title'];
$disc = $_POST['discription'];

$sql = "update topic SET title = '{$title}', discription = '{$disc}' WHERE id = {$id}";

$result = mysqli_query($conn,$sql);
echo var_dump($result);

if ($result == false){
    echo '문제가 발생하였습니다.';
}
else {
    echo '성공했습니다.<a href="index.php">돌아가기</a>';
}
?>

