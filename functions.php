<?php

$servicos = [
    [
        "nome" => "Desenvolvimento Web",
        "imagem" => "./img/undraw_web_developer_p3e5.svg",
        "descricao" => "Sites dinamicos, otimizados para motores de busca"
    ],
    [
        "nome" => "Marketing Digital",
        "imagem" => "./img/undraw_new_ideas_jdea.svg",
        "descricao" => "Alcance um publico maior, venda mais rápido!"
    ],
    [
        "nome" => "Consultoria UX",
        "imagem" => "./img/undraw_web_development_w2vv.svg",
        "descricao" => "Ofereça a melhor experiência para seus usuários!"
    ],
    [
        "nome" => "Consultoria Agil",
        "imagem" => "./img/undraw_detailed_information_3sp6.svg",
        "descricao" => "Aumente a satisfação do seu cliente"
    ],
    [
        "nome" => "Data Science",
        "imagem" => "./img/undraw_invest_88iw.svg",
        "descricao" => "Transforme seus dados em negócios com resultado"
    ],
    [
        "nome" => "Machine Learning",
        "imagem" => "./img/undraw_google_analytics_a57d.svg",
        "descricao" => "Tome decisões de acordo com previsão acertada dos dados"
    ]
];

function listarServicos()
{
    global $servicos;

    foreach ($servicos as $index => $servico) {
        echo "<div class='col-md-4 mt-4'>
            <div class='card'>
                <img class='card-img-top p-4' src='$servico[imagem]' alt='Imagem de capa do card'>
                <div class='card-body'>
                    <p class='card-text text-center'><a href='servico.php?id=$index'>$servico[nome]</a></p>
                </div>
            </div>
        </div>";
    }
}


function getNome($id)
{
    global $servicos;
    return $servicos[$id]["nome"];
}
