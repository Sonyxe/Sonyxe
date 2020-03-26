
//Sukurkite num kintamąjį ir priskirkite jam reikšmę 3.
Parodykite šio kintamojo reikšmę ekrane, naudodami alert metodą.
<br>
<?php
$num=3;
echo($num);
?>
<br>
//Sukurkite kintamuosius a = 10 ir b = 2. Ekrane parodykite jų sumą, skirtumą, daugybos ir padalijimo rezultatus
<br>
<?php
$a=10;
$b=2;
echo $a+$b;
echo$a-$b;
echo$a*$b;
echo$a/$b;
?>
<br>
//Sukurkite kintamąjį str ir priskirkite jam „Hello World!” reikšmę. Parodykite šio kintamojo reikšmę ekrane.
<br>
<?php
$c='Hello World';
echo $c;
?>
<br>
//Sukurkite kintamuosius str1 = ‘Hello’ ir str2 = ‘World!’.
Naudodami šiuos kintamuosius parodykite frazę „Hello World!“.
<br>
<?php
$str1='Hello';
$str2='World!';
echo $str1.$str2;
?>
<br>
//Sukurkite kintamąjį name ir priskirkite jam savo vardą. Parodykite frazę „Hello, %name%!“.
<br>
<?php
$name='Sonata';
echo 'Hello,'.$name;
?>
<br>
//Sukurkite kintamąjį age ir priskirkite jam savo amžių. Parodykite ‘I’m %age% old!’
<br>
<?php
$age=18;
echo 'im'.' '. $age.' old';
?>
<br>
//Sukurkite masyvą a, b, c. Parodykite masyvą
<br>
<?php
$letters=array(
        'a',
        'b',
        'c',
);
echo var_dump($letters);
?>
<br>
//sudekite tris skaicius 
<br>
<?php
$sum=1+2+3;
echo $sum;
?>
<br>
//liekana
<br>
<?php
$sk=4;
$liekana=fmod($sum, $sk);
print $liekana;
?>




