<!-- <?php

$nama = "Rafael";

if ($nama == "Andi") {
	echo "Selamat datang Andi di Politeknik Negeri Jember"; 
} elseif ($nama == "Budi") {
	echo "Selamat datang di poltek jember nak!";
} else{
	echo "Kamu tidak diterima di POLTEK maap !";
}

?> -->



<?php

$nilai = 85;

switch ($nilai) {
	case 90:
		echo "A";
		break;
	case 85:
		echo "A-";
		break;
	case 80:
		echo "B";
		break;

	default:
		echo "Silahkan kembali tahun depan";
		break;
}

?>