<?php
$server = new mysqli("localhost", "root", "", "sklep");
$rows = mysqli_query($server,"SELECT * FROM podzespoly");
mysqli_close($server);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nasz sklep komputerowy</title>
    <link rel="stylesheet" href = "styl8.css">
</head>
<body>
<header>
    <div id="menu">
    <a href = "index.php">Główna</a>
    <a href = "procesory.html">Procesory</a>
    <a href = "ram.html">Ram</a>
    <a href = "grafika.html">Grafika</a>
    </div>

<div id="logo">
    <h2>Podzespoły komputerowe</h2>
</div>
</header>

<div id="glowny">
    <h1>Dzisiejszcze promocje</h1>
    <table>
        <tr>
            <th>NUMER</th>  
            <th>NAZWA PODZESPOŁU</th>
            <th>OPIS</th>
            <th>CENA</th>
        </tr>
    <?php
        while($row = mysqli_fetch_assoc($rows)){
            echo "<tr>
                <td>$row[id]</td>
                <td>$row[nazwa]</td>
                <td>$row[opis]</td>
                <td id = 'cena'>$row[cena]</td>
                </tr>";
        }
        ?>
    </table>
</div>


<footer>
    <div id="blok1">
        <img src = "scalak.jpg" alt = "obraz">
    </div>
    
    <div id="blok2">
        <h4>Nasz Sklep Komputerowy</h4>
        <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/">edata</a></p>
    </div>
    
    <div id="blok3">
        <p>zadzwoń: 601 602 603</p>
    </div>
    
    <div id="blok4">
    Stronę wykonał: 12345678901
    </div>
</footer>

</body>
</html>