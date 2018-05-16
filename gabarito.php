<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $resposta = $_GET["resp"];

      switch ($resposta) {
        case '1':
        case '2':
        case '4':
        $result = "Você errou... Precisa estudar mais!"; <br>
          break;
        case '3':
          $result = "Uhul!! Acertou!!"; <br>
          break;
        default:
          echo "Você precisa escolher uma alternativa...";
          break;
      }
      echo "$result";
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
  </body>
</html>
