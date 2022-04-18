<?php

spl_autoload_register(function ($classe) {

    $prefixo = "App\\";

    $diretorio = __DIR__ . '/src/';

    if(strncmp($prefixo, $classe, strlen($prefixo)) !== 0){
        return;
    }

    $namespace = substr($classe, strlen($prefixo));

    $namespaceArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $namespace);

    $arquivo = $diretorio . $namespaceArquivo . '.php';

    var_dump($arquivo);

});
