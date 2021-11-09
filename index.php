<?php
session_start();
$nlo=$_SESSION['nome'];
$connect = mysqli_connect("localhost","root","","sistemalogin");
$verificar=mysqli_query($connect,"SELECT * FROM usuarios");
if(isset($nlo)){
echo"Bem-Vindo, $nlo <br>";
echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você <br><br>";


          
}else{
    header("Location:formulario.html ");
}
?>
 <table border="1"> 
        <tr> 
          <td>id</td>
          <td>Nome</td> 
          <td>login</td> 
        </tr> 
        <?php 
        $connect = mysqli_connect("localhost","root","","sistemalogin");
        $verificar=mysqli_query($connect,"SELECT * FROM usuarios");
        while($array=mysqli_fetch_array($verificar)) { ?> 
        <tr> 
            <td><?php echo $array['id']; ?></td> 
          <td><?php echo $array['nome']; ?></td> 
          <td><?php echo $array['login']; ?></td> 
        
        </tr> 
        <?php } ?> 
      </table> 
<a href="sair.php">sair</a>
