<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>skeleton</title>


  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
  <!-- Standard buttons -->
<a class="button" href="index.php">reload skeleton page</a>
<a class="button" href="../bootstrap/index.php">bootstrap</a>
<a class="button" href="../foundation/index.php">foundation</a>
<a class="button" href="../page1/page1.html">ugly html</a>
<a class="button" href="index.php">reload skeleton page</a>




  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 25%">
        <h4>Skeleton page</h4>
        <p>
          <?php
            $name = "kruno";

            if($name != "kruno")
            {
              echo "invalid name!";
            }
            else
            {
              echo "ok! <br>";
            }

            function firstFunction(){
              echo "function";
              return false;
            }
            firstFunction();
          ?>
        </p>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
