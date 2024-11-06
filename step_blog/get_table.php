<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        //db와 커넥트 시키는것이다 $conn이라는 변수선언 
        $conn = mysqli_connect('localhost','root','','testdb');

        // connect 가 false면 die로 error문구를 띄운다
        if($conn == false){
            die('니놈에 에러는:' .mysqli_connect_error()."이거다");
        }
        $value = "INSERT INTO test_table"
    ?>
</body>
</html>