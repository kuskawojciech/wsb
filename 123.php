<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Lista</h4>
    <ul>
        <li>Poznań</li>
        <li>Gniezno</li>
        <li>Jarocin</li>
</ul>

<?php
    $city ="Września";
echo <<< LIST
<ul> 
<li>Poznań</li>
<li>Gniezno</li>
<li>Jarocin</li>
<li>$city</li>
</ul>
LIST;

?>
<h3>Zawartość skryptu:</h3>
<?php
//include, include_once, require, require_once
@include "./scripts/scrip1t.php";
include_once "./scripts/script.php";

require "./scripts/script.php";

echo "Zawartość po skrypcie";


?>
</body>
</html>