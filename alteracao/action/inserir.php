<?php
$imagem = $_FILES["imagem"];
$host = "localhost";
$username = "root";
$password = "";
$db = "paroquiasaocaetano";

if($imagem != NULL) 
{ 
	$nomeFinal = time().'.jpg';
	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) 
	{
		$tamanhoImg = filesize($nomeFinal); 

		$imagemNot= addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 

		mysql_connect($host,$username,$password) or die("Impossível Conectar"); 

		@mysql_select_db($db) or die("Impossível Conectar"); 

		
		unlink($nomeFinal);
	}
} 
else { 
	echo"Você não realizou o upload de forma satisfatória."; 
} 
//Vamos definir as variáveis de data e hora
//para inserção no banco de dados

//Agora com as variáveis de data e hora criadas
//vamos criar uma variável especial para a querie sql

$sql = "INSERT INTO noticia(tituloNoticia,descNoticia,dataNoticia,fotoNoticia)VALUES('$titulo','$noticia',$data,'$imagemNot')";
//Inserindo os dados

$sql = mysql_query($sql) 
or die ("Houve erro na gravação dos dados, por favor, clique em 
voltar e verifique os campos obrigatórios!");

echo "<h1>Cadastro efetuado com sucesso!</h1>";

?>