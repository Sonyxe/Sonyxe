//Sukurti funkciją, kuri ima 3 parametrus, ir atspausdina juos h3 HTML tag‘'.
<br>
<br>
<?php
function familyName($fname)
{
    echo "<h3>$fname</h3>";
}

familyName("Ieva");
familyName("Ema");
familyName("Greta");
?>
<br>
//Sukurti funkciją, kuri ima 2 parametrus, juos sudaugina, ir grąžina rezultatą į iškvietimo vietą.
<br>
<?php
function Numbers($a, $b)
{
    return $a * $b;
}

echo Numbers(5, 5);
?>
<br>
// Sukurti masyvus, kuriuose būtų aukščių matavimo duomenys ir juos sujungti.
<br>
<?php
$h1 = [30, 35, 40,];
$h2 = [20, 25, 28];
print_r(array_merge($h1, $h2));
?>
<br>
//» Ištrinti iš masyvo elementą 3 skirtingais būdais
<br>
<?php
$masinos = ["bmw", 'honda'];
unset($masinos[1]);
echo($masinos[0]);
?>
<br>
// Išvesti į ekraną skaičius nuo 1 iki 10
<br>
<?php
for ($x = 1; $x <= 10; $x++) {
    echo " $x <br>";
}
?>
<br>
//Išvesti visų masyvo elementų vidurkį;
<br>
<?php
$num = [2, 4, 6];
$num = array_sum($num) / count($num);
echo $num;
?>
<br>
//Išvesti į ekraną 10 kartų žodį 'Labas'
<br>
<?php
for ($i = 0; $i < 10; $i++) {
    echo 'Labas <br>';
}
?>




