<?php
    include('../dao/Connection.php');

    function uploadNovaSenha($novaSenha, $id){
        global $mysqli;
        //criptografo a senha
        $md5_password = md5($novaSenha);
        
        $sql = "UPDATE user SET password= '$md5_password' WHERE id=$id";

        if (mysqli_query($mysqli, $sql)) {
            print "<script> console.log('Senha atualizada') </script>";
        } else {
            print "Erro ao atualizar registro: " . mysqli_error($mysqli);
        }
    }
    function gerarSenhaAleatoria(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
?>