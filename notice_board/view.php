<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notice board</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost' , 'root' , '' , 'notice');

        $idx = isset($_GET['idx']) ? $_GET['idx'] : 0;
        $query = "SELECT title,contents FROM notice_board WHERE idx = $idx";
        $result = mysqli_query($conn , $query);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $title = $row['title'];
            $contents = $row['contents']; 
        } else {
            $title = '게시글이 존재하지 않습니다';
            $contents = '';
        }
    ?>
    <header>
        <div class="container hContainer">
            <div class="title">
                <h2>NOTICE BOARD</h2>
            </div>
        </div>
    </header>
    <main>
        <form class="container mContainer" action="insert.php" method="post">
            <input type="text" name="title" class="notice_title" value="<?php echo htmlspecialchars($title)?>" readonly>
            <textarea name="contents" class="notice_contents" readonly><?php echo htmlspecialchars($contents) ?></textarea>
            <button class="notice_submit"><a href="index.php">돌아가기</a></button>
        </form>
    </main>
</body>
</html>