<?php 
   include_once('./templates/config.php');
    $i = 0;
    $sqlSelect = "SELECT * FROM relat";

    $result = $conexao->query($sqlSelect);
    while($user_data = mysqli_fetch_assoc($result))
    {
        $tipo[$i] = $user_data['tipo'];
        $rot_mes[$i] = $user_data['rot_mes'];
        $onu_mes[$i] = $user_data['onu_mes'];
        $ont_mes[$i] = $user_data['ont_mes'];
        $insta1[$i] = $user_data['insta'];
        $i++;
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require './lib/vendor/autoload.php';

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host       = 'smtp.outlook.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'evolunetteste@outlook.com';
        $mail->Password   = '12345678Ga';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('evolunetteste@outlook.com', 'Gabriel');
        $mail->addAddress('silva0349@gmail.com', 'Gabriel');
        $mail->addAddress('suporte@evolunetcorp.com.br', 'Evolunet');

        
        $mail->isHTML(true);                                 
        $mail->Subject = 'Teste de envio de email';
        $mail->Body    = 'Relatório mensal do controle de estoque Evolunet<br><br>' .$tipo[0] .' <br>Roteador: ' .$rot_mes[0] .' <br>ONU:' .$onu_mes[0] .' <br>ONT: ' .$ont_mes[0] .'<br>Instalações: ' .$insta1[0] .'<br><br>
        '.$tipo[1] .' <br>Roteador: ' .$rot_mes[1] .'<br>ONU:' .$onu_mes[1] .' <br>ONT: ' .$ont_mes[1] .'<br>Instalações: ' .$insta1[1] .'<br><br>
        '.$tipo[2] .' <br>Roteador: ' .$rot_mes[2] .'<br>ONU:' .$onu_mes[2] .' <br>ONT: ' .$ont_mes[2] .'<br>Instalações: ' .$insta1[2] .'<br><br>
        '.$tipo[3] .' <br>Roteador: ' .$rot_mes[3] .'<br>ONU:' .$onu_mes[3] .' <br>ONT: ' .$ont_mes[3] .'<br>Instalações: ' .$insta1[3] .'<br><br>';
        $mail->AltBody = 'Olá, este é um teste de empresa Evolunet.\n';

        $mail->send();

        echo 'Email enviado com sucesso<br>';
    } catch (Exception $e) {
        echo "Erro: Email não enviado com sucesso. Error PHPMailer: {$mail->ErrorInfo}";
        echo "Erro: Email não enviado com sucesso.<br>";
    }
?>