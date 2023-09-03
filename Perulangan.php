<!-- <?php

for ($i=0; $i <10 ; $i++) { 
    echo "Perulangan ke $i <br>";
}

?> -->

<!-- <?php

for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 10; $j++) { 
        echo "Perulangan ke $i $j <br>";
    }
}
?> -->

<!-- <?php
echo "WHILE <br>";
$a = 0;
while ($a <= 10) {
    echo "The number is : $a <br>";
    $a++;
}

?> -->

<!-- <?php
echo "<br> DO WHILE <br>";
$a = 0;
do {
    echo "The number is : $a <br>";
    $a++;
} while ($a <= 10);

?> -->

<!-- <?php
// Perulangan Foreach dengan FOR
echo "Foreach dengan FOR <br>";
$nama = array("Pak Hendra", "Pak Taufiq", "Bu Maya");
for ($i=0; $i < 4; $i++) { 
    echo "$nama[$i] <br>";
} echo "<br>";

?> -->

<?php
// Perulangan Foreach
echo "Foreach <br><br>";
$nama = array("Pak Hendra", "Pak Taufiq", "Bu Maya");
foreach ($nama as $val) {
    echo "$val <br>";
}

?>

<?php
// Perulangan Foreach
echo "<br> <br> Foreach with Key <br><br>";
$nama = array(
    1 => "Pak Hendra", 
    2 => "Bu Maya",
    3 => "Pak Taufiq", 
);
foreach ($nama as $key => $val) {
    echo "Urutan ke $key berisi data $val <br>";
}

?>
