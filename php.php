<?php
session_start();
$nome=$_POST['nome'];
$senha=$_POST['senha'];
$connect = mysqli_connect("localhost","root","","sistemalogin");
$verificar=mysqli_query($connect,"SELECT * FROM usuarios WHERE login = '$nome' AND logim = '$senha'");
if (mysqli_num_rows($verificar)!=1){
   echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='formulario.html';</script>";
    die();
    }else{
        $_SESSION['nome']=$nome;
        $_SESSION['senha']=$senha;
        header("Location:index.php");
    }
    ?>
    