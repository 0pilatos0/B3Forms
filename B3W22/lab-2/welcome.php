<html>
<body>

<h1>De ingevulde gegevens zijn:</h1>
Naam: 
<?php echo $_GET["user_name"]; ?><br>
Emailadres: 
<?php
    echo $_GET["user_mail"]; 
?>
<?php
    $name = $_POST['user_name'];
    $mail = $_POST['user_mail'];
    echo "Naam: $name <br>";
    echo "Mail: $mail";
?>
</body>
</html> 