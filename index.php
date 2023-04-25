<?php $nomeTela = "Index | Dev"; include 'assets/layout/template.php'; //Incluir Layout ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php HeadMig(); //Incluir metadados ?>
</head>
<body>

   <?php HeaderMig(); //Incluir Cabeçalho?>
    <main>
    <?php echo $_SERVER["REQUEST_URI"]; ?>
    </main>
    <footer>

    </footer>
</body>
</html>