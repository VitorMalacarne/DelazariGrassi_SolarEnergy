<?php require '../app/views/layouts/header.php'; ?>

<h1>Cliente</h1>

<h3>Dados do Cliente</h3>
<p><strong>Nome:</strong> <?= $customer['CLI_NOME'] ?></p>
<p><strong>CPF/CNPJ:</strong> <?= $customer['CLI_CPF'] ?: $customer['CLI_CNPJ'] ?></p>
<p><strong>Razão Social:</strong> <?= $customer['CLI_RAZAO_SOCIAL'] ?></p>
<p><strong>Distribuidora:</strong> <?= $customer['CLI_DISTRIBUIDORA'] ?></p>

<h3>Endereço</h3>
<p><?= $customer['END_LOGRADOURO'] ?>, <?= $customer['END_NUMERO'] ?></p>
<p><?= $customer['CID_NOME'] ?> – CEP <?= $customer['END_CEP'] ?></p>

<a href="/?controller=system&action=show&customer_id=<?= $customer['CLI_ID'] ?>">
    Ver Sistemas
</a>

<?php require '../app/views/layouts/footer.php'; ?>
