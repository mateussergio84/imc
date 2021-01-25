<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>IMC</title>
   <meta charset = "UTF-8">
   <meta name = "autor" contend "mateus"/>
</head>
<body>
   <h1>IMC</h1>
   <form action="" method="post" >
      Peso: <input name="peso" type="text"><br>
      ALtura: <input name="altura" type="text"><br>
      <input type="submit" name="operacao" value="Calcular"> 
   </form> 
<?php

   $a =(float) $_POST['peso'];
   $b = (float) $_POST['altura'];
   $imc = $a/($b*$b);
   

   if( !empty($imc) ) {
      if($imc <= 18.5)
         $c = "Abaiixo do peso";
      else if($imc <= 24.9)
         $c =  "Peso ideal";
      else if($imc <= 29.9)
         $c = "Levemente acima do peso";
      else if($imc <= 34.9)
         $c = "Obesidade grau I";
      else if($imc <= 39.9) 
         $c = "Obesidade grau II";
      else if ($imc <= 40)
	$c = "Obesidade grau III";
      echo "Resultado: $c";
   }

?> 
</body>
</html>
