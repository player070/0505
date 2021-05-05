<?php
// var_dump($_POST);
$conn = mysqli_connect("localhost", "root", "132435", "opentutorials");
$sql = "insert into topic (title, discription, created) value('{$_POST['desc1']}','{$_POST['desc2']}', NOW())";
// echo $sql;
$result = mysqli_query($conn,$sql);
if ($result == false){
    echo '문제가 발생하였습니다.';
}
else {
    echo '성공했습니다.<a href="index.php">돌아가기</a>';
}

?>
