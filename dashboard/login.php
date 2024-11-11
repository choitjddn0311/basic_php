<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <main>
        <form action="" method="post">
            <h1>login</h1>
            <div class="infoContainer">
                <input type="text" name="id" placeholder="enter your id">
                <input type="password" name="password" placeholder="enter your password">
            </div>
            <input type="submit" value="login">
        </form>

        <?php
        $conn = mysqli_connect('localhost' , 'root' , '' , 'dashboard');
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $user_id = $_POST['id'];
            $user_pw = $_POST['password'];

            $insert = "SELECT * FROM joinData where id = '$user_id'";
            $result = mysqli_query($conn,$insert);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                if(password_verify($user_pw, $row['password'])) {
                    echo "<script>alert('login succesful');</script>";
                    echo "<script>location.href = 'index.php';</script>";
                } else {
                    echo "<script>alert('Uncorrect ID or password')</script>";
                }
                } else {
                    echo "<script>alert('Uncorrect ID or password')</script>";
            }
        }

        mysqli_close($conn);
        ?>
    </main>
</body>
</html>