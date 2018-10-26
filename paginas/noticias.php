<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Paróquia São Caetano</title>
		<link rel ="stylesheet" type ="text/css" href ="../CSS/estilo1.css">
		<script language=javascript type="text/javascript">
			diaNome = new Array ("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado");
			mesNome = new Array ("janeiro", "fevereiro", "março", "abril", "maio", "junho","julho","agosto","setembro","outubro", "novembro", "dezembro");
			now = new Date;
		</script>
	</head>
	<body>
		<!--Tag <nav></nav> agrupa blocos de links de um mesmo assunto ou links internos do site-->
		<nav>
			<ul class="menu">
				<li><a href="../index.php">A Paróquia</a>
					<ul >
						<li><a href="padroeiro.html">Padroeiro</a></li>
						<li><a href="paroco.html">Pároco</a></li>
						<li><a href="vigario.html">Vigário Paroquial</a></li>
						<li><a href="programacao.html">Programação Paroquial</a></li>
					</ul>
				</li>
				<li><a href="../index.php">Comunidades</a>
					<ul>
						<li><a href="setor/matriz.html">Setor Matriz</a></li>
						<li><a href="setor/santuario.html">Setor Santuário</a></li>
						<li><a href="setor/bomSucesso.html">Setor Bom Sucesso</a></li>
						<li><a href="setor/cachoeira.html">Setor Cachoeira</a></li>
						<li><a href="setor/farias.html">Setor Farias</a></li>
						<li><a href="setor/teodoros.html">Setor Teodoros</a></li>
						<li><a href="setor/luminosa.html">Setor Luminosa</a></li>
						<li><a href="setor/freiorestes.html">Setor Frei Orestes</a></li>
					</ul>
				</li>
				<li><a href="../index.php">Pastorais</a>
					<ul>
						<li><a href="pastorais/catequetica.html">Pastoral Catequética</a></li>
						<li><a href="pastorais/comunicacao.html">Pastoral da Comunicação</a></li>
						<li><a href="pastorais/crianca.html">Pastoral da Criança</a></li>
						<li><a href="pastorais/esperanca.html">Pastoral da Esperança</a></li>
						<li><a href="pastorais/juventude.html">Pastoral da Juventude</a></li>
						<li><a href="pastorais/batismo.html">Pastoral do Batismo</a></li>
						<li><a href="pastorais/carente.html">Pastoral do Carente</a></li>
						<li><a href="pastorais/dizimo.html">Pastoral do Dízimo</a></li>
						<li><a href="pastorais/familiar.html">Pastoral Familiar</a></li>
						<li><a href="pastorais/vocacional.html">Pastoral Vocacional</a></li>
					</ul>
				</li>
				<li><a href="../index.php">Movimentos</a>
					<ul>
						<li><a href="movimentos/apostolado.html">Apostolado da Oração</a></li>
						<li><a href="movimentos/infanciaAdomissionaria.html">Infância e Adolescência Missionária</a></li>
						<li><a href="movimentos/legMaria.html">Legião de Maria</a></li>
						<li><a href="movimentos/ligaMae.html">Liga Apostólica das mães de Schoenstatt</a></li>
						<li><a href="movimentos/ligaFem.html">Liga Apostólica Feminina de Schoenstatt</a></li>
						<li><a href="movimentos/movMaePeregrina.html">Movimento Mãe Peregrina</a></li>
						<li><a href="movimentos/movGuadalupe.html">Movimento Nossa Sra. de Guadalupe</a></li>
						<li><a href="movimentos/rcc.html">RCC</a></li>
						<li><a href="movimentos/tercoHomem.html">Terço dos Homens</a></li>
						<li><a href="movimentos/tercoSantuario.html">Terço do Santuário</a></li>
						<li><a href="movimentos/tercoMulher.html">Terço das Mulheres</a></li>
						<li><a href="movimentos/vicentino.html">Vicentinos</a></li>
					</ul>
				</li>
				<li><a href="../index.php">Ministérios</a>
					<ul>
						<li><a href="ministerios/acolito.html">Acólitos</a></li>
						<li><a href="ministerios/coroinha.html">Coroinhas</a></li>
						<li><a href="ministerios/canto.html">Equipe de Canto</a></li>
						<li><a href="ministerios/celMatrimonio.html">Equipe de celebração matrimonial</a></li>
						<li><a href="ministerios/epal.html">EPAL</a></li>
						<li><a href="ministerios/palavra.html">Ministério da Palavra</a></li>
						<li><a href="ministerios/eucaristia.html">Ministros da Eucaristia</a></li>
						<li><a href="ministerios/salmista.html">Salmistas</a></li>
						<li><a href="ministerios/assessor.html">Assessores</a></li>
					</ul>
				</li>
				<li><a href="noticias.php">Noticias</a></li>
				<li><a href="contato.html">Contato</a></li>
			</ul>
		</nav>
		<div id="div1">
			<img src="../img/caetano.png" id="icone"/>
			<img src="../img/nome.png" id="nome"/>
		</div>
		<nav>
			<ul class="cabecalho">
				<li><a href="linksCabecalho/calendarioMensal.html">Calendário Mensal</a></li>
				<li><a href="linksCabecalho/oracao.html">Orações</a></li>
				<li><a href="linksCabecalho/EvangelhoDia.html">Liturgia diária</a></li>
				<li><a href="linksCabecalho/links.html">links uteis</a></li>
			</ul>
		</nav>
		<nav>
			<h3 id="data">
				<script language=javascript type="text/javascript">
					//mostra a data e dia da semana atual
					document.write (diaNome[now.getDay() ] + ", " + now.getDate () + " de " + mesNome [now.getMonth() ]   +  " de "  +     now.getFullYear ());
				</script>
			</h3>
		</nav>
		<div id="corpo">
			
		</div>
		<div id="rodape">
			<img src="../img/logo.png" id="logo"/>
			<h4 id="txtrodape">Rua Dona Ana Chaves, 199 - Centro - Brazópolis - MG.</h4>
			<h3 id="txtrodape">Fone:(35) 3641-1110 / psaocaetano@yahoo.com.br</h3>
		</div>
	</body>
</html>
