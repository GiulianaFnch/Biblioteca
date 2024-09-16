 <?php
	//validação das variaveis de sessão
	if((!isset ($_SESSION['id']) == true) and (!isset ($_SESSION['nick']) == true))
	{
		echo "<h2>Erro no acesso!</h2>";
		echo "<h3>Favor realizar login!</h3>"; // como estou a usar bootstrap e separei as partes, não consegui implementar
        echo "<input type='button' value='Login' onclick=window.open('index.html','_self')> ";
		
	}
 ?>
