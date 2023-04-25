<?php $nomeTela = "Project Manager"; include 'layout/template.php'; //Incluir Layout ?>
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
            <h1 class="h1_tittle">My Projects</h1>
            <section class="menu-edit">
                <button onclick="nshow(1)" class="btn_add" >Cadastrar</button>
            </section>
        </div>
    </main>
    <footer>

    </footer>
    <!-- CUSTOM DIALOG BOX: startConfirm -->
    <div id="confirm" class="popwrap">
        <div id="popbox" class="header-confirm">
            <div class="pop-header">
                <div class="pop-icon icon-confirm"><i class="fa fa-check"></i> </div>
                <h1 id="poptitle">Cadastrar Projeto</h1>
            </div>
            <div class="pop-body">
                <p id="poptext">Você deseja confirmar as alterações realizadas?</p>
            </div>
            <div class="pop-footer flex jfy-ctt">
                <div class="btn_cancel-line pos-db f-1" onclick="nhide(1)">Cancelar</div>
                <div class="btn_add pos-db f-2" onclick="hide()">Cadastrar</div>
            </div>
        </div>
    </div>
    <!-- CUSTOM DIALOG BOX: endConfirm -->

</body>
</html>