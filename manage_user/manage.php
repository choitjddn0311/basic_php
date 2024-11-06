<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php test</title>
    <link rel="stylesheet" href="manage.css">
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost','root','','restart');

        if($_SERVER["REQUEST_METHOD"] == 'POST') {
            $userid = $_POST['userid'];
            $name = $_POST['name'];
            $passwd = $_POST['passwd'];

            $sql_insert = "INSERT INTO manage_user(userid, name, passwd) VALUES ('$userid' , '$name' , '$passwd')";
            if(mysqli_query($conn,$sql_insert)) {
                echo "<p>회원가입 성공했노 이기야</p>";
            } else {
                echo "<p>오류:".mysqli_error($conn). "</p>";
            }
        }

        $sql = "SELECT idx, userid, name, passwd FROM manage_user";
        $result = mysqli_query($conn,$sql);
    ?>
    <main>
        <table>
            <tr>
                <th>User number</th>
                <th>User id</th>
                <th>User name</th>
                <th>User password</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?=$row['idx']?></td>
                <td><?=$row['userid']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['passwd']?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </main>
</body>
</html>


<!-- create table manage_user(
	idx int auto_increment primary key,
	userid varchar(255) not null,
	name varchar(255) not null,
	passwd varchar(255) not null
);

앙 테이블이;ㅁ
-->