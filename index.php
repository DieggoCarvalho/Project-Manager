<?php $nomeTela = "Project Manager"; include 'layout/template.php'; //Incluir Layout ?>
<?php require 'assets/php/create.php'; //Incluir Layout ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php HeadMig(); //Incluir metadados ?>
</head>
<body>

   <?php HeaderMig(); //Incluir Cabeçalho?>
    <main>
     <?php // echo $_SERVER["REQUEST_URI"]; ?>
        <div class="container_main">
            <span class="alert"> <?php if (isset($_COOKIE['alerta'])) { echo $_COOKIE['alerta']; setcookie("alerta", "", time()-5); }; ?> </span>
            <h1 class="h1_tittle">My Projects</h1>
            <section class="menu-edit">
                <button onclick="nshow(1)" class="btn_add" ><i class="fas fa-plus"></i> Cadastrar</button>
            </section>
        </div>
    </main>
    <?php FooterMig(); //Incluir Rodapé ?>
    <!-- CUSTOM DIALOG BOX: startConfirm -->
    <div id="confirm" class="popwrap">
        <div id="popbox" class="header-confirm">
            <div class="pop-header">
                <!-- <div class="pop-icon icon-confirm"><i class="fas fa-plus"></i> </div> -->
                <h1 id="poptitle">Cadastrar Projeto</h1>
            </div>
            <div class="pop-body">
                <form action="" method="post" autocomplete = "on" target="_self"  name="cadProjeto" accept-charset="utf-8" id="cadProjeto">
                    <fieldset>
                        <!-- <legend>Cadastro de Projeto</legend> -->
                        <label for="nome">Nome do Projeto</label>
                        <input type="text" name="nomeProjeto" id="nome" required placeholder="Insira o nome do projeto..." autofocus autocomplete="on">
                        <span class="erro"> <?php if (isset($_COOKIE['erro'])) { echo $_COOKIE['erro']; unset($_COOKIE['erro']); };?> </span>
                    </fieldset>
                </form>
                <!-- <p id="poptext">Você deseja confirmar as alterações realizadas?</p> -->
            </div>
            <div class="pop-footer flex jfy-ctt">
                <div class="btn_cancel-line pos-db f-1" onclick="nhide(1)">Cancelar</div>
                <input class="btn_add pos-db f-2" onclick="hide()" type="submit" value="Cadastrar" form="cadProjeto">
            </div>
        </div>
    </div>
    <!-- CUSTOM DIALOG BOX: endConfirm -->

</body>
</html>