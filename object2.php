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
    /*
    new로 객체를 생성하여 매개 변수로 넘길 때는 참조로 넘어간다. 따라서 새로운 메모리를 할당하는 것이아닌 객체의 주소값을 전달하는 것이다. 다시 말해서 객체를 대입하는 것은 전체를 복사하는 것이 아니다.

    참조로 주소값을 전달하면, 같은 메모리의 인스턴스를 사용하기 때문에 한쪽에서 객체의 속성에 접근하여 값을 변경하면, 다른 변수에서 해당 속성에 접근해도 같이 변경되어 있다.

    새로운 객체의 복제를 원한다면 clone 키워드를 사용하면 된다.
    */

        $object1 = new User();         // User 객체 생성하여 object1 변수에 대입
 
        $object1->name = "Hyun";     // object1 객체의 name 속성에 Hyun 대입
     
      $object2 = $object1;              // object1 객체의 참조값 object2에 대입
     
      $object2->name = "Rang";     // object2 객체의 name 속성에 Rang 대입
     
      
      echo "object1 name = " . $object1->name . "<br>";     // Rang 출력
     
      echo "object2 name = " . $object2->name . "<br>";    // Rang 출력
     
     
      $object3 = clone $object1;                   // object1 객체를 복제하여 object3에 대입
     
      $object3->name = "Ten";                     // object3 객체의 name 속성에 Ten 대입
     
     
      echo "object1 name = " . $object1->name . "<br>";    // Rang 출력
     
      echo "object3 name = " . $object3->name . "<br>";    // Ten 출력
     
     
      class User{     // User 클래스 선언
            
            public $id, $email, $name, $birthday;  //public으로 변수 선언
     
            function printUser(){   // User 클래스에 printUser 메소드 선언
                print_r($this);      // User 클래스 Print
            }
        }


    ?>
</body>
</html>