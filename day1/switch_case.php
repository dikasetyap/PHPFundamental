<?php
$nilai = 90;
echo 'Nilai anda '.$nilai;
switch (true)
{
	case ($nilai >= 90) :
		echo '<br>Nilai anda A';
		break;
	case ($nilai < 90 && $nilai >= 80) :
		echo '<br>Nilai anda B';
		break;
	case ($nilai < 79 && $nilai >= 70) :
		echo '<br>Nilai anda C';
		break;
	default : 
		echo '<br>Nilai anda D';
}
?>