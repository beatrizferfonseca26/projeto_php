<html>
    <body>
        <b>
            Preçário: <br>
            Napoletana 8 euros <br>
            Anchovas 9 euros <br>
            margueritha 7 euros <br>
        </b>
        <br>
        <form action="calcular_encomenda.php" method="get">
            Digitar nome da pizza: <input type="text" name="nome_pizza"><br>
            Digitar quantidade: <input type="text" name="qtd"><br>
            Desconto? (10%) 
            <input type="radio" name="desconto" value="sim"> Sim
            <input type="radio" name="desconto" value="nao"> Não
            <br>
            <input type="submit">
        </form>
    </body>
</html>