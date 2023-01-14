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
            
            width: 500px;
            background-color: rgba(0,0 , 0, 50%);
            position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        line-height: 30px;

            text-align: center;
            margin: auto;
            font-family: monospace;
            font-size: 24px;
            color: white;
            border-radius: 10px;
            text-shadow: 0px 1px black;
            border-style: solid;
            border-color: black;
            
        }
#imie {
    border: 0px;
            background-color: rgba(0, 1, 1, 90%);
            border-radius: 10px;
            color: yellow;
            text-align: center;
            height: 20px;
            width: 200px;
}
#n1 {
    border: 0px;
            background-color: rgba(0, 1, 1, 90%);
            border-radius: 10px;
            color: yellow;
            text-align: center; 
            height: 20px;
            width: 200px;
}
#mail {
    border: 0px;
            background-color: rgba(0, 1, 1, 90%);
            border-radius: 10px;
            color: yellow;
            text-align: center;
            height: 20px;
            width: 200px;
}
#data {
    border: 0px;
            background-color: rgba(0, 1, 1, 90%);
            border-radius: 10px;
            color: yellow;
            text-align: center;
            height: 20px;
            width: 200px;
}
#tel {
    border: 0px;
            background-color: rgba(0, 1, 1, 90%);
            border-radius: 10px;
            color: yellow;
            text-align: center;
            height: 20px;
            width: 200px; 
}
#cars {
    background-color: rgba(0, 1, 1, 90%);
            border: 10px;
            border-radius: 10px;
            color: yellow;
            padding:10px
           
}
input[type="checkbox"] {
-webkit-appearance:none;
height:1.5em;
width:1.5em;
cursor:pointer;
position:relative;
-webkit-transition: .10s;
border-radius:4em;
background-color:yellow;
}
input[type="checkbox"]:checked {
background-color:black;
}
input[type="checkbox"]:before, input[type="checkbox"]:checked:before {
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
line-height:1.5em;
text-align:center;
color:yellow;
}
input[type="checkbox"]:checked:before {
content: '✔';
}
input[type = submit], input[type = reset] {
    background-color: rgba(0,0 , 0, 0%);
            border: none;
            text-decoration: none;
            color: yellow;
            font-size:22px;
            margin: 20px 20px;
            cursor: pointer;
         }

</style>
</head>
<body>
<div class="box1">
<h1>Informacje</h1>    

<form action="odbierz.php" method="post">

<div class="box2">
<label for="imie">Imie<br></label>
<input type="text" id="imie" name="imie" size=30  placeholder="Tutaj Wpisz Imie">
    </div>
<label for="nazwisko">Nazwisko<br></label>
<input type="text" id="n1" name="nazwisko" size=30 placeholder="Tutaj Wpisz Nazwisko">

<br><label for="mail">Mail<br></label>
<input type="E-mail" id="mail" name="mail" size=30 placeholder="Tutaj Wpisz Emaila">

<br><label for="d1">Data Ur<br></label>
<input type="date" name="d1" id="data" size=30>

<br><label for="phone">Telefon<br></label>
<input type="tel" name="phone" id="tel" size=9 placeholder="Podaj Numer Telefonu" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}">
<br><label for="checkbox">Wybierz Linie</label>
<br><input type="checkbox" id="linie" name="check1" value="c++"><label>WizzAir</label><br>
<input type="checkbox" id="linie" name="check2" value="Java"><label>RyanAir</label><br>
<input type="checkbox" id="linie" name="check3" value="Python"><label>AdamAir</label><br>

<br><label for="cars">Wybierz lotnisko</label><br>
<select name="cars" id="cars">
<option value="empty"></option>
    <option value="JFK">JFK</option>
    <option value="New Jersey">New Jersey</option>
    <option value="Kraków">Kraków</option>
    <option value="Warszawa">Warszawa</option>
</select><br>

<br><label for="pepperoni">Wybierz klasę:</label><br>
<input type="radio" id="p1" name='r1' value="Pepperoni" ><label for="p1">1 Klasa</label><br>
<input type="radio" id="p2" name='r2' value="Pepperoni" ><label for="p2">2 Klasa</label><br>
<input type="radio" id="p3" name='r3' value="Pepperoni" ><label for="p3">3 Klasa</label><br>




<br><input type="reset">
<input type="submit" value="Prześlij">
    </div>
</body>
</html>