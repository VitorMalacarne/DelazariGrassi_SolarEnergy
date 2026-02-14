<header class="topbar">
    <div class="title-block">
        <h2>Gestao Documental</h2>
        <p>Controle de contrato de prestacao de servico e nota fiscal.</p>
    </div>
</header>

<section class="grid-2">
    <article class="card">
        <h3>Novo Registro</h3>
        <form class="form-grid">
            <div class="field">
                <label>Cliente</label>
                <input type="text" placeholder="Selecionar cliente">
            </div>
            <div class="field">
                <label>Sistema</label>
                <input type="text" placeholder="Selecionar sistema">
            </div>
            <div class="field">
                <label>Data Contrato</label>
                <input type="date">
            </div>
            <div class="field">
                <label>Numero Nota Fiscal</label>
                <input type="text" placeholder="NF-000001">
            </div>
        </form>
        <div class="btn-row">
            <button class="btn btn-primary" type="button">Salvar documento</button>
        </div>
    </article>

    <article class="card">
        <h3>Historico</h3>
        <div class="table-scroll">
            <table>
                <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Contrato</th>
                    <th>NF</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Condominio Sol Nascente</td>
                    <td>CONT-2026-084</td>
                    <td>NF-000238</td>
                    <td><span class="badge badge-ok">Completo</span></td>
                </tr>
                <tr>
                    <td>Orion Foods</td>
                    <td>CONT-2026-072</td>
                    <td>-</td>
                    <td><span class="badge badge-warn">Pendente</span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </article>
</section>
