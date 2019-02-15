<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Paróquia São Caetano</title>
        <link rel ="stylesheet" type ="text/css" href ="CSS/estilo1.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script language="javascript" type="text/javascript">
            diaNome = new Array("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado");
            mesNome = new Array("janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro");
            now = new Date;
        </script>
    </head>	
    <body>
        <!-- Piwik -->
        <script type="text/javascript">
            var _paq = _paq || [];
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function () {
                var u = "http://cluster-piwik.locaweb.com.br/";
                _paq.push(['setTrackerUrl', u + 'piwik.php']);
                _paq.push(['setSiteId', 27970]);
                var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
                g.type = 'text/javascript';
                g.async = true;
                g.defer = true;
                g.src = u + 'piwik.js';
                s.parentNode.insertBefore(g, s);
            })();
        </script>
        <!-- End Piwik Code -->

        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <img src="img/logotop.png" alt="Logo" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="paroquia" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        A Paróquia
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="paroquia">
                                        <a class="dropdown-item" href="paginas/padroeiro.html">Padroeiro</a>
                                        <a class="dropdown-item" href="paginas/paroco.html">Pároco</a>
                                        <a class="dropdown-item" href="paginas/vigario.html">Vigário Paroquial</a>
                                        <a class="dropdown-item" href="paginas/programacao.html">Programação Paroquial</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="comunidade" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Comunidades
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="comunidade">
                                        <a class="dropdown-item" href="paginas/setor/matriz.html">Setor Matriz</a>
                                        <a class="dropdown-item" href="paginas/setor/santuario.html">Setor Santuário</a>
                                        <a class="dropdown-item" href="paginas/setor/bomSucesso.html">Setor Bom Sucesso</a>
                                        <a class="dropdown-item" href="paginas/setor/cachoeira.html">Setor Cachoeira</a>
                                        <a class="dropdown-item" href="paginas/setor/farias.html">Setor Farias</a>
                                        <a class="dropdown-item" href="paginas/setor/teodoros.html">Setor Teodoros</a>
                                        <a class="dropdown-item" href="paginas/setor/luminosa.html">Setor Luminosa</a>
                                        <a class="dropdown-item" href="paginas/setor/freiorestes.html">Setor Frei Orestes</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="pastorais" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pastorais
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="pastorais">
                                        <a class="dropdown-item" href="paginas/pastorais/catequetica.html">Pastoral Catequética</a>
                                        <a class="dropdown-item" href="paginas/pastorais/comunicacao.html">Pastoral da Comunicação</a>
                                        <a class="dropdown-item" href="paginas/pastorais/crianca.html">Pastoral da Criança</a>
                                        <a class="dropdown-item" href="paginas/pastorais/esperanca.html">Pastoral da Esperança</a>
                                        <a class="dropdown-item" href="paginas/pastorais/juventude.html">Pastoral da Juventude</a>
                                        <a class="dropdown-item" href="paginas/pastorais/batismo.html">Pastoral do Batismo</a>
                                        <a class="dropdown-item" href="paginas/pastorais/carente.html">Pastoral do Carente</a>
                                        <a class="dropdown-item" href="paginas/pastorais/dizimo.html">Pastoral do Dízimo</a>
                                        <a class="dropdown-item" href="paginas/pastorais/familiar.html">Pastoral Familiar</a>
                                        <a class="dropdown-item" href="paginas/pastorais/vocacional.html">Pastoral Vocacional</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="movimentos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Movimentos
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="movimentos">
                                        <a class="dropdown-item" href="paginas/movimentos/apostolado.html">Apostolado da Oração</a>
                                        <a class="dropdown-item" href="paginas/movimentos/infanciaAdomissionaria.html">Infância e Adolescência Missionária</a>
                                        <a class="dropdown-item" href="paginas/movimentos/legMaria.html">Legião de Maria</a>
                                        <a class="dropdown-item" href="paginas/movimentos/ligaMae.html">Liga Apostólica das mães de Schoenstatt</a>
                                        <a class="dropdown-item" href="paginas/movimentos/ligaFem.html">Liga Apostólica Feminina de Schoenstatt</a>
                                        <a class="dropdown-item" href="paginas/movimentos/movMaePeregrina.html">Movimento Mãe Peregrina</a>
                                        <a class="dropdown-item" href="paginas/movimentos/movGuadalupe.html">Movimento Nossa Sra. de Guadalupe</a>
                                        <a class="dropdown-item" href="paginas/movimentos/rcc.html">RCC</a>
                                        <a class="dropdown-item" href="paginas/movimentos/tercoSantuario.html">Terço do Santuário</a>
                                        <a class="dropdown-item" href="paginas/movimentos/tercoMulher.html">Terço das Mulheres</a>
                                        <a class="dropdown-item" href="paginas/movimentos/vicentino.html">Vicentinos</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="ministérios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Ministérios
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="ministérios">
                                        <a class="dropdown-item" href="paginas/ministerios/acolito.html">Acólitos</a>
                                        <a class="dropdown-item" href="paginas/ministerios/coroinha.html">Coroinhas</a>
                                        <a class="dropdown-item" href="paginas/ministerios/canto.html">Equipe de Canto</a>
                                        <a class="dropdown-item" href="paginas/ministerios/celMatrimonio.html">Equipe de celebração matrimonial</a>
                                        <a class="dropdown-item" href="paginas/ministerios/epal.html">EPAL</a>
                                        <a class="dropdown-item" href="paginas/ministerios/palavra.html">Ministério da Palavra</a>
                                        <a class="dropdown-item" href="paginas/ministerios/eucaristia.html">Ministros da Eucaristia</a>
                                        <a class="dropdown-item" href="paginas/ministerios/assessor.html">Assessores</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="paginas/historia.html">História</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="paginas/contato.html">Contato</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>