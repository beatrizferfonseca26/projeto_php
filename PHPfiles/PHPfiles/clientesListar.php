<?php include 'navbar.html';?>
<?php include 'funcoesBD.php';?>

<h3> Lista de Clientes: </h3>

<?php
$sql = "SELECT * FROM clientes;";
$tabelaResultado = obterDadosBaseDados($sql);
//Avaliar se a tabela resultado contem algum registo

if(mysqli_num_rows($tabelaResultado) > 0)
while($linhaTabela = mysqli_fetch_assoc($tabelaResultado)) {
    echo $linhaTabela['id'] . "-";
    echo $linhaTabela['nomeCliente']. "<br> <hr>";
}

?>