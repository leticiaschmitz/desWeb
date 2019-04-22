
<?php
    $html = "<h1>Listagem de Produtos</h1>";
    $html.= "<ul>";
    foreach ($produtos as $p) {
        $html.="<li>Nome: {$p->nome}, DescriÃ§Ã£o: {$p->descricao}</li>";
    }
    $html.= "</ul>";

    echo $html;

    $html = "<h1>Listagem de Clientes</h1>";
    $html.= "<ul>";
    foreach ($clientes as $p) {
        $html.="<li>Nome: {$p->nome}, Descrição: {$p->descricao}</li>";
    }
    $html.= "</ul>";

    echo $html;
?>