<?php
function endsWith( $str, $sub ) {
    return ( substr( $str, strlen( $str ) - strlen( $sub ) ) == $sub );
}

function percorrerPastasLoad($dir, $nomeClasse){
    $dh = opendir($dir); 
    $cSeparator = DIRECTORY_SEPARATOR;
    
    while (false !== ($filename = readdir($dh))) { 
        if(substr($filename, 0 , 1) != "."){
            $pathFolder = substr($dir, 0, strlen($dir) - 1) . $cSeparator . $filename; 

            if(endsWith($pathFolder, $nomeClasse . ".php")){
                require_once($pathFolder);
                break;
            }
            
            if(is_dir($pathFolder)) {
                percorrerPastasLoad($pathFolder . $cSeparator, $nomeClasse);
            } 
        }
    }
}

spl_autoload_register(function($nomeClasse) {
    $cSeparator = DIRECTORY_SEPARATOR;
    $dir =  $_SERVER['DOCUMENT_ROOT'] . $cSeparator . "phpEstudos" . $cSeparator;
    percorrerPastasLoad($dir, $nomeClasse);
    
});

$carro = new DelRey();
$carro->acelerar(100);

?>
