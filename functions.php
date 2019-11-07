<?php

session_start();

// $servicos = [
//     [
//         "nome" => "Desenvolvimento Web",
//         "imagem" => "./img/undraw_web_developer_p3e5.svg",
//         "descricao" => "Sites dinamicos, otimizados para motores de busca"
//     ],
//     [
//         "nome" => "Marketing Digital",
//         "imagem" => "./img/undraw_new_ideas_jdea.svg",
//         "descricao" => "Alcance um publico maior, venda mais rápido!"
//     ],
//     [
//         "nome" => "Consultoria UX",
//         "imagem" => "./img/undraw_web_development_w2vv.svg",
//         "descricao" => "Ofereça a melhor experiência para seus usuários!"
//     ],
//     [
//         "nome" => "Consultoria Agil",
//         "imagem" => "./img/undraw_detailed_information_3sp6.svg",
//         "descricao" => "Aumente a satisfação do seu cliente"
//     ],
//     [
//         "nome" => "Data Science",
//         "imagem" => "./img/undraw_invest_88iw.svg",
//         "descricao" => "Transforme seus dados em negócios com resultado"
//     ],
//     [
//         "nome" => "Machine Learning",
//         "imagem" => "./img/undraw_google_analytics_a57d.svg",
//         "descricao" => "Tome decisões de acordo com previsão acertada dos dados"
//     ]
// ];

// function listarServicos()
// {
//     global $servicos;

//     foreach ($servicos as $index => $servico) {
//         echo "<div class='col-md-4 mt-4'>
//             <div class='card'>
//                 <img class='card-img-top p-4' src='$servico[imagem]' alt='Imagem de capa do card'>
//                 <div class='card-body'>
//                     <p class='card-text text-center'><a href='servico.php?id=$index'>$servico[nome]</a></p>
//                 </div>
//             </div>
//         </div>";
//     }
// }


