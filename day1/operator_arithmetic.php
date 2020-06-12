<?php 

	echo "<h2>Operator Arithemetic</h2><br><br>";

	$a = 2; 
	$b = 6;

	echo "<b>Operator penjumlahan </b><br>";
	
	$hasil = $a+$b;
	echo 'Hasil penjumlahan ' .$a.' dan '.$b.' adalah '.$hasil.'<br>';
	echo "Hasil penjumlahan $a dan $b adalah $hasil <br>";


	echo "<br><b>Operator pengurangan </b><br>";
	
	$hasil = $b-$a;
	echo 'Hasil pengurangan dari ' .$b.' dan '.$a.' adalah '.$hasil.'<br>';
	echo "Hasil pengurangan dari $b dan $a adalah $hasil <br>";


	echo "<br><b>Operator pekalian </b><br>";
	
	$hasil = $b*$a;
	echo 'Hasil perkalian dari ' .$b.' dan '.$a.' adalah '.$hasil.'<br>';
	echo "Hasil perkalian dari $b dan $a adalah $hasil <br>";


	echo "<br><b>Operator pembagian </b><br>";
	
	$hasil = $b/$a;
	echo 'Hasil pembagian dari ' .$b.' dan '.$a.' adalah '.$hasil.'<br>';
	echo "Hasil pembagian dari $b dan $a adalah $hasil <br>";

	
	echo "<br><b>Operator Modulus </b><br>";
	
	$hasil = $b%$a;
	echo 'Hasil modulus dari ' .$b.' dan '.$a.' adalah '.$hasil.'<br>';
	echo "Hasil modulus dari $b dan $a adalah $hasil <br>";


	echo "<br><b>Operator Incremen </b><br>";
	
	echo 'Hasil incremen dari $a = ' .$a++.' adalah '.$a.'<br>';

	echo "<br><b>Operator Decrement </b><br>";
	
	echo 'Hasil incremen dari $b = ' .$b--.' adalah '.$b.'<br>';
	
?>