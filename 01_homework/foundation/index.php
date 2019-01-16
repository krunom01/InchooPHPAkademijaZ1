<?php
$title = "Foundation title for IPA";
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      <?php
        echo $title;
      ?>
    </title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <h5>
            <?php
              $i = 5;
              $j = 4;
              $z = ++$i + $j;
              echo $z . "<br>";
              

              $i = 5;
              $j = 4;
              $j = --$i + $j;
              echo $j . "<br>";

              $k= 25;
              $l = 3;
              $n = $k%$l;
              echo $n . "<br>";

              $brojJedan=22;
              $j=23;

              /*
                Assignment    Same as:
                $a += $b     $a = $a + $b    Addition
                $a -= $b     $a = $a - $b     Subtraction
                $a *= $b     $a = $a * $b     Multiplication
                $a /= $b     $a = $a / $b    Division
                $a %= $b     $a = $a % $b    Modulus
              */
              
              $j = $j+ ++$i; echo  $i . "," . $j, "<br />";

              $i-=$j; echo  $i . "," . $j, "<br />";

              $i*=$j; echo  $i . "," . $j, "<br />";

              $i= 10;
              $j= 2;

              $i%=$j; echo  $i . "," . $j, "<br />";

              $array=[4];
              $array2 = array(4,5,6);
              $array3 = $array + $array2; 
              var_dump($array3);
              
            ?>
          </h5>
        </div>
      </div>

      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class="callout">

          </div>
        </div>
      </div>

    

        <div class="large-4 medium-4 cell">
          <h5>Pages</h5>
          <a href="index.php" class="success button">reload foundation</a><br/>
          <p><a href="../page1/page1.html" class="button">Page 1</a><br/>
          <a href="../bootstrap/index.php" class="success button">bootstrap</a><br/>
          <a href="#" class="alert button">Alert Btn</a><br/>
          <a href="#" class="secondary button">Secondary Btn</a></p>
          <div class="callout">
            <h5>So many components, girl!</h5>
            <p>A whole kitchen sink of goodies comes with Foundation. Check out the docs to see them all, along with details on making them your own.</p>
            <a href="http://foundation.zurb.com/sites/docs/" class="small button">Go to Foundation Docs</a>
          </div>
        </div>
      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
