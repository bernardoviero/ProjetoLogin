<?php
    session_start();

    if(empty($_POST) or empty($_POST['username']) or empty($_POST['password'])){
        
        print "<script> location.href='../view/index.php'; </script>";
    }
    
    include('../model/User.php');
    include('../dao/Connection.php');

    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);
            
    $user = new User($username, $password);

    $sql = "SELECT * FROM user WHERE username = '" . $user->getUsername() . "' AND password = '" .md5($user->getPassword()) . "'";
            
    $res = $mysqli->query($sql) or die('Falha na Execução do código.' . $mysqli->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;
        
    if($qtd > 0){
        $_SESSION['id'] = $row->id;
        $_SESSION['name'] = $row->name;
        
        print "<script>location.href='../view/dashboard.php';</script>";
    }else{
        echo "<script> alert('Usuário ou senha incorretos'); </script>";
        echo "<script>location.href='../view/index.php';</script>";
    }
?>