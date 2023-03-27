<?php

include('password.php');
require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($dados){
    $mail = new PHPMailer(true);
    
    try{
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = 'sistema.loginprojeto@gmail.com';
        $mail->Password = 'aprffjaikyyaaauh';
        $mail->Port = 587;
    
        $mail->setFrom('sistema.loginprojeto@gmail.com');
        $mail->addAddress($dados->email);


        $senha = gerarSenhaAleatoria();
        uploadNovaSenha($senha, $dados->id);
    
        $mail->isHTML(true);
        $mail->Subject = 'Sua senha de Login.';
        $mail->Body = 'Sua senha do Sistema de Login para o Usuário:' . $dados->username . '<br>' . 'é: ' . '<strong>'. $senha . '</strong>';
        $mail->AltBody = 'Chegou o email teste BERNARDO';
    
        if($mail->send()){
            print "<script> alert('Email enviado com sucesso!'); </script>";
            echo "<script>location.href='../view/index.php';</script>";
        }else{
            echo 'n enviado!';
        }
    
    }catch(Exception $e){
        echo 'erro:' . $mail->ErrorInfo;
    }
}