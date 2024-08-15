<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <h1>Hello, world! 1</h1>


    <?php
    echo"<h2>Lorem ipsum dolor sit amet, consectetur adipisicing.</h2>";
    echo "fgfgfdg";
    echo "<h4>" . "Hello, world! 5" . "</h4>";
    echo "<h4>" . "Hello, world! 6" . "</h4>";
    print "hello world"
    ?>

    </div>

    <div class="container">
      <dive class="pra_vari">
        <h1>variable</h1>
        <?php
        $name = "Mahatab Munim";
        $age = 18;
        echo "<h1>" . "1. His Name is" ." ".  $name . "</h1>";
        ?>
      </dive>
    </div><br><br>

    <div class="container">
      <div class="scop">
      <h1>PHP Variables Scope</h1>
        <?php
        // golobal variable
         $name="Mahatab";
         function nameCalling(){
          // local variable 
         // $name="Mahatab";
         //global & local
          global $name;
          echo $name;
         }
         nameCalling();
         //echo $name;
        ?>
      </div>
    </div><br><br><br>
    <div class="container">
      <h1>PHP Data Types</h1>
      <div class="php_dt">
        <?php

        $name="Gazi Md.Mahatab Uddin Munim";
        $number=11;
        $number_flo=11.11;

        echo $name . "<br>";
        var_dump($name) . "<br>";

        echo $number . "<br>";
        var_dump($number);

        echo  $number_flo ."<br>";
        var_dump($number_flo);
        ?>
      </div>
    </div>

    <div class="container">
      <?php
      $num1=5;
      $num2=55;
      $num3=54;
      $num4=58;
      $num5=53;
      $result =$num1 + $num2 + $num3 ;
      echo $result ."<br>";


      ?>
    </div>

    <div class="container">
      <?php
      $num1=5;
      $num2=55;
      if($num1 == $num2){
        echo "true";
      }
      else{
        echo "false"; 
      }
      ?>
    </div>

    <div class="container">
      <?php
      $num1=5;
      $num2=5;
      $num1 += $num2;
      echo $num2 ."<br>";
      ?>
    </div>


     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>



