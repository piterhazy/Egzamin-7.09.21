<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header>
    <h1>Portal dla wędkarzy</h1>
    <div id="lewy">
        <h2>Ryby drapieżne naszych wód</h2>
       
        <ul>
        
        <?php
         $lacze=mysqli_connect("localhost", "root", "", "wedkowanie");
         $pytanie="SELECT nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1" ;
         $wynik=mysqli_query ($lacze, $pytanie) ;
         while($wiersz=mysqli_fetch_row($wynik)) {
        echo "<li>".$wiersz[0].", występowanie: ".$wiersz[1]."</li>";
         }
        mysqli_close($lacze);
        ?>
        </ul>
    </div>
    <div id="prawy">    
        <img src="ryba1.jpg" alt="sum">
        <br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>

    </div>
    <footer>
    <p>Strone wykonal: hazy</p>
    </footer>

     
</body>
</html>