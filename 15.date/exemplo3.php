<?php 
	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
	// o LC_ALL muda toda configuração de localização para português. 
	// No caso, o "pt_BR" é o padrão.
	// "pt_BR.utf-8" é padrão para UTF-*
	// Já "portuquese" é padrão LINUX

	echo ucfirst(strftime("%A, %e de %B de %G"));
	// O ucfist tranformar a primeira letra da string em maiscula.
 ?>