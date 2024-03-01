<?php
	date_default_timezone_set('America/Sao_Paulo');

	$acesso = date("H");

	if($acesso <= 6  && $acesso <= 12 ){
		echo ("Bom dia!");
	}
	elseif ($acesso > 12 && $acesso <= 18)  {
		echo("Boa tarde!");	
	}else{
		echo("Boa Noite!");
	}
			
