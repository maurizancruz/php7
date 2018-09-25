<?php 
	// funções anonimas

	function test($callback){
		// processo lento

		$callback();

	}

	test(function(){

		echo "Terminou";

	});
 ?>