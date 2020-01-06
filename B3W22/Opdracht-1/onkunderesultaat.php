<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Lakki+Reddy&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="titel">
        Mad Libs
    </div>
    <div class="header">
        <a href="./index.php" class="klik">Er heerst paniek...</a>
        <a href="./onkunde.php" class="klik">onkunde</a>
    </div>
    <div id="form2">
        <?php
        session_start();
            $huisdier = $_SESSION['huisdier'];
            $persoon = $_SESSION['persoon'];
            $land = $_SESSION['land'];
            $verveelt = $_SESSION['verveelt'];
            $speelgoed = $_SESSION['speedgoed'];
            $docent = $_SESSION['docent'];
            $geld = $_SESSION['geld']; 
            echo "Er zijn veel mensen die niet kunnen " . $huisdier . ". Neem nou " . $persoon . ". Zelfs met de hulp van een " . $verveelt . " en zelfs " . $land . " kan " . $persoon . " niet " . $huisdier . ". Dat heeft niet te maken met een gebrek aan " . $verveelt . ", maar met een te veel aan " . $docent . ". Te veel " . $docent . " leidt tot een " . $geld . " en dat is niet goed als je wilt " . $huisdier . ". Helaas voor " . $persoon . "."
        ?>
        
    </div>
    <div class="footer">Deze website is gemaakt door Paul van der Lei</div>
</body>
</html>