<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post 전송</title>
</head>
<body>
    <script>
        function one() {
            let txt1 = document.querySelector('.txt1');
            let txt2 = document.querySelector('.txt2');
            if (txt1.value == '' || txt2.value == '') {
                alert('입력해야할 값이 비어있습니다');
                return false;  // 오타 수정: flase -> false
            }
            return true;
        }
    </script>
    <form action="1sub.php" method="POST" onsubmit="return one()">
        <input type="text" name="txt1" class="txt1">
        <input type="text" name="txt2" class="txt2">
        <input type="submit" value="제출">
    </form>
</body>
</html>
