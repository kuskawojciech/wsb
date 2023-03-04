<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $firstname= "Tomasz";
    $lastname = "Nowak";
echo "Imię i nazwisko:  $firstname $lastname"; 

//heredoc
    echo <<< DATA
        <hr>
        Imię: $firstname<br>
        Nazwisko: $lastname<br>
    DATA;

 
//nowdoc
    echo <<< 'DATA'
    <hr>
    Imię: $firstname<br>
    Nazwisko: $lastname<br>

DATA;
$bin = 0b1010;
echo $bin; //10
$oct = 0o10;
echo $oct; //8
$hex = 0x1A;
echo $hex; //26


?>
    
</body>
</html>