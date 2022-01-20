<!DOCTYPE html>
<html lang="en">
    <!-- https://www.youtube.com/watch?v=eFxDili9k3o -- 12:45/22:53 -->
    <!-- 
        BASE DE DADOS

create table usuarios(id integer not null auto_increment
					 ,nome varchar(30) not null
                     ,telefone varchar(30) not null
                     ,email varchar(40) not null
                     ,senha varchar(32) not null
                     ,primary key(id));
use login_project;
create database login_project default character set utf8 default COLLATE utf8_general_ci;
    -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Login Project</title>
</head>
<body>
    <div id="corpo-form">
    <h1> <strong> ENTRAR </strong> </h1>
    <form method="POST">
        <input type="email" name="email" placeholder="Usuário" maxlength="30">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Acessar">
        <a href="cadastrar.php">Não tem acesso ainda? <strong>Cadastre-se!</strong> </a>
    </form>
    </div>
    <?php

    ?>
</body>
</html>