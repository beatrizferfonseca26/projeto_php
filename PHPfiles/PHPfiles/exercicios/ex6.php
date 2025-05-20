<html>
    <body>
        <b>
            Preçário: <br>
            Napoletana 8 euros <br>
            Anchovas 9 euros <br>
            Margueritha 7 euros <br>
            Pimentos: 2 euros; Queijo: 1 euro; Cogumelos:1 euro;
        </b>
        <br>
        <form action="calcular_encomenda1.php" method="post">
            Digitar nome da pizza: <input type="text" name="nome_pizza" value="Napoletana">
            <br>
            Digitar quantidade: <input type="text" name="qtdPizza" value="1">
            <br>
            
            Pimentos <input type="checkbox" name="extraP"> 
            Queijo <input type="checkbox" name="extraQ"> 
            Cogumelos <input type="checkbox" name="extraC"> 
            <br>
            Digitar quantidade: <input type="text" name="qtdExtra" value="1">
            <br>

            Desconto? (10%) 
            <input type="radio" name="desconto" value="sim"> Sim
            <input type="radio" name="desconto" value="nao" checked="checked"> Não
            <br>
            <input type="submit" value="Calcular">
        </form>
    </body>
</html>