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
        $query = "SELECT idx , title , contents FROM notice_board ORDER BY idx DESC";
        $result = mysqli_query($conn,$query);
    ?>
    <header>
        <div class="container hContainer">
            <div class="title">
                <h2>NOTICE BOARD</h2>
            </div>
        </div>
    </header>
    <main>
        <div class="container mContainer">
            <a href="create.php" class="create">글 등록</a>
            <ul class="writing">
                <?php
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<li>';
                            echo '<div class = "about">';
                            echo '<p>'. htmlspecialchars($row['idx']) . '</p>';
                            echo '<h3>'. htmlspecialchars($row['title']) . '</h3>';
                            echo '</div>';
                            echo '<button><a href="view.php?idx=' .$row['idx'] . '">보기</a></button>';
                            echo '</li>';
                        }
                        } else {
                            echo '<li>등록된 게시글이 없습니다</li>';
                    }
                ?>
            </ul>
        </div>
    </main>
</body>
</html>