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
        $query = "SELECT title,contents FROM notice_board";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0 ){
            $row = mysqli_fetch_assoc($result);
            $title = $row['title'];
            $contents = $row['contents'];
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

        </form>
    </main>
</body>
</html>