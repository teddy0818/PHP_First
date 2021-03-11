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

        session_start();

        $_SESSION[ 'no' ] = 123; //no 라는 key 값에 123 넣기
        $_SESSION[ 'username' ] = 'abc';

        // echo session_id(); // 세션id 출력


        echo $_SESSION[ 'no' ]; // 값을 출력
        echo $_SESSION[ 'username' ] . '<br>'; // 값을 출력

        $num = 5;

        var_dump( $_SESSION ); // 모든 세션값을 출력

    
    ?>
</body>
</html>