<?php
    function ativarErros(){
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }

    function ativarLigacaoBaseDados(){
        $servidor = "62.28.39.135";
        $utilizadorBaseDados = "bdjcc";
        $passwordBaseDados = "123.Abcd";
        $baseDados = "bdjcc";

        global $link;
        $link = mysqli_connect($servidor, $utilizadorBaseDados, $passwordBaseDados, $baseDados);
        $GLOBALS['ligacaoBaseDados'] = $link;
        return $link;
    }

    function fecharLigacaoBaseDados(){
        $link = $GLOBALS['ligacaoBaseDados'];
        mysqli_close($link);
    }
 
    function testarLigacaoBaseDados(){
        $link = $GLOBALS['ligacaoBaseDados'];
        if (!$link) {
            echo "Error: Falha ao ligar-se à base de dados MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            return false;
        }
    }
 
    function guardarDadosBaseDados($sqlString){
        return mysqli_query($GLOBALS['ligacaoBaseDados'], $sqlString);
    }
 
    function obterDadosBaseDados($sqlString){
        return mysqli_query($GLOBALS['ligacaoBaseDados'], $sqlString );
    }
 
    // Executar a abertura da ligação à base de dados.
    ativarErros();
    ativarLigacaoBaseDados();
    testarLigacaoBaseDados();

?>