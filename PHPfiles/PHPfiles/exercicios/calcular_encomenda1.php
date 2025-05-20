<?php
//obter os valores do form:
    $precoPizza=0;
    if ($_POST["nome_pizza"]=="Napoletana") $precoPizza=8;
    if ($_POST["nome_pizza"]=="Margueritha") $precoPizza=7;
    if ($_POST["nome_pizza"]=="Anchovas") $precoPizza=9;

    if(isset($_POST["qtdPizza"]))
        $qtdPizza=$_POST["qtdPizza"];
    else
        $qtdPizza=0;
    $subTotal1=$precoPizza*$qtdPizza;
    echo "Valor das Pizzas:", $subTotal1 , "<br>";

    $valorExtras=0;
    if (isset($_POST["extraP"])) $valorExtras=$valorExtras+2;
    
    if (isset($_POST["extraQ"])) $valorExtras=$valorExtras+1;
    
    if (isset($_POST["extraC"])) $valorExtras=$valorExtras+1;
    
    if (isset($_POST["qtdExtra"])) $qtdExtra=$_POST["qtdExtra"];
    
    else $qtdExtra=0;

    $subTotal2=$valorExtras*$qtdExtra;
    echo "valor dos Extras:", $subTotal2 . "<br>";

    $totalFinal=$subTotal1+$subTotal2;

    $desconto=$_POST["desconto"];
    if($desconto=="sim")
    $totalFinal=$totalFinal-$totalFinal*0.1;

    echo "Valor Final: ", $totalFinal . "<br>";
?>