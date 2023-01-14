<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
            background-image: url(f6.jpg);
        }
        .box1 {
            padding: 20px;
  
            width: 700px;
           
            background-color: rgba(0,0 , 0, 50%);
            position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
     


            text-align: center;
            margin: auto;
            font-family: monospace;
            font-size: 30px;
            color: yellow;
            border-radius: 10px;
            text-shadow: 0px 1px black;
            border-style: solid;
            border-color: black;
    
            
        }


h1 {
    font-size:35px;
    color:white;
}
p {
    color:white;
}




</style>
</head>
<body>
<div class="box1">
    <h1>Podane Informacje</h1>
<?php

echo "Imię: ".$_POST["imie"]."<br>";
echo "<br>Nazwisko: ".$_POST["nazwisko"]."<br>";
echo "<br>E-mail: ".$_POST["mail"]."<br>";
echo "<br>Nr tel: ".$_POST["phone"]."<br>";
echo "<br>Data ur: ".$_POST["d1"]."<br>";
echo "<br>Lotnisko: ".$_POST["cars"]."<br>";


if (!empty($_POST["check1"])) {
    echo "<br>Wybrana linia Lotnicza: WizzAir<br>";
} else {
    echo "";
}
if (!empty($_POST["check2"])) {
    echo "<br>Wybrana linia Lotnicza: RyanAir<br>";
} else {
    echo "";
}
if (!empty($_POST["check3"])) {
    echo "<br>Wybrana linia Lotnicza: AdamAir<br>";

} else {
    echo "";
}

///przerwa///
if (!empty($_POST["r1"])) {
    echo "<br>Klasa: 1<br>";
} else {
    echo "";
}
if (!empty($_POST["r2"])) {
    echo "<br>Klasa: 2<br>";
} else {
    echo "";
}
if (!empty($_POST["r3"])) {
    echo "<br>Klasa: 3<br>";
 
} else {
    echo "";
}












?>
</div>
</body>
</html>