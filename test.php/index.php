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
            
            */
//             ?>
//             This is my first pHp webpage; <br>
// This is my first pHp webpage; <br>
//          <?php
               echo "Hello WorldAlso again!";
  
               $variable1 = 5;
               $variable2 = 6;
               echo $variable1 + $variable2
               operators in pHp
               Arithmetic operators  
               + - * / %
               echo "The value of the variable1 - variables2 is:";
               echo $variable1 - $variable2; <br>
               echo "The value of the variable1 + variables2 is:";
               echo $variable1 + $variable2; <br>
               echo "The value of the variable1 * variables2 is:";
               echo $variable1 * $variable2; <br>
               echo "The value of the variable1 / variables2 is:";
               echo $variable1 / $variable2; <br>
               echo "The value of the variable1 % variables2 is:";
               echo $variable1 % $variable2; <br>
            //Assignment operators
            // = += -= *= /= %=
            $newVar = 10;


            echo "The value of the variable1 after += is:";
            echo $newVar += 1; <br>  
            echo "The value of the variable1 after -= is:";
            echo $newVar -= 5; <br>  
            echo "The value of the variable1 after *= is:";
            echo $newVar *= 5; <br>  
            echo "The value of the variable1 after /= is:";
            echo $newVar /= 5;  <br>
            echo "The value of the variable1 after %= is:";
            echo $newVar %= 5;   <br> //newVar = newVar % 5

            //Comparison operators
            // == === != <> !== > < >= <=

            echo "The value of 1==6 is:";
            echo var_dump(1==6); <br>   //var_dump shows boolean value
            echo "The value of 1!=6 is:";
            echo var_dump(1!=6); <br>   //var_dump shows boolean value
            echo "The value of 1<>6 is:";
            echo var_dump(1<>6); <br>  //var_dump shows boolean value
            echo "The value of 1<6 is:";
            echo var_dump(1<6); <br>  //var_dump shows boolean value
            echo "The value of 1>6 is:";
            echo var_dump(1>6); <br>  //var_dump shows boolean value
            echo "The value of 1<=6 is:";
            echo var_dump(1<=6); <br>  //var_dump shows boolean value
            echo "The value of 1>=6 is:";
            echo var_dump(1>=6); <br>  //var_dump shows boolean value
            echo "The value of 1===6 is:";
            echo var_dump(1===6); <br>   //var_dump shows boolean value
            echo "The value of 1!==6 is:";
            echo var_dump(1!==6); <br> //Bitwise operators
            
            //Increment/Decrement operators
            // ++ -- --
            echo "The value of newVar is:";
            echo $newVar; <br>
            echo "The value of newVar after ++ is:";    //post-increment
            echo $newVar++; <br>  //post-increment
            echo "The value of newVar after ++ is:";  //pre-increment
            echo ++$newVar; <br>  //pre-increment
            echo "The value of newVar after -- is:";    //post-decrement
            echo $newVar--; <br>  //post-decrement    //decreases value but shows previous value
            echo "The value of newVar after -- is:";   //pre-decrement
            echo --$newVar; <br>  //pre-decrement
            //Logical operators
            echo "The value of true and false is:";  //and
            echo var_dump(true and false); <br>  //and
            echo "The value of true or false is:";
            echo var_dump(true or false); <br>   //or
            echo "The value of true xor false is:";
            echo var_dump(true xor false); <br>   //xor
            echo "The value of !true is:";
            echo var_dump(!true); <br>   //not
            echo "The value of true && false is:";
            echo var_dump(true && false); <br>   //&&
            echo "The value of true || false is:";
            echo var_dump(true || false); <br>   //||
            // and or xor && || !



            ?>
        </div>
</body>
</html>