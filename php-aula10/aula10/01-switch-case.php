<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      $numero = isset($_GET["num"])?$_GET["num"]:0; 
      $operacao = isset($_GET["oper"])?$_GET["oper"]:1;

      switch ($operacao) {
          case 1:
              $resposta = $numero * 2;
              break;
          case 2:
              $resposta = $numero ** 3;
              break;
          case 3:
              $resposta = $numero ** 0.5;
              
      };
      echo "O resultado é ".number_format($resposta, 2);
    ?>
      <a href="01-index.html" class="botao">Voltar</a>
</div>
</body>
</html>
 
