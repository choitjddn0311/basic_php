<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>join</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <main>
        <form action="login.php" method="post">
            <h1>Join</h1>
            <div class="infoContainer">
                <input type="text" placeholder="enter your id" name="id" class="id">
                <input type="password" placeholder="enter your password" name="password" class="pw">
                <input type="password" placeholder="enter your password, again" class="pwCheck">
            </div>
            <input type="submit" value="join the dashboard" class="submit">
        </form>
        <?php 
        $conn = mysqli_connect('localhost' , 'root' , '' , 'dashboard');
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_id = $_POST['id'];
            $user_pw = $_POST['password'];

            $insert = "INSERT INTO joinData(id,password) VALUES('$user_id','$user_pw')";

            if (mysqli_query($conn, $insert)) {
                echo "
                <script>
                    alert('join complete');
                    location.href='login.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('join failed: " . mysqli_error($conn) . "');
                </script>
                ";
            }            
        }


        ?>
    </main>
    <script>
        const id = document.querySelector('.id');
        const pw = document.querySelector('.pw');
        const pwCheck = document.querySelector('.pwCheck');
        const submit = document.querySelector('.submit');

        submit.addEventListener('click' , (event) => {
            if(pw.value != pwCheck.value) {
                event.preventDefault();
                alert('the password is not correct!');
            }
        });
    </script>
</body>
</html>