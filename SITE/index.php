<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Paróquia São Caetano</title>
		<link rel ="stylesheet" type ="text/css" href ="CSS/estilo1.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script language="javascript" type="text/javascript">
			diaNome = new Array ("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado");
			mesNome = new Array ("janeiro", "fevereiro", "março", "abril", "maio", "junho","julho","agosto","setembro","outubro", "novembro", "dezembro");
			now = new Date;
		</script>
	<head>	
		<nav>
			<ul class="menu">
				<li><a href="index.php">A Paróquia</a>
					<ul >
						<li><a href="paginas/padroeiro.html">Padroeiro</a></li>
						<li><a href="paginas/paroco.html">Pároco</a></li>
						<li><a href="paginas/vigario.html">Vigário Paroquial</a></li>
						<li><a href="paginas/programacao.html">Programação Paroquial</a></li>
					</ul>
				</li>
				<li><a href="index.php">Comunidades</a>
					<ul>
						<li><a href="paginas/setor/matriz.html">Setor Matriz</a></li>
						<li><a href="paginas/setor/santuario.html">Setor Santuário</a></li>
						<li><a href="paginas/setor/bomSucesso.html">Setor Bom Sucesso</a></li>
						<li><a href="paginas/setor/cachoeira.html">Setor Cachoeira</a></li>
						<li><a href="paginas/setor/farias.html">Setor Farias</a></li>
						<li><a href="paginas/setor/teodoros.html">Setor Teodoros</a></li>
						<li><a href="paginas/setor/luminosa.html">Setor Luminosa</a></li>
						<li><a href="paginas/setor/freiorestes.html">Setor Frei Orestes</a></li>
					</ul>
				</li>
				<li><a href="index.php">Pastorais</a>
					<ul>
						<li><a href="paginas/pastorais/catequetica.html">Pastoral Catequética</a></li>
						<li><a href="paginas/pastorais/comunicacao.html">Pastoral da Comunicação</a></li>
						<li><a href="paginas/pastorais/crianca.html">Pastoral da Criança</a></li>
						<li><a href="paginas/pastorais/esperanca.html">Pastoral da Esperança</a></li>
						<li><a href="paginas/pastorais/juventude.html">Pastoral da Juventude</a></li>
						<li><a href="paginas/pastorais/batismo.html">Pastoral do Batismo</a></li>
						<li><a href="paginas/pastorais/carente.html">Pastoral do Carente</a></li>
						<li><a href="paginas/pastorais/dizimo.html">Pastoral do Dízimo</a></li>
						<li><a href="paginas/pastorais/familiar.html">Pastoral Familiar</a></li>
						<li><a href="paginas/pastorais/vocacional.html">Pastoral Vocacional</a></li>
					</ul>
				</li>
				<li><a href="index.php">Movimentos</a>
					<ul>
						<li><a href="paginas/movimentos/apostolado.html">Apostolado da Oração</a></li>
						<li><a href="paginas/movimentos/infanciaAdomissionaria.html">Infância e Adolescência Missionária</a></li>
						<li><a href="paginas/movimentos/legMaria.html">Legião de Maria</a></li>
						<li><a href="paginas/movimentos/ligaMae.html">Liga Apostólica das mães de Schoenstatt</a></li>
						<li><a href="paginas/movimentos/ligaFem.html">Liga Apostólica Feminina de Schoenstatt</a></li>
						<li><a href="paginas/movimentos/movMaePeregrina.html">Movimento Mãe Peregrina</a></li>
						<li><a href="paginas/movimentos/movGuadalupe.html">Movimento Nossa Sra. de Guadalupe</a></li>
						<li><a href="paginas/movimentos/rcc.html">RCC</a></li>
						<li><a href="paginas/movimentos/tercoHomem.html">Terço dos Homens</a></li>
						<li><a href="paginas/movimentos/tercoSantuario.html">Terço do Santuário</a></li>
						<li><a href="paginas/movimentos/tercoMulher.html">Terço das Mulheres</a></li>
						<li><a href="paginas/movimentos/vicentino.html">Vicentinos</a></li>
					</ul>
				</li>
				<li><a href="index.php">Ministérios</a>
					<ul>
						<li><a href="paginas/ministerios/acolito.html">Acólitos</a></li>
						<li><a href="paginas/ministerios/coroinha.html">Coroinhas</a></li>
						<li><a href="paginas/ministerios/canto.html">Equipe de Canto</a></li>
						<li><a href="paginas/ministerios/celMatrimonio.html">Equipe de celebração matrimonial</a></li>
						<li><a href="paginas/ministerios/epal.html">EPAL</a></li>
						<li><a href="paginas/ministerios/palavra.html">Ministério da Palavra</a></li>
						<li><a href="paginas/ministerios/eucaristia.html">Ministros da Eucaristia</a></li>
						<li><a href="paginas/ministerios/assessor.html">Assessores</a></li>
					</ul>
				</li>
				<li><a href="paginas/historia.html">História</a></li>
				<li><a href="paginas/contato.html">Contato</a></li>
			</ul>
		</nav>
		<div id="div1">
			<img src="img/CAETANO.png" id="icone"/>
			<img src="img/nome.png" id="nome"/>
		</div>
		<nav>
			<ul class="cabecalho">
				<li><a href="paginas/linksCabecalho/calendarioMensal.html">Calendário Mensal</a></li>
				<li><a href="paginas/linksCabecalho/oracao.html">Orações</a></li>
				<li><a href="paginas/linksCabecalho/evangelhoDia.html">Liturgia diária</a></li>
				<li><a href="paginas/linksCabecalho/links.html">links uteis</a></li>
			</ul>
		</nav>
		<nav>
			<h3 id="data">
				<script language=javascript type="text/javascript">
					//mostra a data e dia da semana atual
					document.write(diaNome[now.getDay() ]+", "+now.getDate ()+" de "+mesNome [now.getMonth() ]+" de "+now.getFullYear());
				</script>
			</h3>
		</nav>
		<div id="corpo">
			<h1>Seja bem-vindo!</h1>
			</br>
			<div id="slides">
				<iframe id="slide" src="slides.html"frameborder="0" align="center"></iframe>
				<h6>Igreja Matriz de São Caetano.</h6>
			</div>
		</div>
		<div id="rodape">
			<img src="img/logo.png" id="logo"/>
			<h4 id="txtrodape">Rua Dona Ana Chaves, 199 - Centro - Brazópolis - MG.</h4>
			<h3 id="txtrodape">Fone:(35) 3641-1110 / psaocaetano@yahoo.com.br</h3>
		</div>
	</body>
</html>
