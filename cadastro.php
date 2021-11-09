<?php
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$connect = mysqli_connect("localhost","root","","sistemalogin");
$select = mysqli_query($connect,"SELECT login FROM usuarios WHERE login = '$login'");
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
    }else{
    if($logarray == $login){
    echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
    die();
    }else{
    $insert = mysqli_query($connect,"INSERT INTO usuarios (nome,login,logim) VALUES ('$nome','$login','$senha')");
    if($insert){
    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='formulario.html'</script>";
    }else{
    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
    }
    }
    }

    
?>