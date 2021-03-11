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
    
    // global 키워드는 함수 내부에서 전역변수(global variable)를 접근하는 데 사용된다. 
    $x=5;
    $y=10;
    
    function myTest()
    {
    global $x,$y;
    $y=$x+$y;
    }
    
    myTest();
    echo $y; // outputs 15
    
    ?>
</body>
</html>