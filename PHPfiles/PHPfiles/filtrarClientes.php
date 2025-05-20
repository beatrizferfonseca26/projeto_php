<?php include 'navbar.html';?>
<?php include 'funcoesBD.php';?>

<body>
<h2>Filtrar Clientes: </h2>
<hr>
<a href="novoCliente">Novo Cliente</a>
<h4>Porcurar por nome: </h4>
<input type="text" name="pesquisa" placeholder="Digite nome clientes" required>
<button type="submit">Clicar</button>

</body>

<?php
$sql = "SELECT * FROM clientes WHERE nomeCliente LIKE'".$pesquisa."' ORDER BY nomeCliente ASC";


$tabelaResultado = obterDadosBaseDados($sql);
//Avaliar se a tabela resultado contem algum registo

if(mysqli_num_rows($tabelaResultado) > 0)
while($linhaTabela = mysqli_fetch_assoc($tabelaResultado)) {
    echo $linhaTabela['id'] . "-";
    echo $linhaTabela['nomeCliente']. "<br> <hr>";
}
?>