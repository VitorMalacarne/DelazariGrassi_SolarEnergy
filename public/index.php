<?php
$allowedPages = ['dashboard', 'clientes', 'sistemas', 'ucs', 'documentos', 'usuarios'];
$page = $_GET['page'] ?? 'dashboard';
$page = in_array($page, $allowedPages, true) ? $page : 'dashboard';

$titles = [
    'dashboard' => 'Visao Geral',
    'clientes' => 'Gestao de Clientes',
    'sistemas' => 'Gestao de Sistemas Fotovoltaicos',
    'ucs' => 'Gestao de Unidades Consumidoras',
    'documentos' => 'Gestao Documental',
    'usuarios' => 'Gestao de Usuarios',
];

$pageTitle = $titles[$page];
$viewFile = __DIR__ . '/../app/views/pages/' . $page . '.php';

require __DIR__ . '/../app/views/layouts/header.php';
require $viewFile;
require __DIR__ . '/../app/views/layouts/footer.php';
