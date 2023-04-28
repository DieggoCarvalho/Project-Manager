<?php
// Módulo do criarProjeto

// define variables and set to empty values
$nome = $erroNome = $alertNome = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["nomeProjeto"])) {
        /* MSG DE ERRO */
        $erroNome = "Informe o nome do projeto.";
        setcookie("erro", $erroNome, time()+5);
        header("Location: index.php");
    } else {
        /* Else - Criação do Projeto */
        $nome = test_input($_POST["nomeProjeto"]);
        $nome_projeto = $nome;
        $nome = "../" .$nome. "/";
        $local = $nome. "/";
        $pcss = $nome. "assets/css/";
        $pfont = $nome. "assets/font/";
        $pimg = $nome. "assets/img/";
        $pjs = $nome. "assets/js/";
        $play = $nome. "layout/";
        $pdb = $nome. "database/";
        $pauth = $nome. "auth/";

        /* CRIANDO ARRAY DE PASTAS */
        $pastas = array($nome, $pcss, $pfont, $pimg, $pjs, $play, $pdb, $pauth);
        /* CRIAR PASTAS */
        foreach ($pastas as $pasta) {
            criar_pasta($pasta);
        }

        /* CRIAR ARQUIVOS */
            fopen($nome. "index.php", "w") or die ("Não foi possível criar o arquivo index.php");
            fopen($nome. "assets/css/style.css", "w") or die ("Não foi possível criar o arquivo style.css");
            fopen($nome. "assets/css/normalize.css", "w") or die ("Não foi possível criar o arquivo normalize.css");
            fopen($nome. "assets/js/script.js", "w") or die ("Não foi possível criar o arquivo script.js");
            fopen($nome. "layout/template.php", "w") or die ("Não foi possível criar o arquivo template.php");
            fopen($nome. "database/conection.php", "w") or die ("Não foi possível criar o arquivo conection.php");
            fopen($nome. "auth/index.php", "w") or die ("Não foi possível criar o arquivo auth/index.php");
            fopen($nome. "auth/logout.php", "w") or die ("Não foi possível criar o arquivo /auth/logout.php");
            fopen($nome. "auth/signup.php", "w") or die ("Não foi possível criar o arquivo /auth/signup.php");
            fopen($nome. "auth/check_signup.php", "w") or die ("Não foi possível criar o arquivo /auth/check_signup.php");
            
            /* ADICIONAR CONTEÚDO AOS ARQUIVOS */
            $template = $nome. "layout/template.php";
            $img = $nome. "assets/img/";
            $js = $nome. "assets/js/";
            $css = $nome. "assets/css/style.css";
            $normalize = $nome. "assets/css/normalize.css";
            $index = $nome. "index.php";
            $db = $nome. "database/conection.php";
            copy("file_base/template.txt",  $template);
            copy("file_base/favicon.png",  $img."favicon.png");
            copy("file_base/fontawesome.txt",  $js."fontawesome.js");
            copy("file_base/script.txt",  $js."script.js");
            copy("file_base/style.txt",  $css);
            copy("file_base/normalize.txt",  $normalize);
            copy("file_base/index.txt",  $index);
            copy("file_base/conection.txt",  $db);

            // CRIANDO ARRAY DE ARQUIVOS 
            $arquivos = array($template, $index);
            // TROCAR MALAS
            foreach ($arquivos as $arquivo) {
                trocar_malas($arquivo, "dPROJETOb", $nome_projeto);
            };

            /* MSG DE SUCESSO */
            $alertNome = "Projeto " .$nome_projeto. " criado com sucesso!";
            setcookie("alerta", $alertNome, time()+5);
            header("Location: index.php");


// SALVAR NO ARQUIVO O PROJETO
            // Recuperar dados do formulário para inserir no arquivo json.
            $descricao = $_POST["descProjeto"];
            // Criar Aruqivo Json se não existir ainda;
            $arquivo = "database/dados.json";
            $dados = fopen($arquivo, "a+"); //talvez não seja necessário

            // Lê os dados já cadastrados do arquivo
            $dados_json = file_get_contents($arquivo);
            $projetos = json_decode($dados_json, true);

            // Adiciona o novo projeto aos dados existentes
            // $novo_projeto = array("nome" => $nome_projeto, "descricao" => $descricao);
            $novo_projeto=["nome" => $nome_projeto, "descricao" => $descricao]; // w3schools dica https://www.w3schools.com/php/func_array.asp
            $projetos[] = $novo_projeto;
            /* 
            PHP automaticamente atribui uma nova chave numérica ao projeto adicionado, 
            correspondente à última posição do array. Dessa forma, o 
            novo projeto é adicionado ao final do array sem apagar os dados já existentes.
            */

            // Salva os dados atualizados no arquivo
            $dados_json = json_encode($projetos);
            file_put_contents($arquivo, $dados_json);
            // Exibe uma mensagem de confirmação
            // echo "Projeto salvo com sucesso!";
    }
    /* endElse - Criação do Projeto */
    
}

// FUNÇÕES
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function criar_pasta($pasta) {
    if (!file_exists($pasta)) {
        mkdir($pasta, 0222, true);
    }
}

function trocar_malas($arquivo, $mala, $valor) {
    $str = file_get_contents($arquivo);
    $str = str_replace($mala, $valor, $str);
    file_put_contents($arquivo, $str);
}


?>