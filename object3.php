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
 // 생성자 - __construct()
 /*
 새로운 객체를 생성할 때 매개 변수의 리스트를 호출되는 클래스로 전달할 수 있다.

이것은 여러 가지 속성을 초기화하는 생성자(Constructor)라고 하는 클래스 내에 특별한 메소드로 전달된다.

생성자는 __construct() 를 메소드 이름으로 사용한다.
*/


 $object = new User();                  //  User 객체 생성하면서 __construct() 함수 실행

 echo $object->name;            //  Hyun 출력


  
 class User{     // User 클래스 선언
       
       public $id, $email, $name, $birthday;  //public으로 변수 선언

       function __construct(){       // 생성자 선언
           
           $this->name = "Hyun";     // 객체가 생성되면서 name 속성에 Hyun 대입   
       
       }
       function printUser(){   // User 클래스에 printUser 메소드 선언
           print_r($this);      // User 클래스 Print
       }
   }
?>
</body>
</html>