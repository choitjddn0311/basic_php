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

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $user_id = $_POST['id'];
                $user_pw = $_POST['pw'];

                $insert = "INSERT INTO joinData(id,password) VALUES('$user_id' , '$user_pw')";

                if(mysqli_query($conn,$insert)){
                    echo "
                    <script>
                        alert('join complete');
                        location.href = 'login.php';
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

    <script>
        const id = document.querySelector('.id');
        const pw = document.querySelector('.pw');
        const pwCheck = document.querySelector('.pwCheck');
        const joinBtn = document.querySelector('.joinBtn');

        joinBtn.addEventListener('click',(e) => {
            if(id.value.trim() === ''){
                alert('please input your id');
                e.preventDefault();
                return;
            }
            if(pw.value.trim() === '' || pwCheck.value.trim() === ''){
                alert('please input your password');
                e.preventDefault();
                return;
            }

            if(pw.value !== pwCheck.value){
                alert('the password is not correct');
                e.preventDefault();
                return;
            }
        })
    </script>
</body>
</html>