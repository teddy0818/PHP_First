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
 // 소멸자 - __destruct()
 /*
PHP 코드가 마지막 참조를 하고 났을 때나 스크립트가 끝에 도달한 경우 소멸자를 실행하며, 객체를 해제한다.

소멸자 메소드는 __destruct() 로 명명한다.
 */


 $object = new User();                  //  User 객체 생성하면서 __construct() 함수 실행

 echo $object->name;            //  Hyun 출력


  
 class User{     // User 클래스 선언
       
       public $id, $email, $name, $birthday;  //public으로 변수 선언

       function __construct(){       // 생성자 선언
           
           $this->name = "Hyun";     // 객체가 생성되면서 name 속성에 Hyun 대입   
       
       }

       function __destruct(){
        
        echo "User 객체 소멸";    
     
     }

       function printUser(){   // User 클래스에 printUser 메소드 선언
           print_r($this);      // User 클래스 Print
       }
   }
?>
</body>
</html>