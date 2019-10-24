<?php

    $_POST["senha"]="f";
    $_POST["confirmaSenha"]="";
    

    if (($_POST["senha"] == null) && ($_POST["confirmaSenha"] == null)) 
    {
        $msg = "Os dois campos de senha estão vazios";
        echo $msg;   
        return $msg;
    } 
  
    if (($_POST["senha"] == null) && ($_POST["confirmaSenha"] != null)) 
    {
      $msg = "A senha está vazia";
      echo $msg;   
      return $msg;
  } 
        
    if (($_POST["senha"] != null) && ($_POST["confirmaSenha"] == null)) 
    {
      $msg = "O campo confirmar senha está vazio";
      echo $msg;   
      return $msg;
  } 
    
    if ($_POST["senha"] != $_POST["confirmaSenha"]) 
    {
        $msg = "Senhas não coincidem";
        echo $msg;   
        return $msg;
    } 
    
    if ($_POST["senha"] = $_POST["confirmaSenha"]) 
    { 
        $msg = "Correto";
        echo $msg;   
        return $msg;
    }


?>
 
  