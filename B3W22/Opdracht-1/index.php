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

    <?php
        session_start();
        $huisdier = $persoon = $land = $verveelt = $speelgoed = $docent = $geld = $bezigheid = "";
        $huisdierErr = $persoonErr = $landErr = $verveeltErr = $speelgoedErr = $docentErr = $geldErr = $bezigheidErr = "";
        $teller = 0;


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["huisdier"])) {
                $huisdierErr = "Is required";
            } 
            else {
                $huisdier = test_input($_POST["huisdier"]);
                $teller++;
            }
            if (empty($_POST["persoon"])) {
                $persoonErr = "Is required";
            } 
            else {
                $persoon = test_input($_POST["persoon"]);
                $teller++;
            }
            if (empty($_POST["land"])) {
                $landErr = "Is required";
            } 
            else {
                $land = test_input($_POST["land"]);
                $teller++;
            }
            if (empty($_POST["verveelt"])) {
                $verveeltErr = "Is required";
            } 
            else {
                $verveelt = test_input($_POST["verveelt"]);
                $teller++;
            }
            if (empty($_POST["speelgoed"])) {
                $speelgoedErr = "Is required";
            } 
            else {
                $speelgoed = test_input($_POST["speelgoed"]);
                $teller++;
            }
            if (empty($_POST["speelgoed"])) {
                $speelgoedErr = "Is required";
            } 
            else {
                $speelgoed = test_input($_POST["speelgoed"]);
                $teller++;
            }
            if (empty($_POST["docent"])) {
                $docentErr = "Is required";
            } 
            else {
                $docent = test_input($_POST["docent"]);
                $teller++;
            }
            if (empty($_POST["geld"])) {
                $geldErr = "Is required";
            } 
            else {
                $geld = test_input($_POST["geld"]);
                $teller++;
            }
            if (empty($_POST["bezigheid"])) {
                $bezigheidErr = "Is required";
            } 
            else {
                $bezigheid = test_input($_POST["bezigheid"]);
                $teller++;
            }   
            if ($teller == 9){
                ob_start();
                header('Location: ./indexresultaat.php');
                ob_end_flush();
                $_SESSION['huisdier'] = $huisdier;
                $_SESSION['persoon'] = $persoon;
                $_SESSION['land'] = $land;
                $_SESSION['verveelt'] = $verveelt;
                $_SESSION['speedgoed'] = $speelgoed;
                $_SESSION['docent'] = $docent;
                $_SESSION['geld'] = $geld; 
                $_SESSION['bezigheid'] = $bezigheid;
                die();
            }
            
            $geld = test_input($_POST["geld"]);
            $bezigheid = test_input($_POST["bezigheid"]);
          }
                    
          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }


    ?>
    <div class="titel">
        Mad Libs
    </div>
    <div class="header">
        <a href="./index.php" class="klik">Er heerst paniek...</a>
        <a href="./onkunde.php" class="klik">onkunde</a>
    </div>
    <div id="form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="formpje" >
        <span class="error">* required field</span>
            <div>
                <label for="name">Welk dier zou je nooit als huisdier willen hebben?</label>
                <input type="text" id="name" name="huisdier"/>
                <span class="error">* <?php echo $huisdierErr;?></span>
            </div>
            <div>
                <label for="name">wie is de belangrijkste persoon in je leven?</label>
                <input type="text" id="name" name="persoon"/>
                <span class="error">* <?php echo $persoonErr;?></span>
            </div>            
            <div>
                <label for="name">in welk land zou je graag willen wonen?</label>
                <input type="text" id="name" name="land"/>
                <span class="error">* <?php echo $landErr;?></span>
            </div>            
            <div>
                <label for="name">Wat doe je als je je verveelt?</label>
                <input type="text" id="name" name="verveelt"/>
                <span class="error">* <?php echo $verveeltErr;?></span>
            </div>            
            <div>
                <label for="name">Met welk speelgoed speelde je als kind het meest?</label>
                <input type="text" id="name" name="speelgoed"/>
                <span class="error">* <?php echo $speelgoedErr;?></span>
            </div>            
            <div>
                <label for="name">Bij welke docent spijbel je het liefst</label>
                <input type="text" id="name" name="docent"/>
                <span class="error">* <?php echo $docentErr;?></span>
            </div>            
            <div>
                <label for="name">als je € 100.000,- had, wat zou je dan kopen?</label>
                <input type="text" id="name" name="geld"/>
                <span class="error">* <?php echo $geldErr;?></span>
            </div>            
            <div>
                <label for="name">Wat is je favoriete bezigheid?</label>
                <input type="text" id="name" name="bezigheid"/>
                <span class="error">* <?php echo $bezigheidErr;?></span>
            </div>            
            <div class="button">
                <input type="submit" name="submit" value="Versturen">  
            </div>
        </form>  
        
    </div>
    <div class="footer">Deze website is gemaakt door Paul van der Lei</div>
</body>
</html>