<?php

spl_autoload_register(function($classe) {
    $prefix = 'App\\'; /* para indentificar que é uma classe do nosso projeto; isso foi definido no namespace da Classe;*/
    $directory =  __DIR__ . '/application/';

    if(strncmp($prefix, $classe, strlen($prefix) ) !== 0){
        return;
    }

    $namespace = substr($classe, strlen($prefix));

    $namespace_file = str_replace( '\\', DIRECTORY_SEPARATOR, $namespace);

    $file = $directory . $namespace_file . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});
