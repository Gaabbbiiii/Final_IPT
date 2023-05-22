<?php 
session_start();

$xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");

$xml = simplexml_load_string(str_replace('&#13;', '', file_get_contents('data.xml')));
?>

<!DOCTYPE HTML>
<html>
    <head>
        <link rel="icon" href="../css/image/icon.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boac</title>
        <link rel="stylesheet" href="../css/cathedral.css">
    </head>
    <body>
        <div class="front"></div>
        <div class="line"></div>
        <div class="container">
            <div class="navbar">
            <a href="../index.php"><img src="../css/image/logo3.2.png" class="logo"></a>
                <nav>
                    <ul>
                        <li class="contact"><a href="">Contact Us</a></li>
                    </ul>
                </nav>
                <img src="../css/image/menu2.png" class="menu-icon">
            </div>
        </div>
        <?php foreach($xml->boac as $boac) { ?>
        <div class="row">
            <div class="col">
                <h1 class="l0"><?php echo $boac->boaccathedral->title;?></h1>
                <h1 class="l1"><?php echo $boac->boaccathedral->description->l1;?></h1>
                <h1 class="l2"><?php echo $boac->boaccathedral->description->l2;?></h1>
                <h1 class="l3"><?php echo $boac->boaccathedral->description->l3;?></h1>
                <h1 class="l3-1"><?php echo $boac->boaccathedral->description->l4;?></h1>
                <h1 class="l3-2"><?php echo $boac->boaccathedral->description->l5;?></h1>
                <h1 class="l3-3"><?php echo $boac->boaccathedral->description->l6;?></h1>
                <h1 class="l4"><?php echo $boac->boaccathedral->things;?></h1>
                <h1 class="do">Things to Do:</h1>
            </div>
            <div class="col">
                <div class="card card1"></div>
                <div class="card card2"></div>
                <div class="card card3"></div>
                <div class="card card4"></div>
                <div class="card card5"></div>
                <div class="card card6"></div>
                <div class="card card3-1"></div>
                <div class="card card3-2"></div>
                <div class="card card3-3"></div>
            </div>
        </div>
        <?php } ?>
    </body>  
</html>

