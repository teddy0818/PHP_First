<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        writeMsg(); // 자바랑 다르게 함수선언 전에 써도 실행됨!!

        // 함수선언
        function writeMsg()
        {
            echo "Hello function!!"."<br>";
        }

        
    ?>
</body>
</html>