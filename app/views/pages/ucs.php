<header class="topbar">
    <div class="title-block">
        <h2>Gestao de Unidades Consumidoras</h2>
        <p>Associacao de multiplas UCs por cliente e sistema.</p>
    </div>
</header>

<section class="grid-2">
    <article class="card">
        <h3>Vincular UC</h3>
        <form class="form-grid">
            <div class="field">
                <label>Codigo UC</label>
                <input type="text" placeholder="Ex: 54879213">
            </div>
            <div class="field">
                <label>Titular UC</label>
                <input type="text" placeholder="Nome do titular">
            </div>
            <div class="field">
                <label>Cliente</label>
                <input type="text" placeholder="Selecionar cliente">
            </div>
            <div class="field">
                <label>Sistema</label>
                <input type="text" placeholder="Selecionar sistema">
            </div>
        </form>
        <div class="btn-row">
            <button class="btn btn-primary" type="button">Vincular UC</button>
        </div>
    </article>

    <article class="card">
        <h3>Ucs Cadastradas</h3>
        <div class="table-scroll">
            <table>
                <thead>
                <tr>
                    <th>UC</th>
                    <th>Cliente</th>
                    <th>Sistema</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>54879213</td>
                    <td>Atlantico Granitos</td>
                    <td>SIS-0412</td>
                    <td><span class="badge badge-ok">Ativa</span></td>
                </tr>
                <tr>
                    <td>99827003</td>
                    <td>Orion Foods</td>
                    <td>SIS-0409</td>
                    <td><span class="badge badge-warn">Revisao</span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </article>
</section>
