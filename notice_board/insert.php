<?php
    $conn = mysqli_connect('localhost' , 'root' , '' , 'notice');
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $title = $_POST['title'];
        $contents = $_POST['contents'];

        if(empty($title) && empty($contents)){
            echo "<script>alert('내용이 비어있습니다.');</script>";
        } else {
            $query = "INSERT INTO notice_board (title,contents) VALUES ('$title','$contents')";
            mysqli_query($conn , $query);
        }
    }

    header('Location: index.php');
    exit;
?>