<?php
    $conn = mysqli_connect('localhost' , 'root' , '' , 'notice');

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $title = isset($_POST['title']) ? trim($_POST['title']) : '';
        $contents = isset($_POST['contents']) ? trim($_POST['title']) : '';

        if(empty($title) || empty($contents)){
            echo "<script>alert('내용이 비어있습니다.'); history.back() </script>";
            exit;
        }
    }

    $stmt = $conn->prepare("INSERT INTO notice_board (title,contents) VALUES (?,?)");
    $stmt->bind_param('ss' , $title , $contents);

    if($stmt->execute()) {
        echo "<script>alert('글이 성공적으로 등록되었습니다'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('글 등록 중 오류가 발생했습니다'); history.back();</script>";
    }

    $stmt->close();
    mysqli_close($conn);
?>