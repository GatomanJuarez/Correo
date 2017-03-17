<?php 
    include ("class.phpmailer.php");
    include ("class.smtp.php");

    $mail = new PHPMailer();

    $de = "octavio@myservidor.com";
    $para = $_GET['email'];
    $asunto = $_GET['asunto'];
    $texto = $_GET['texto'];

    $mail -> SMTPDebug = 1;
    $mail -> IsSMTP();
    $mail -> SMTPAuth = true;       //Habilita la autenticacion
    $mail -> SMTPSecure = "ssl";    //Establece el protocolo de autenticacion
    $mail -> Host = "smtp.hotmail.com";     //Establece host servidor SMTP  
    $mail -> Port = 465;        //Establece el puerto de conexion
    $mail -> Username = "jesusanto756@hotmail.com";     //Usuario del servidor
    $mail -> Password ="gatoman";       //Contraseña del servidor SMTP
    $mail -> From ="jesusanto756@hotmail.com";      //Destinatario
    $mail -> FromName ="Gatoman";       //Nombre del destinatiario
    $mail -> Subject = $asunto;
    $mail -> WordWrap = 50;
    $mail -> MsgHTML($texto);
    $mail -> AddReplyTo("jesusanto756@hotmail.com","Webmaster");
    $mail -> AddAddress("jesusanto756@hotmail.com","Name");
    $mail -> IsHTML(true);      //Habilita contenido HTML

    if(!$mail -> Send()){
        echo "Error: ".$mail -> ErrorInfo;
    }
        else {
            echo "Gracias por enviar el email";
        }
?>