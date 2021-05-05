<?php
    include './conn.php';
    $sql = 'select * from topic';
    $result = mysqli_query($conn, $sql);
    
    $list = '';
    while($row = mysqli_fetch_array($result)){
        $list = $list. "<li><a href='index.php?id={$row['id']}'>{$row['title']}</a></li>";
    }

    $article = array (
        'title' => 'Welcome',
        'discription' => 'Hello Web',
    );
    $update_link ='';

    if(isset ($_GET['id'])){
        $sql = "select * from topic where id={$_GET['id']}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $article ['title'] = $row['title'];
        $article ['discription'] = $row['discription'];

        $update_link = '<a href="update.php?id='.$_GET['id'].'">수정</a>';
    }
    else{

    }
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>    
    <ol>
        <?=$list?>
    </ol>
    <a href="create.php">작성</a>
    <?=$update_link?>
    <form action="process_create.php" method="POST">
        <p><input type="text" name="desc1" placeholder="제목" id=""></p>
        <p><textarea name="desc2" id="" cols="30" rows="10" placeholder ="본문"></textarea></p>
        <p><input type="submit" value="submit"></p>
    </form>


</body>
</html>