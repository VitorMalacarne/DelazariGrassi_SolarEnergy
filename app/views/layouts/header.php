<?php
$pageTitle = $pageTitle ?? 'SolarFlow';
$page = $page ?? 'dashboard';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle); ?> | SolarFlow</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/<?= htmlspecialchars($page); ?>.css">
</head>
<body class="page-<?= htmlspecialchars($page); ?>">
<div class="app-shell">
    <aside class="sidebar">
        <div class="brand">
            <h1>SolarFlow</h1>
            <p>Prototipo visual de gestao</p>
        </div>
        <nav>
            <a class="nav-link <?= $page === 'dashboard' ? 'active' : ''; ?>" href="?page=dashboard">Dashboard</a>
            <a class="nav-link <?= $page === 'clientes' ? 'active' : ''; ?>" href="?page=clientes">Clientes</a>
            <a class="nav-link <?= $page === 'sistemas' ? 'active' : ''; ?>" href="?page=sistemas">Sistemas FV</a>
            <a class="nav-link <?= $page === 'ucs' ? 'active' : ''; ?>" href="?page=ucs">Unidades Consumidoras</a>
            <a class="nav-link <?= $page === 'documentos' ? 'active' : ''; ?>" href="?page=documentos">Documentos</a>
            <a class="nav-link <?= $page === 'usuarios' ? 'active' : ''; ?>" href="?page=usuarios">Usuarios</a>
        </nav>
    </aside>
    <main class="content">
