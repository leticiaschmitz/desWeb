
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
    foreach ($transportadoras as $p) {
        $html.="<li>Id: {$p->IDTransportadora}, Nome: {$p->NomeCompanhia}</li>";
    }
    $html.= "</ul>";
    echo $html;

    $html = "<h1>Listagem de Categorias</h1>";
    $html.= "<ul>";
    foreach ($categorias as $p) {
        $html.="<li>Id: {$p->IDCategoria}, Nome: {$p->NomeCategoria}</li>";
    }
    $html.= "</ul>";
    echo $html;
    
    $html = "<h1>Listagem de Funcionarios</h1>";
    $html.= "<ul>";
    foreach ($funcionarios as $p) {
        $html.="<li>Id: {$p->IDFuncionario}, Nome: {$p->Nome}</li>";
    }
    $html.= "</ul>";
    echo $html;
    
    $html = "<h1>Listagem de Ordens</h1>";
    $html.= "<ul>";
    foreach ($ordens as $p) {
        $html.="<li>Id: {$p->IDOrdem}, Cliente: {$p->IDCliente}</li>";
    }
    $html.= "</ul>";
    echo $html;

    $html = "<h1>Listagem de Regiao</h1>";
    $html.= "<ul>";
    foreach ($regiao as $p) {
        $html.="<li>Id: {$p->IDRegiao}, Nome: {$p->DescricaoRegiao}</li>";
    }
    $html.= "</ul>";
    echo $html; 
    
    $html = "<h1>Listagem de Territorios</h1>";
    $html.= "<ul>";
    foreach ($territorios as $p) {
        $html.="<li>Id: {$p->IDTerritorios}, Nome: {$p->DescricaoTerritorios}</li>";
    }
    $html.= "</ul>";
    echo $html;

    $html = "<h1>Listagem de Transportadoras</h1>";
    $html.= "<ul>";
    foreach ($transportadoras as $p) {
        $html.="<li>Id: {$p->IDTransportadoras}, Nome: {$p->NomeCompanhia}</li>";
    }
    $html.= "</ul>";
    echo $html;
    
?>