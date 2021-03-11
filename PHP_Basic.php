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


    // //조건문 ( // 풀고 보기)

    // 중괄호 대신 endif 사용가능
    // if ( condition ):
    //     statement;
    //   endif;

    //   // elseif 띄어쓰기 안함
    //   if ( condition1 ) {  
    //     statement1;
    //   } elseif ( condition2 ) {
    //     statement2;
    //   } else {
    //     statement3;
    //   }

    //   // 중괄호 대신에 클론과 endif 사용 가능
    //   if ( condition1 ):
    //     statement1;
    //   elseif ( condition2 ):
    //     statement2;
    //   else:
    //     statement2;
    //   endif;

    //   // switch 문
    //   switch ( $var ) {
    //     case value1:
    //       statement1;
    //       break;
    //     case value2:
    //       statement2;
    //       break;
    //     ...
    //     default:
    //       statement3;
    //   }

    //   // 중괄호 대신 콜론과 endswitch를 사용 가능
    //   switch ( $var ):
    //     case val1:
    //       statement1;
    //       break;
    //     case val2:
    //       statement2;
    //       break;
    //     ...
    //     default:
    //       statement3;
    //   endswitch;

      //반복문 비슷함 but 중괄호 대신 endwhile endfor 사용가능


    ?>
</body>
</html>