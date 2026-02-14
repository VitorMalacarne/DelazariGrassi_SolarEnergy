<header class="topbar">
    <div class="title-block">
        <h2>Gestao de Sistemas Fotovoltaicos</h2>
        <p>Cadastro tecnico de paineis, inversores e caracteristicas da instalacao.</p>
    </div>
</header>

<section class="grid-2">
    <article class="card">
        <h3>Cadastro Tecnico</h3>
        <form class="form-grid">
            <div class="field">
                <label>Cliente</label>
                <input type="text" placeholder="Selecionar cliente">
            </div>
            <div class="field">
                <label>Tipo Sistema</label>
                <select>
                    <option>On-Grid</option>
                    <option>Off-Grid</option>
                    <option>BESS</option>
                </select>
            </div>
            <div class="field">
                <label>Tipo Instalacao</label>
                <select>
                    <option>Residencial</option>
                    <option>Comercial</option>
                    <option>Industrial</option>
                </select>
            </div>
            <div class="field">
                <label>Distribuidora</label>
                <input type="text" placeholder="Ex: EDP, ENEL, CEMIG">
            </div>
            <div class="field">
                <label>Qtd Paineis</label>
                <input type="text" placeholder="Ex: 24">
            </div>
            <div class="field">
                <label>Potencia Painel (W)</label>
                <input type="text" placeholder="Ex: 550">
            </div>
            <div class="field">
                <label>Qtd Inversores</label>
                <input type="text" placeholder="Ex: 2">
            </div>
            <div class="field">
                <label>Potencia Inversor (kW)</label>
                <input type="text" placeholder="Ex: 25">
            </div>
            <div class="field">
                <label>Area Ocupada (m2)</label>
                <input type="text" placeholder="Ex: 70">
            </div>
            <div class="field">
                <label>Data Instalacao</label>
                <input type="date">
            </div>
        </form>
        <div class="btn-row">
            <button class="btn btn-primary" type="button">Salvar sistema</button>
        </div>
    </article>

    <article class="card">
        <h3>Lista de Sistemas</h3>
        <div class="table-scroll">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Tipo</th>
                    <th>Potencia</th>
                    <th>Data</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>SIS-0412</td>
                    <td>Atlantico Granitos</td>
                    <td>On-Grid</td>
                    <td>112.5 kWp</td>
                    <td>10/02/2026</td>
                </tr>
                <tr>
                    <td>SIS-0409</td>
                    <td>Orion Foods</td>
                    <td>BESS</td>
                    <td>56.0 kWp</td>
                    <td>28/01/2026</td>
                </tr>
                </tbody>
            </table>
        </div>
    </article>
</section>
