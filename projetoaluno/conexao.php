<?php
   //Para fazer a conexão são necessarias 4 variáveis     
   $servidor = "localhost";
   $usuario = "root";
   $senha="";
   $banco = "escola";

   $conexao = mysqli_connect( $servidor, $usuario, $senha, $banco) or die;


   $consulta = "SELECT * FROM alunos"
   $consulta_alunos = mysqli_query($conexao, $consulta);
?>