<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="uni5_entradas.css" />
  </head>
  <body>
<?php
  require 'uni5_entradas_class.php';
  $mi_cine = new uni5_entradas_class();
  session_start();
  if(isset($_REQUEST[estado]) && $_REQUEST[estado] == "cambiar"){
    sess
  }
  $mi_cine->mostrarmatriz();
  //var_dump($mi_cine->cine);
?>
  </body>
</html>