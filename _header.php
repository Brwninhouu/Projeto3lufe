<?php

// define o <title> da página
if ($T['pageTitle'] == ''){
$TITLE = "{$T['siteName']} - {$T['siteSlogan']}";
}
else {
$TITLE = "{$T['siteName']} - {$T['pageTitle']}";
}

//define as folhas de estilo da pagina 
if ($T['pageCSS'] == ''){
//se não definiu o css
$CSS = '';
}
// se definiu o css
else {
$CSS = "<link rel=\"stylesheet\" href=\"{$T['pageCSS']}\">";
}

//define o javascript da pagina
if($T['pageJS'] == ''){
$JS = '';
}
else {
    $JS = "<script src=\"{$T['pageJS']}\"></script>";
}
?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/global.css">
    <?php echo $CSS ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo $T['favIcon']?>">
    <title><?php echo $TITLE ?></title>
</head>

<body>

    <!-- Âncora para início da página -->
    <a id="top" name="top"></a>

    <!-- Enquadramento da página -->
    <div class="wrap">

        <header>
            <a href="/" title="<?php echo $T['siteName'];?> - Página inicial"></a>
            <h1><?php echo $T['siteName'];?><small><?php echo $T['siteSlogan'];?></small></h1>
        </header>

        <nav>
            <a href="/index.php" title="Página inicial"><i class="fas fa-fw fa-home"></i><span>Início</span></a>
            <a href="/news.php" title="Notícias atualizadas"><i class="fas fa-fw fa-newspaper"></i><span>Notícias</span></a>
            <a href="/contacts.php" title="Faça contato conosco"><i class="fas fa-fw fa-mail-bulk"></i><span>Contatos</span></a>
            <a href="/about.php" title="Sobre o Sitename"><i class="fas fa-fw fa-info-circle"></i><span>Sobre</span></a>
        </nav>

        <main>
