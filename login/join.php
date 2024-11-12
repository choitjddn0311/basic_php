<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>join</title>
    <link rel="stylesheet" href="join.css">
</head>
<body>
    <main>
        <form action="login.php" method="post">
            <h1>join</h1>
            <div class="inputContainer">
                <input type="text" name="id" placeholder="enter your id" class="id">
                <input type="password" name="pw" placeholder="enter your password" class="pw">
                <input type="password" name="pwCheck" placeholder="enter your password, again" class="pwCheck">
            </div>
            <input type="submit" value="join" class="joinBtn">
        </form>
        <?php
            $conn = mysqli_connect('localhost' , 'root' , '' , 'user_account');

            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $user_id = mysqli_real_escape_string($conn,$_POST['id']);
                $user_pw = mysqli_real_escape_string($conn, $_POST['pw']);
                
                $insert = "INSERT INTO joinData(id,password) VALUES('$user_id' ,  '$user_pw')";

                if(mysqli_query($conn , $insert)){
                    echo "
                    <script>
                        alert('join complete!');
                        location.href = 'login.php'
                    </script>
                    ";
                } else {
                    echo "
                    <script>
                        alert('join fail');

                    </script>
                    ";
                }
            }
        ?>
    </main>
</body>
</html>