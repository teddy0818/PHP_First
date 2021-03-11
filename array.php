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
    // 배열선언! 5이후 버젼에선 $arr = ['1', '2'] 가능 근데 왜 안되지?
    // php에선 배열에 key값을지정가능
    $arr = array('abc'=>'abc', 2=>'def', 'bb bb'=>'bb bb');
    // echo $arr[0];
    //echo count($arr); // 그냥문자 arr 적어도 에러는 안터졌음.. why?


    // PHP 배열의 데이터를 순회방법 중 가장 손쉬운 방법은 foreach() 사용
    foreach($arr as $value) {
        echo $value.'<br>';
    }

    // array_key_exists() : key 값을 찾아 존재하면 true 반환
    if(array_key_exists("abc",$arr)) {
        echo 'key abc는 존재한다.'.'<br>';
    }

    // in_array() : 원소 값을 찾아 존재하면 true 반환
    if(in_array('def', $arr)) {
        echo '원소 def는 존재한다.'.'<br>';
    }

    //array_search() : 원소 값을 찾아 key값을 반환
    $dish = array_search('def', $arr);
    echo $dish;

    // 배열에 문장선언
    //  배열의 키에 화이트스페이스 ( 띄어쓰기 ) 나 문장기호가 들어 갔을때는 중괄호를 이용해 삽입할 수 있다. 
    $arr['bb bb'] = '밥';
    echo "런치 디저트는 {$arr['bb bb']}이다."."<br>";

    //unset() : 배열에서 원소를 제거
    unset($arr['bb bb']);
    echo "런치 디저트는 {$arr['bb bb']}이다."."<br>";

    // implode() : 배열의 모든 원소를 한번에 출력
    $all = implode($arr, ', ')."<br>";
    echo $all;

    //explode() : implode 와 반대로 문자열을 조각내어 배열로 만들 때 사용
    $arr2 = explode(' ', "5 5 5 5 5 5");
    echo "1번째".$arr2[0]."<br>";

    //sort() : 배열을 정렬하는 함수이다. 배열의 원소의 값을 기준으로 배열을 정렬하고 배열의 키가 새로 지정
    sort($arr);
    echo $arr[0];



    ?>
</body>
</html>