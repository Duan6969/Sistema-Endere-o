<?php
include "./api.php";
if(isset($_GET['cep'])){
    $cep = $_GET['cep'];
    $endereco = buscarCEP($cep);
}
?>
<form method="GET">
    <input
    type="text"
    placeholder="Buscar cep"
    name="cep"
    >
    <button type="submit">buscar CEP</button>
</form>
<?php if(isset($endereco['erro'])):?>
<div>
    <h2>Ocorreu um erro</h2>
    <p><?php echo $endereco['erro']?></p>
</div>
<?php elseif(isset($endereco['cep'])):?>
    <div>
        <h2>CEP encontrado</h2>
        <?php foreach($endereco as $dado => $valor){
        
    } ?>
    </div>
    
<?php endif;?>
