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
                <!-- <li>
                    <div class="about">
                        <h3>글제목1</h3>
                        <button><a href="">보기</a></button>
                    </div>
                    <div class="editBtnContainer">
                        
                    </div>
                </li> -->
                <li><p>1</p><h3>글제목2</h3><button><a href="">보기</a></button></li>
            </ul>
        </div>
    </main>
</body>
</html>