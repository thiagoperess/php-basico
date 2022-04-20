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
        $diaSemana = isset($_GET["diaSemana"])?$_GET["diaSemana"]:0;

        switch ($diaSemana) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta-te a vai, meu querido! Deus te ama!";
                break;
            case 7:
            case 8:
                echo "Se até Eu descansei, descasa tu também. guri!";
                break;
            default:
                echo "Dia da semana inválido";
        }
    ?>
      <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 
