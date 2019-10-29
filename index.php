
<?php
//require 'Classes/Room.php';
//require 'Classes/Oktagon.php';
//require 'Classes/Square.php';
require 'vendor/autoload.php';

use Annacover\Megahamster\AbstractClasses as AbstractClasses;

$products_array_abstract =[
    $room = new AbstractClasses\SquareFromAbstract('The Room', 49.00, 'none', 80,50,50),
    $flat = new AbstractClasses\SquareFromAbstract('The Flat', 149.00, 'Food jars', 120,80,80),
    $pit  = new AbstractClasses\OktagonFromAbstract('The Pit', 69.00, ' Handschuhe und  Boxsack', 20)];

if (isset($_GET['format']) && $_GET['format'] === 'json'){
    header('Content-Type: application/json');
    echo json_encode($products_array_abstract); //Array verwenden nicht einzelne Objekte
    }else{

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Megahamster</title>
    <style type="text/css">
        html{
            background-color: aquamarine;
            color: darkslategray;
        }
    </style>
</head>
<body>
<header id="welcome">
</header>
<section id="list-products">

    <?php
    foreach ($products_array_abstract as $product){
        echo $product->toHTML();
    }
    ?>


</section>
</body>
</html>
<?php
}

