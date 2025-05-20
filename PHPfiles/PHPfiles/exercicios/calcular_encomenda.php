<?php
//obter os valores do form:
    $nomeP=$_GET["nome_pizza"];
    $qtd=$_GET["qtd"];
    $desconto=$_GET["desconto"];
    $desc=0.10;
    $subDesc=0;


    if ($nomeP="Napoletana")
    {
        $preco=8.00;
    }
    else if ($nomeP="Anchovas")
    {
        $preco=9.00;
    }
    else if ($nomeP="Margueritha")
    {
        $preco=7.00;
    }
    

    if ($desconto=="sim")
    {
        $resultado=$preco*$qtd;
        $subDesc=$resultado*$desc;
        $resultado=$resultado-$subDesc;
    }
    else if ($desconto=="nao")
    {
        $resultado=$qtd*$preco;
    }
        

    //informar:
        echo "valor da encomenda: $resultado €";
?>