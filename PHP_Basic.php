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
    echo 'Hello PHP!'.'<br>'.'-------'.'<br>';

    /* comment test */
    // comment test 2

    $a = 5;
    $b = 6;

    //산술연산자
    echo $a+$b.'<br>'; // 뱐수를 선언하더라도 변수명 앞에 $를 붙여줘야 한다
    echo $a*$b.'<br>';
    echo $a/$b.'<br>';
    echo $a%$b.'<br>';
    // echo $a**$b.'<br>'; // 제곱도 있음
  
    //비교연산자
    if($a != $b) {
        echo '다르다'.'<br>';
    }

    //증가연산자, 감소연산자
    echo ++$a.'<br>';
    // $a = b;
    echo ++$a.'<br>'; // 알파벳을 증가시키면 a 에서 b가 된다!!


    //논리연산자
    // $a and $b
    // $a or $b
    // $a xor $b : $a 또는 $b가 TRUE이면 TRUE를 반환
    // ! $a : $a가 TRUE가 아니면 TRUE를 반환
    // $a && $b : $a와 $b가 모두 TRUE이면 TRUE를 반환
    // $a || $b : $a나 $b가 TRUE이면 TRUE를 반환


    //조건문
    if ( condition ):
        statement;
      endif;
      // 중괄호 대신 endif 사용가능
      
    
    ?>
</body>
</html>