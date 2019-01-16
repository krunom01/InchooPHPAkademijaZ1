<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>960 Grid System &mdash; 960 page</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/text.css" />
<link rel="stylesheet" href="css/960.css" />
<link rel="stylesheet" href="css/demo.css" />
</head>
<body>
<h1>
  <a href="http://google.com">Google page</a>
</h1>
<div class="container_12">
        <ul>
            <li><a href="demo.php">reload page</a></li>
            <li><a href="../bootstrap/index.php">bootstrap</a></li>
            <li><a href="../foundation/index.php">foundation</a></li>
            <li><a href="../page1/page1.html">page 1</a></li>
            <li><a href="../skeleton/index.php">skeleton</a></li>
        </ul>
    </div><!-- end of navigation -->
<div class="container_12">
  <h2>
   <?php
      $n1 = 100;
      $n2 = 200;

      if ($n1 && $n2 == 100){
        echo "true";
      }
      else{
        echo "false";
      }

    ?>
  </h2>
  <div class="grid_12">
    <p>
    <?php
      if ($n1 or $n2 == 100){
        echo "true";
      }
      else{
        echo "false";
      }
    ?>  
    </p>
  </div>
  <!-- end .grid_12 -->
  <div class="clear"></div>
  <div class="grid_1">
    <p>
    <?php
      if ($n1 != 100){
        echo "true";
      }
      else{
        echo "false";
      }
    ?>  
    </p>
  </div>
  <!-- end .grid_1 -->
  <div class="grid_11">
    <p>
      860
    </p>
  </div>
  <!-- end .grid_11 -->
  <div class="clear"></div>
  <div class="grid_2">
    <p>
      140
    </p>
  </div>
  <!-- end .grid_2 -->
  <div class="grid_10">
    <p>
      780
    </p>
  </div>
  <!-- end .grid_10 -->
  <div class="clear"></div>
  <div class="grid_3">
    <p>
      220
    </p>
  </div>
  <!-- end .grid_3 -->
  <div class="grid_9">
    <p>
      700
    </p>
  </div>
  <!-- end .grid_9 -->
  <div class="clear"></div>
  <div class="grid_4">
    <p>
      300
    </p>
  </div>
  <!-- end .grid_4 -->
  <div class="grid_8">
    <p>
      620
    </p>
  </div>
  <!-- end .grid_8 -->
  <div class="clear"></div>
  <div class="grid_5">
    <p>
      380
    </p>
  </div>
  <!-- end .grid_5 -->
  <div class="grid_7">
    <p>
      540
    </p>
  </div>
  <!-- end .grid_7 -->
  <div class="clear"></div>
  <div class="grid_6">
    <p>
      460
    </p>
  </div>
  <!-- end .grid_6 -->
  <div class="grid_6">
    <p>
      460
    </p>
  </div>
  <!-- end .grid_6 -->
  <div class="clear"></div>
  <div class="grid_1 suffix_11">
    <p>
      60
    </p>
  </div>
  <!-- end .grid_1.suffix_11 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_1 suffix_10">
    <p>
      60
    </p>
  </div>
  <!-- end .grid_1.prefix_1.suffix_10 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_2 suffix_9">
    <p>
      60
    </p>
  </div>
  <!-- end .grid_1.prefix_2.suffix_9 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_3 suffix_8">
    <p>
      60
    </p>
  </div>
  <!-- end .grid_1.prefix_3.suffix_8 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_4 suffix_7">
    <p>
      60
    </p>
  </div>
  <!-- end .grid_1.prefix_4.suffix_7 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_5 suffix_6">
    <p>
      60
    </p>
  </div>
  <!-- end .grid_1.prefix_5.suffix_6 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_6 suffix_5">
    <p>
      60
    </p>
  </div>
  <!-- end .grid_1.prefix_6.suffix_5 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_7 suffix_4">
    <p>
      60
    </p>
  </div>
  <!-- end .grid_1.prefix_7.suffix_4 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_8 suffix_3">
    <p>
      60
    </p>
  </div>
  
  <div class="clear"></div>
  <div class="grid_1 prefix_2 suffix_13">
    <p>
      40
    </p>
  </div>
  <!-- end .grid_1.prefix_2.suffix_13 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_3 suffix_12">
    <p>
      40
    </p>
  </div>
  <!-- end .grid_1.prefix_3.suffix_12 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_4 suffix_11">
    <p>
      40
    </p>
  </div>
  <!-- end .grid_1.prefix_4.suffix_11 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_5 suffix_10">
    <p>
      40
    </p>
  </div>
  <!-- end .grid_1.prefix_5.suffix_10 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_6 suffix_9">
    <p>
      40
    </p>
  </div>
  <!-- end .grid_1.prefix_6.suffix_9 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_7 suffix_8">
    <p>
      40
    </p>
  </div>
  <!-- end .grid_1.prefix_7.suffix_8 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_8 suffix_7">
    <p>
      40
    </p>
  </div>
  <!-- end .grid_1.prefix_8.suffix_7 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_9 suffix_6">
    <p>
      40
    </p>
  </div>
  <!-- end .grid_1.prefix_9.suffix_6 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_10 suffix_5">
    <p>
      40
    </p>
  </div>
  <!-- end .grid_1.prefix_10.suffix_5 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_11 suffix_4">
    <p>
      40
    </p>
  </div>
  <!-- end .grid_1.prefix_11.suffix_4 -->
  <div class="clear"></div>
  <div class="grid_1 prefix_12 suffix_3">
    <p>
      40
    </p>
  </div>
  <!-- end .grid_1.prefix_12.suffix_3 -->

</div>
<!-- end .container_16 -->
</body>
</html>