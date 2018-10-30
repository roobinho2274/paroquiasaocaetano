<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Paróquia São Caetano</title>

        <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
        <link rel="stylesheet" type="text/css" href="engine0/style.css" />
        <script type="text/javascript" src="engine0/jquery.js"></script>
        <!-- End WOWSlider.com HEAD section --></head>
    <body>

        <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
        <div id="wowslider-container0">
            <div class="ws_images"><ul>
                    <?php
                    $path = "data0/images/";
                    $diretorio = dir($path);

                    // echo "Lista de Arquivos do diretório '<strong>" . $path . "</strong>':<br />";
                    $i = 0;
                    while ($arquivo = $diretorio->read()) {
                        if ($arquivo != "." && $arquivo != "..") {
                            echo "<li><img src = 'data0/images/" . $arquivo . "' alt =''  title = '' id = 'wows0_" . $i . "'/></li>";
                            $i++;
                        }
                    }
                    $diretorio->close();
                    ?>
                </ul></div>
            <div class="ws_bullets"><div>
                    <?php
                    $path = "data0/tooltips/";
                    $diretorio = dir($path);

                    // echo "Lista de Arquivos do diretório '<strong>" . $path . "</strong>':<br />";
                    $i = 0;
                    while ($arquivo = $diretorio->read()) {
                        if ($arquivo != "." && $arquivo != "..") {
                            ?><a href="#" title="foto"><span><img src="data0/tooltips/<?php echo $arquivo ?>" alt='/'><?php echo $i ?></span></a>
                            <?php
                            $i++;
                        }
                    }
                    $diretorio->close();
                    ?>


                </div></div>
            <div class="ws_shadow"></div>
        </div>	
        <script type="text/javascript" src="engine0/wowslider.js"></script>
        <script type="text/javascript" src="engine0/script.js"></script>
        <script type="text/javascript" src="engine0/script.js"></script>
        <!-- End WOWSlider.com BODY section --></body>
</html>
