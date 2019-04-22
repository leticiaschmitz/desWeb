
<?php
    $html = "<h1>Listagem de Produtos</h1>";
    $html.= "<ul>";
    foreach ($produtos as $p) {
        $html.="<li>Id: {$p->IdProduto}, Nome: {$p->NomeProduto}</li>";
    }
    $html.= "</ul>";

    echo $html;

    $html = "<h1>Listagem de Clientes</h1>";
    $html.= "<ul>";
    foreach ($clientes as $p) {
        $html.="<li>Id: {$p->IdProduto}, Nome: {$p->NomeProduto}</li>";
    }
    $html.= "</ul>";

    echo $html;

    $html = "<h1>Listagem de Transportadoras</h1>";
    $html.= "<ul>";
    foreach ($clientes as $p) {
        $html.="<li>Id: {$p->IDTransportadora}, Nome: {$p->NomeCompanhia}</li>";
    }
    $html.= "</ul>";

    echo $html;

    
?>