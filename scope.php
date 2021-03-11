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
    $x=5; // global scope

    function myTest()
    {
    $y=10; // local scope
    echo "<p>Test variables inside the function:<p>";
    echo "Variable x is: $x"; // x 출력불가 -> 함수 외부에서 생성 된 변수는 사용하지못함
    echo "<br>";
    echo "Variable y is: $y";
    }

    myTest();

    echo "<p>Test variables outside the function:<p>";
    echo "Variable x is: $x";
    echo "<br>";
    echo "Variable y is: $y"; // y 출력불가 -> 함수 내부에서 생성 된 변수는 사용하지못함



    // global 키워드는 함수 내부에서 전역변수(global variable)를 접근하는 데 사용된다. 
    $x=5;
    $y=10;
    
    function myTest2()
    {
    global $x,$y;
    $y=$x + $y;
    }
    
    myTest();
    echo $y; // outputs 15


?>
</body>
</html>