<?php
  var_dump($argc);
  var_dump($argv);

  if($argc < 2){
    echo("\nO nome do arquivo TXT deve ser passado para o script. \n\n");
  }

  // Verificamos se a extensão do arquivo é txt.
  $file = $argv[1];
  if(".txt" !== strtolower(substr($file, -4))){
    echo "\nO script aceita somente arquivos TXT.\n\n";
    exit(1);
  };
  
  // Pegamos o conteúdo do arquivo.
  $contents = file_get_contents($file);

  // Separamos as palavras em um array.
  $words = preg_split("/[\s+,\.!\?\(\):]/", $contents, null, PREG_SPLIT_NO_EMPTY);

  // Ordenamos alfabeticamente.
  natcasesort($words);

  foreach ($words as $position => $word) {

    /*
    * Imprimimos cada palavra e sua respectiva posição
    * dentro do texto.
    */
    echo "{$word} ({$position})\n";

  }
  exit;

  ?>