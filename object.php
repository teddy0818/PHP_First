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
    // 객체 접근 방법은 "->"를 쓰는것
    // but 속성이나 메소드에 접근할때는 $ 표시를 붙이지 않도록 주의. $ 붙이면 해당변수를 가르킴

        $object = new User;     // new 키워드로 User 객체를 생성한다.

        $object->printUser(); // 비어있는 User 객체 출력

        $object->id = "taddy0818";
        $object->email = "taddy0818@naver.com";
        $object->name = "황병진";
        $object->birthday = "92.07.12";

        $object->printUser(); // 값넣고나서 User 객체 출력
        $object->printHaha();


        class User{     // User 클래스 선언
                
            public $id, $email, $name, $birthday;  //public으로 변수 선언

            function printUser(){   // User 클래스에 printUser 메소드 선언
                print_r($this);      // User 클래스 Print // print_r() : 변수정보출력 내장함수
                echo "<br>";
            }

            function printHaha() {
                echo "하하";
            }
        }

    ?>
</body>
</html>