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
    
//PHP 는 $GLOBALS[index] 라는 배열에 모든 전역변수(global variables)들을 저장한다. index 는 변수 이름을 말하며, 이 배열은 함수 내부에서도 접근이 가능하며, 전역변수(global variables)를 업데이트 하는데도 사용될 수 있다. 

$x=5;
$y=10;

function myTest()
{
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}

myTest();
echo $y; // outputs 15

    ?>
</body>
</html>