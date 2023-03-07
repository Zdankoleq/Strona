<?php
	$firstName = "Janusz";
	$lastName = "Nowak";
	echo "Imie i nazwisko: $firstName $lastName<br>";
	echo 'Imie i nazwisko: $firstName $lastName<br>';
	
	//heredoc
	echo <<< DATA
	Imie: $firstName<br>
	Nazwisko: $lastName<br>
	<hr>
	DATA;
	
	$data = <<< DATA
	Imie: $firstName<br>
	Nazwisko: $lastName<br>
	<hr>
	DATA;
	
	//newdoc
	
	echo <<< 'DATA'
	Imie: $firstName<br>
	Nazwisko: $lastName<br>
	<hr>
	DATA;