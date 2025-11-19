<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
         This is my first pHp webpage; <br>
         <?php
            echo "Hello World and this is my first php programm!";
            // end pHp
            /*this is a 
             Multiline 
            comment 
            
            */?>
            <br>
<?php
   echo "Hello WorldAlso again!";

   $variable1 = 5;
   $variable2 = 6;
   echo $variable1 + $variable2;
   //    operators in pHp
   //    Arithmetic operators  
   //  + - * / %
   //    echo "The value of the variable1 - variables2 is:";
   //    echo $variable1 - $variable2;
   //    echo "The value of the variable1 + variables2 is:";
   //    echo $variable1 + $variable2;
   //    echo "The value of the variable1 * variables2 is:";
   //    echo $variable1 * $variable2;
   //    echo "The value of the variable1 / variables2 is:";
   //    echo $variable1 / $variable2;
   //    echo "The value of the variable1 % variables2 is:";
   //    echo $variable1 % $variable2;
   // //Assignment operators
   // = += -= *= /= %=

   $newVar = 10;

   echo "The value of the variable1 after += is:";
   $newVar += 1;
   echo $newVar;
   echo "<br>";
   echo "The value of the variable1 after -= is:";
   $newVar -= 5;
   echo $newVar;
   echo "<br>";
   echo "The value of the variable1 after *= is:";
   $newVar *= 5;
   echo $newVar;
   echo "<br>";
   echo "The value of the variable1 after /= is:";
   $newVar /= 5;
   echo $newVar;
   echo "<br>";
   echo "The value of the variable1 after %= is:";
   $newVar %= 5; // newVar = newVar % 5
   echo $newVar;
   echo "<br>";

   //Comparison operators
   // == === != <> !== > < >= <=

   echo "The value of 1==6 is:";
   var_dump(1==6);
   echo "<br>";
   echo "The value of 1!=6 is:";
   var_dump(1!=6);
   echo "<br>";
   echo "The value of 1<>6 is:";
   var_dump(1<>6);
   echo "<br>";
   echo "The value of 1<6 is:";
   var_dump(1<6);
   echo "<br>";
   echo "The value of 1>6 is:";
   var_dump(1>6);
   echo "<br>";
   echo "The value of 1<=6 is:";
   var_dump(1<=6);
   echo "<br>";
   echo "The value of 1>=6 is:";
   var_dump(1>=6);
   echo "<br>";
   echo "The value of 1===6 is:";
   var_dump(1===6);
   echo "<br>";
   echo "The value of 1!==6 is:";
   var_dump(1!==6);
   echo "<br>"; //Bitwise operators

   //Increment/Decrement operators
   // ++ -- --
   echo "The value of newVar is:";
   echo $newVar;
   echo "<br>";
   echo "The value of newVar after ++ is:";    //post-increment
   echo $newVar++;
   echo "<br>";
   echo "The value of newVar after ++ is:";  //pre-increment
   echo ++$newVar;
   echo "<br>";
   echo "The value of newVar after -- is:";    //post-decrement
   echo $newVar--;
   echo "<br>";
   echo "The value of newVar after -- is:";   //pre-decrement
   echo --$newVar;
   echo "<br>";
   //Logical operators
   echo "The value of true and false is:";  //and
   var_dump(true and false);
   echo "<br>";
   echo "The value of true or false is:";
   var_dump(true or false);
   echo "<br>";
   echo "The value of true xor false is:";
   var_dump(true xor false);
   echo "<br>";
   echo "The value of !true is:";
   var_dump(!true);
   echo "<br>";
   echo "The value of true && false is:";
   var_dump(true && false);
   echo "<br>";
   echo "The value of true || false is:";
   var_dump(true || false);
   echo "<br>";
   // and or xor && || !
   $myVar = (true and false);
   $myVar2 = (true && false);
   $myVar3 = (true or false);
   $myVar4 = (true || false);
   $myVar5 = (true xor false);
   $myVar6 = (!true);
   echo "<br>";
   echo "The value of myVar is:";
   var_dump($myVar);  //the var_dump shows boolean value of myVar
   echo "<br>";
   echo "The value of myVar2 is:";
   var_dump($myVar2);  //the var_dump shows boolean value of myVar2
   echo "<br>";
   echo "The value of myVar3 is:";
   var_dump($myVar3);  //the var_dump shows boolean value of myVar3
   echo "<br>";
   echo "The value of myVar4 is:";
   var_dump($myVar4);  //the var_dump shows boolean value of myVar4
   echo "<br>";
   echo "The value of myVar5 is:";
   var_dump($myVar5);  //the var_dump shows boolean value of myVar5
   echo "<br>";
   echo "The value of myVar6 is:";
   var_dump($myVar6);  //the var_dump shows boolean value of myVar6       
   ?>

            <br>

            <?php
               echo "break statement in pHp <br>  Data typres in pHp <br>";
               //Data types in pHp
                //1. String
                //2. Integer
                //3. Float
                //4. Boolean
                //5. Array
                //6. Object
                //7. NULL
                //8. Resource


                //String        
                $var1 = "This is a string";
                echo "The value of var1 is:";
                echo var_dump($var1); 
                //Integer
                $var2 = 34;
                echo "The value of var2 is:";
                echo var_dump($var2);   
                //Float
                $var3 = 34.5;

                echo "The value of var3 is:";
                echo var_dump($var3); 
                //Boolean
                $var4 = true;

                echo "The value of var4 is:";
                echo var_dump($var4); 
                //Array
                $var5 = array("apple", "banana", "orange");

                echo "The value of var5 is:";
                echo var_dump($var5); 
                //Object
                class Car {
                    public $color;
                    public $model;
                    public function __construct($color, $model) {
                        $this->color = $color;
                        $this->model = $model;
                    }
                    public function message() {
                        return "My car is a " . $this->color . " " . $this->model . "!";
                    }
                }
                $var6 = new Car("black", "Toyota");
                echo "The value of var6 is:";
                echo var_dump($var6); 
                //NULL
                $var7 = NULL;

                echo "The value of var7 is:";
                echo var_dump($var7); 
                //Resource
                $var8 = fopen("test.txt", "r");
                echo "The value of var8 is:";
                echo var_dump($var8); 

                   

               ?>
        </div>
</body>
</html>