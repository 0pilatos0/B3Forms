<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
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
            $bezigheid = $_SESSION['bezigheid'];
            echo "<br>Er heest paniek...<br><br>";
            echo "Er heest paniek in het koningkrijk " . $land . ", koning " . $docent . " is ten einde raad en als koning " . $docent . " ten einde raad is, dan roept hij zijn ten-einde-raadsheer " . $land . ".<br><br>";
            echo '' . $land . '! Het is een ramp! Het is een schande!"<br><br>';
            echo '"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"<br><br>';
            echo '"Mijn ' . $huisdier . ' is verdwenen! Zo maar, zonder waarschuwing. En ik had net ' . $speelgoed . ' voor hem gekocht"<br><br>';
            echo '"Majesteit, uw ' . $huisdier . ' komt vast vazelf weer terug?"<br><br>';
            echo '"Ja, das leuk en aardig, maar hoe moet ik in de ' . $bezigheid . ' leren?"<br><br>';
            echo '"Maar Sire, daar kunt u toch uw ' . $geld . ' voor gebruiken."';
            echo '"' . $land . ', he hebt helemaal gelijk! Wat zou ik doen alsik jou niet had."<br><br>';
            echo '"' . $verveelt . ', Sire"<br><br>'
        ?>
        
    </div>
    <div class="footer">Deze website is gemaakt door Paul van der Lei</div>
</body>
</html>