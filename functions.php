<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Függvények</title>
    </head>
    <body>
        <?php
            // Függvény létrehozása
            echo "<strong>FÜGGVÉNY létrehozása</strong><br>";
            function fuggveny() { // a függvény definiálása
                echo "Hello World!";
            }
            fuggveny(); // a függvény meghívása
 
            echo "<hr>";
 
            echo "Egy hosszabb hibaüzenet kiírása függvénnyel:<br>";
            function hiba() {
                echo "Figyelem! A program futása során hiba lépett fel. Kérem forduljon a rendszergazdához!<br>";
            }
            hiba();
            hiba();
            hiba();
            hiba();
 
            echo "<hr>";
 
            echo "Egy üzenet kiírása függvénnyel:<br>";
            function hiba2($uzenet) {
                echo "<p style='color: red; padding: 20px; background-color: yellow; font-weight: bold;'>";
                echo($uzenet);
                echo "</p>";
            }
 
            hiba2('Ez egy hibaüzenet...');
        ?>
    </body>
</html>