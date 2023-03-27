<?php
    session_start();
    include('sendMail.php');
    include('../model/User.php');
    include('../dao/Connection.php');
    
    if(isset($_POST['username']) && empty($_POST['password'])){
        recuperarSenha();
    }elseif(empty($_POST) or empty($_POST['username']) or empty($_POST['password'])){
        print "<script> location.href='../view/index.php'; </script>";
    }else{
        verificaLogin();
    }
    
    function verificaLogin(){
        global $mysqli;

        $username = $mysqli->real_escape_string($_POST['username']);
        $password = $mysqli->real_escape_string($_POST['password']);
                
        $user = new User($username, $password);
    
        $sql = "SELECT * FROM user WHERE username = '" . $user->getUsername() . "' AND password = '" .md5($user->getPassword()) . "'";
        
        // testa a query e verifica se há erros
        $res = $mysqli->query($sql) or die('Falha na Execução do código.' . $mysqli->error);
    
        $row = $res->fetch_object();
    
        $qtd = $res->num_rows;
    
        if($qtd > 0){
            $_SESSION['id'] = $row->id;
            $_SESSION['name'] = $row->name;
            
            print "<script>location.href='../view/dashboard.php';</script>";
        } else {
            if (isset($_SESSION['login_attempts']) && $_SESSION['login_attempts'] >= 4) {
                if (isset($_SESSION['login_attempts_time']) && (time() - $_SESSION['login_attempts_time']) < 120) {
                    // diferença de tempo menor que 2 minutos, bloqueia o usuário
                    echo "Você excedeu o número máximo de tentativas de login. Tente novamente mais tarde.";
                    exit;
                } else {
                    // diferença de tempo maior ou igual que 2 minutos deixa fazer nova tentativa de login
                    unset($_SESSION['login_attempts']);
                    unset($_SESSION['login_attempts_time']);
                }
            }
            echo "<script> alert('Usuário ou senha incorretos'); </script>";
            // credenciais inválidas, incrementa o número de tentativas de login
            if (isset($_SESSION['login_attempts'])) {
                $_SESSION['login_attempts']++;
            } else {
                $_SESSION['login_attempts'] = 1;
            }
            $_SESSION['login_attempts_time'] = time(); // armazena a data e hora em que o usuário excedeu o número máximo de tentativas de login
            echo "<script>location.href='../view/index.php';</script>";
            exit;
        }
    }

    function recuperarSenha(){
        global $mysqli;

        $username = $mysqli->real_escape_string($_POST['username']);

        $user = new User($username);

        $sql = "SELECT * FROM user WHERE username = '" . $user->getUsername() . "' ";
        
        $res = $mysqli->query($sql) or die('Falha na Execução do código.' . $mysqli->error);
    
        // transforma o retorno da query em objetos
        $row = $res->fetch_object();
    
        $qtd = $res->num_rows;
    
        if($qtd > 0){
            sendMail($row);
        }else{
            print "<script> alert('Usuário inexistente!'); </script>";
            echo "<script>location.href='../view/index.php';</script>";
        }
    }
?>