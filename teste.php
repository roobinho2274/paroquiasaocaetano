<?php


  $path = "data0/images/";
  $diretorio = dir($path);

  // echo "Lista de Arquivos do diretório '<strong>" . $path . "</strong>':<br />";
  $i = 0;
  while ($arquivo = $diretorio->read()) {
  echo "<br>Aqui" . $arquivo;
   if ($arquivo != "." && $arquivo != "..") {
  echo "<li><img src = 'data0/images/" . $arquivo . "' alt =''  title = '' id = 'wows0_" . $i . "'/></li>";
  $i++;
  }
  }
  $diretorio->close(); 
/*
$path = "data0/images/";
$diretorio = dir($path);

echo "Lista de Arquivos do diretório '<strong>" . $path . "</strong>':<br />";
while ($arquivo = $diretorio->read()) {
    if ($arquivo != "." && $arquivo != "..")
        echo "<a href='" . $path . $arquivo . "'>" . $arquivo . "</a><br />";
}
$diretorio->close();*/
?>
