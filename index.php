<?php
    include "header.php";
?>
<!--
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
                    document.write(diaNome[now.getDay() ] + ", " + now.getDate() + " de " + mesNome [now.getMonth() ] + " de " + now.getFullYear());
                </script>
            </h3>
        </nav>
        -->
<div class="container-fluid bg-light p-5">
    <div class="row my-auto">
        <div class="col-12 col-md-12 col-sm-12">
            <h1>Seja bem-vindo!</h1>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-sm-12 col-md-9 p-3">
                <div id="slides">
                    <iframe id="slide" src="slide.php"frameborder="0" align="center"></iframe>
                    <h6>Igreja Matriz de São Caetano.</h6>
                </div>
        </div>
        <div class="col-sm-12 col-md-3 mt-3">
            <img src="img/banner_liturgia.jpg" class="img-fluid">
        </div>
    </div>
</div>
<?php
    include "footer.php";
?>
