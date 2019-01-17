
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php 
   echo isset($_GET["title"]) ? $_GET["title"] : "index.php" ; 
    ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
tr {
    text-align: right;
}
</style>
</head>

<body style="background-color:
            <?php 
           if(isset($_GET['color']))
            {
                echo $_GET['color'];
            }
            else
            {
                echo 'red';
            }
            ?>">
    <header>
            <h1>Welcome</h1>
    </header>
    <a href="page1/page1.html" target="_blank" class="button">Go to page 1</a>
    <hr>
    <p>change body color: index.php?color=white</p>
    <hr>
    <p>change body color: index.php?title=novinaslov</p>
    <hr>
    <h1>
   <?php echo isset($_GET["h1_01"]) ? $_GET["h1_01"] : "h1 value" ;  ?>
    </h1>
    <hr>
    <h1>
   <?php echo isset($_GET["h1_02"]) ? $_GET["h1_02"] : "h1 value" ;  ?>
    </h1>
    <p>
        <?php
            
            if(isset($_GET["number1"]) || isset($_GET["number2"]) || isset($_GET["number3"])){
                $sum = $_GET["number1"] + $_GET["number2"] +$_GET["number3"];
                echo $_GET["number1"]. "+" . $_GET["number2"] . "+" . $_GET["number3"] . "=" . $sum;
            }
            else{
                echo "use get parameter number1, number2 and number3";
            }
        ?>
    </p>
    <hr>
    <p>unordered list: use get parameter ul1, ul2, ul3 and ul4 <br>
    <ul>
        <?php if(isset($_GET["ul1"]) || isset($_GET["ul2"]) || isset($_GET["ul3"]) || isset($_GET["ul4"])){
            echo
            "<li>" . $_GET["ul1"] . "</li>" .
            "<li>" . $_GET["ul2"] . "</li>" .
            "<li>" . $_GET["ul3"] . "</li>" .
            "<li>" . $_GET["ul4"] . "</li>";
        }
        ?>    
        
    </ul>
    </p>
    <hr>
    <p></p>
    <table style="width:auto">
        <?php 
        $number = $_GET;
        foreach($number as $n){
            echo 
            "<tr>
            <td>" . $n ." </td> .
            </tr>";
        }
        ?>
        <tr>
            <td>----------</td>
        </tr>
        <tr>
            <td><?php echo isset($number) ? array_sum($number) : "" ?></td>
        </tr>
        
    </table>
</body>
</html>