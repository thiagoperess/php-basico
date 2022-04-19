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
        $n = $_GET["v"];
        $rq = sqrt($n);
        echo "A raiz de $n é ".number_format($rq, 2);
    ?>
    <button>
    <a href="aula08.html">
        Voltar
    </a>
    </button>
</div>
</body>
</html>
 