<?php require '../app/views/layouts/header.php'; ?>

<h1>Clientes</h1>

<form method="get">
    <input type="hidden" name="controller" value="customer">
    <input type="text" name="name" placeholder="Nome do cliente">
    <button type="submit">Buscar</button>
</form>

<table>
    <tr>
        <th>Nome</th>
        <th>CPF/CNPJ</th>
        <th>Distribuidora</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($customers as $c): ?>
        <tr>
            <td><?= htmlspecialchars($c['CLI_NOME']) ?></td>
            <td><?= $c['CLI_CPF'] ?: $c['CLI_CNPJ'] ?></td>
            <td><?= $c['CLI_DISTRIBUIDORA'] ?></td>
            <td>
                <a href="/?controller=customer&action=show&id=<?= $c['CLI_ID'] ?>">Ver</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require '../app/views/layouts/footer.php'; ?>
