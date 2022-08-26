<?php 
    include_once('config.php');
        
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $tipo = $_POST['tipo'];
        $rot_mes = $_POST['rot_mes'];
        $onu_mes = $_POST['onu_mes'];
        $ont_mes = $_POST['ont_mes'];
        

        $sqlUpdate = "UPDATE relat SET tipo ='$tipo', rot_mes='$rot_mes', onu_mes='$onu_mes', ont_mes = '$ont_mes' WHERE id='$id'" ;

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: relat.php');
?>