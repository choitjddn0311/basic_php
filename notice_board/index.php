<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notice board</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
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
            <div class="searchBox">
                <input type="text" placeholder="검색해주세요." name="search" class="search">
            </div>
        </div>
    </main>
</body>
</html>




<!-- <!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Board</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'notice');
        $query = "SELECT title, contents FROM notice_board ORDER BY id DESC";
        $result = mysqli_query($conn, $query);
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
            <input type="text" placeholder="글의 제목을 적어주세요." name="title" class="notice_title" required>
            <textarea name="contents" class="notice_contents" placeholder="글의 내용을 입력해주세요" required></textarea>
            <input type="submit" value="글 올리기" class="notice_submit">
        </form>
        <section class="container notice_list">
            <h3>게시글</h3>
            <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<article class='notice_item'>";
                        echo "<h4>" . htmlspecialchars($row['title']) . "</h4>";
                        echo "<p>" . nl2br(htmlspecialchars($row['contents'])) . "</p>";
                        echo "</article>";
                    }
                } else {
                    echo "<p>게시글이 없습니다.</p>";
                }
            ?>
        </section>
    </main>
</body>
</html>
 -->