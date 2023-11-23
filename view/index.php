<?php
    $titulo = "Financeiro";
    include_once "sidebar.php";
?>
<h1>Seja bem vindo!</h1>
<span><?php
 print_r(var_dump($_ENV));
 echo __DIR__;
 echo $_SERVER['DOCUMENT_ROOT'];
 ?></span>
<?php
    include_once "footer.php";

?>