<?php 

if (isset($_GET["nome"])){
    echo "Nome (GET) = " . $_GET["nome"];
}

if (isset($_POST["nome"])){
    echo "Nome (POST) = " . $_POST["nome"];
}

//$nomes = array('João', 'Pedro', 'Maria', 'José', 'Manuel');

$cookie_name = "nomes";

//Ler Cookie
$nomes = json_decode($_COOKIE[$cookie_name], true);

//Gravar Cookie
setcookie($cookie_name, json_encode($nomes), time() + (86400 * 30), "/");


//var_dump($nomes);

?>

<form method="POST">

    <label for="nome">Nome</label>
    <input type="text" name="nome" />

    <input type="submit" value="Enviar" />

</form>

<table>
    
    <?php
    foreach ($nomes as $key => $value) {
        echo "<tr><td>" . $value . "</td></tr>";
    }
    ?>

</table>