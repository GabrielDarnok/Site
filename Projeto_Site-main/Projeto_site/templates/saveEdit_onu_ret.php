<?php 
    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $quant1 = $_POST['quant1'];
        $quant = $quant1 + $_POST['quant'];

        $sqlUpdate = "UPDATE retirada_onu SET marca ='$marca', modelo='$modelo', quantidade='$quant' WHERE id='$id'" ;

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: onu_ret.php');
?>