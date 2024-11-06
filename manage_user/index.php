<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>개인정보수집</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost' , 'root' , '' , 'restart')
    ?>
    <main>
        <form action="manage.php" method="post">
            <h1>sign up</h1>
            <input type="text" placeholder="enter the id" name="userid">
            <input type="text" placeholder="enter the your name" name="name">
            <input type="password" placeholder="enter the password" name="passwd">
            <input type="submit" value="submit">
        </form>
    </main>
</body>
</html>