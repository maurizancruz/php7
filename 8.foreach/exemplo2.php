 <!--
Se o action não for declarado, o $GET é ativado para o padrão.
O Foreach é muito usado para obter informações de ARRAYS OU COLEÇÕES, que é o caso dos $_GET, $_POST e outras.
  -->

<form> 
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">
</form>
<?php 
	if(isset($_GET)) { // é uma boa prática para evitar erros. No caso, só irá executar o foreach se for passado algum valor pelo GET.
		foreach ($_GET as $key => $value) {
			echo "Campo: " . $key . "<br>";
			echo "Valor: " . $value;
			echo "<hr>";
		}
	}
 ?>