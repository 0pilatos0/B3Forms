<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Lakki+Reddy&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: rgb(68, 66, 66);">

    <?php
        session_start();
        $huisdier = $persoon = $land = $verveelt = $speelgoed = $docent = $geld  = "";
        $huisdierErr = $persoonErr = $landErr = $verveeltErr = $speelgoedErr = $docentErr = $geldErr = "";
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
            if ($teller == 8){
                ob_start();
                header('Location: ./onkunderesultaat.php');
                ob_end_flush();
                $_SESSION['huisdier'] = $huisdier;
                $_SESSION['persoon'] = $persoon;
                $_SESSION['land'] = $land;
                $_SESSION['verveelt'] = $verveelt;
                $_SESSION['speedgoed'] = $speelgoed;
                $_SESSION['docent'] = $docent;
                $_SESSION['geld'] = $geld; 
                die();
            }
            
            $geld = test_input($_POST["geld"]);
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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-inline" >
        <span class="error">* required field</span>
            <div class="form-group">
                <label for="name">Wat zou je graag willen kunnen?</label>
                <input type="text" id="name" name="huisdier" class="form-control"/>
                <span class="error">* <?php echo $huisdierErr;?></span>
            </div>
            <div class="form-group">
                <label for="name">Met welke persoon kun je goed opschieten?</label>
                <input type="text" id="name" name="persoon" class="form-control"/>
                <span class="error">* <?php echo $persoonErr;?></span>
            </div>            
            <div class="form-group">
                <label for="name">Wat is je favoriete getal?</label>
                <input type="text" id="name" name="land" class="form-control"/>
                <span class="error">* <?php echo $landErr;?></span>
            </div>            
            <div class="form-group">
                <label for="name">Wat heb je atijd bij je als je op vakantie gaat?</label>
                <input type="text" id="name" name="verveelt" class="form-control"/>
                <span class="error">* <?php echo $verveeltErr;?></span>
            </div>            
            <div class="form-group">
                <label for="name">Wat is je beste persoonlijke eigenschap?</label>
                <input type="text" id="name" name="speelgoed" class="form-control"/>
                <span class="error">* <?php echo $speelgoedErr;?></span>
            </div>            
            <div class="form-group">
                <label for="name">Wat is je slechtste persoonlijke eigenschap?</label>
                <input type="text" id="name" name="docent" class="form-control"/>
                <span class="error">* <?php echo $docentErr;?></span>
            </div>            
            <div class="form-group">
                <label for="name">Wat is het ergeste dat je kan overkomen?</label>
                <input type="text" id="name" name="geld" class="form-control"/>
                <span class="error">* <?php echo $geldErr;?></span>
            </div>                       
            <div class="button">
                <input type="submit" name="submit" value="Versturen" class="btn btn-default">  
            </div>
        </form>  
        
    </div>
    <div class="footer">Deze website is gemaakt door Paul van der Lei</div>
</body>
</html>