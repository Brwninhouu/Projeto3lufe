<?php

/**
 * Arquivo de configuração global do site.
 */

/* Conexão com MySQL */
if ($_SERVER['SERVER_NAME'] == 'projeto3.localhost') {

    // Se estou no XAMPP (servidor, usuário, senha e database)
    $conn = new mysqli('localhost', 'root', '', 'intranet');
} else {

    // Se estou no provedor de hospedagem
    $conn = new mysqli('', '', '', '');
}

// Se der erro na conexão
if ($conn->connect_error) {
    die("Falha de conexão: " . $conn->connect_error);
}

/* Configurações adicionais da conexão */

// Transações MySQL em UTF-8
$conn->query("SET NAMES 'utf8'");
$conn->query('SET character_set_connection=utf8');
$conn->query('SET character_set_client=utf8');
$conn->query('SET character_set_results=utf8');

// MySQL com nomes de dias da semana e meses em português
$conn->query("SET GLOBAL lc_time_names=pt_BR");
$conn->query("SET lc_time_names = 'pt_BR'");

/* Inicializa variáveis do tema */
$T = array(
    'siteName' => 'AMBEV',
    'siteSlogan' => 'Maior cervejaria do mundo',
    'fullSiteName' => 'A AMBEV',
    'siteLogo' => '',
    'favIcon' => '/img/ambev.jpg',
    'pageTitle' => '',
    'sideBar' => '/img/uhul.jpg',
    'pageCSS' => '',
    'pageJS' => '',
    'social' => array(
        'facebook' => 'https://facebook.com/ambev',
        'youtube' => 'https://youtube.com/ambev',
        'twitter' => 'https://twitter.com/ambev',
        'instagram' => 'https://instagram.com/ambev'
    )
);