function getNome($id)
{
    global $servicos;
    return $servicos[$id]["nome"];
}
function getDescricao($id)
{
    global $servicos;
    return $servicos[$id]["descricao"];
}
function getImagem($id)
{
    global $servicos;
    return $servicos[$id]["imagem"];
}
if (isset($_POST['cadastrar_servico'])) {
    $arquivoServicos = 'servicos.json';
    $imagemServico = '';
    if ($_FILES) {
        $nome = $_FILES['imagem']['name'];
        $nomeTemp = $_FILES['imagem']['tmp_name'];
        $erro = $_FILES['imagem']['error'];
        $pastaRaiz = dirname(__FILE__);
        $pasta = "servicos/";
        $caminhoCompleto = $pastaRaiz . '/' . $pasta . $nome;
        if ($erro == UPLOAD_ERR_OK) {
            move_uploaded_file($nomeTemp, $caminhoCompleto);
            $imagemServico = $pasta . $nome;
        }
    }
    if (file_exists($arquivoServicos)) {
        $jsonServicos = file_get_contents($arquivoServicos);
        $arrayServicos = json_decode($jsonServicos, true);
        $infoServico = $_POST;
        $infoServico['imagem'] = $imagemServico;
        $arrayServicos['servicos'][] = $infoServico;
        $jsonServicos = json_encode($arrayServicos, true);
        file_put_contents($arquivoServicos, $jsonServicos);
    } else {
        $arquivo = fopen($arquivoServicos, 'w'); // abre ou cria o arquivo
        $arrayServicos = ["servicos" => []]; // cria array pra guardar serviços
        $infoServico = $_POST; // pega informações do formulario de cadastro
        $infoServico['imagem'] = $imagemServico;
        $arrayServicos["servicos"][] = $infoServico; // adiciona o novo serviço na lista
        $jsonServicos = json_encode($arrayServicos, true); // converte array para json
        file_put_contents($arquivoServicos, $jsonServicos); // adiciona info no arquivo
    }
}
function listarServicos()
{
    // trazer serviços do json
    $arquivoJson = 'servicos.json';
    $servicos = [];
    if (file_exists($arquivoJson)) {
        $jsonServicos = file_get_contents($arquivoJson); // conteudo arquivo
        $arrayServicos = json_decode($jsonServicos, true); // json para array
        $servicos = $arrayServicos['servicos'];
    }
    return $servicos;
}
if (isset($_POST['login'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    if ($email == "" || $senha == "") {
        $erro = "Preencha os campos corretamente";
    } else {
        //acesso permitido
        unset($erro);
        $_SESSION['logado'] = true;
        if (isset($_POST['manter_logado'])) {
            setcookie("email", $email, time() + 3600, '/');
            setcookie("senha", $senha, time() + 3600, '/');
        }
        header('Location: index.php');
    }
}
if (isset($_GET['logout'])) {
    // deslogar
    session_destroy();
}
//para exibir informações no excluir_servico.php
if (isset($_GET['excluir_id'])) {
    $id_servico = $_GET['excluir_id']; // id recebido na URL
    $arquivoJson = 'servicos.json'; // arquivo de serviços
    $servico = [];
    if (file_exists($arquivoJson)) {
        $jsonServicos = file_get_contents($arquivoJson); // conteudo arquivo
        $arrayServicos = json_decode($jsonServicos, true); // json para array
        $servico = $arrayServicos['servicos'][$id_servico]; // retorna um serviço especifico pelo ID
    }
}
//para exibir informações no editar_servico.php
if (isset($_GET['editar_id'])) {
    $id_servico = $_GET['editar_id']; // id recebido na URL
    $arquivoJson = 'servicos.json'; // arquivo de serviços
    $servico = [];
    if (file_exists($arquivoJson)) {
        $jsonServicos = file_get_contents($arquivoJson); // conteudo arquivo
        $arrayServicos = json_decode($jsonServicos, true); // json para array
        $servico = $arrayServicos['servicos'][$id_servico]; // retorna um serviço especifico pelo ID
    }
    // var_dump($servico);
}
// envio do form de editar
if (isset($_POST['editar_servico'])) {
    $arquivoServicos = 'servicos.json';
    $id = $_POST['id']; // pega id do serviço que quer editar
    $imagemServico = '';
    if ($_FILES) { // verificar se algum arquivo foi enviado
        $nome = $_FILES['imagem']['name']; //nome do arquivo
        $nomeTemp = $_FILES['imagem']['tmp_name']; // local temporario do arquivo
        $erro = $_FILES['imagem']['error']; // lista de erros no upload
        $pastaRaiz = dirname(__FILE__); // traz caminho da pasta do projeto
        $pasta = "servicos/";
        $caminhoCompleto = $pastaRaiz . '/' . $pasta . $nome; // cria caminho completo da imagem
        if ($erro == UPLOAD_ERR_OK) {
            move_uploaded_file($nomeTemp, $caminhoCompleto); // move aqruivo do local temporario para pasta /servicos
            $imagemServico = $pasta . $nome;
        }
    }
    if (file_exists($arquivoServicos)) {
        $jsonServicos = file_get_contents($arquivoServicos);
        $arrayServicos = json_decode($jsonServicos, true);
        $infoServico = $_POST;
        if ($imagemServico != "") { 
            $infoServico['imagem'] = $imagemServico;
        } else { // se não tiver nova imagem mantem a antiga
            $infoServico['imagem'] = $arrayServicos['servicos'][$id]['imagem'];
        }
        $arrayServicos['servicos'][$id] = $infoServico; // insere nova informação na posição do serviço escolhido
        $jsonServicos = json_encode($arrayServicos, true); // passa array para json
        file_put_contents($arquivoServicos, $jsonServicos); // atualiza arquivo
        header('Location: admin.php'); // redireciona para admin
    } else {
        echo "Arquivo não encontrado!";
    }
}
if (isset($_POST['excluir_servico'])) {
    $arquivoServicos = "servicos.json";
    $jsonServicos = file_get_contents($arquivoServicos);
    $arrayServicos = json_decode($jsonServicos, true);
    $id = $_POST['id']; // traz id do serviço a ser excluido
    unset($arrayServicos['servicos'][$id]); // remove a posição do array
    $arrayServicos['servicos'] = array_values($arrayServicos['servicos']); // reordena array
    $jsonServicos = json_encode($arrayServicos, true); // passa array para json
    file_put_contents($arquivoServicos, $jsonServicos); // atualiza o arquivo
    header('Location: admin.php');  // redireciona para admin
}

