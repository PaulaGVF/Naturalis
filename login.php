<?php 
   $connect = mysqli_connect("localhost", "id7030049_admin", "1234567","id7030049_natureles");
   $login=0;
  
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
 

    $senha = $_POST['senha'];
    


 
 

    if (isset($entrar)) {
             
      $result= mysqli_query($connect,"SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' ") or die("erro ao selecionar");
        if ($result==false){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.html");
        }
    }
?>