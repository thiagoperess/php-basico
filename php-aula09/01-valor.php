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
    
        $idade = $_GET["idade"];

        if ($idade < 16) {
            $resposta = "Não vota";
        }

        elseif ($idade >= 16 && $idade < 18 || $idade > 65) {
            $resposta = "Voto opcional";
        }

        else {
            $resposta = "Voto obrigatório";
        }

        echo "Com $idade, $resposta"

    ?>
    <button>
    <a href="aula09.html">
        Voltar
    </a>
    </button>
</div>
</body>
</html>
 