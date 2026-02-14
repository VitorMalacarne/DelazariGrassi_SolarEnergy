<header class="topbar">
    <div class="title-block">
        <h2>Gestao de Usuarios</h2>
        <p>Controle de acesso por perfil interno e status da conta.</p>
    </div>
</header>

<section class="grid-2">
    <article class="card">
        <h3>Novo Usuario</h3>
        <form class="form-grid">
            <div class="field">
                <label>Nome</label>
                <input type="text" placeholder="Nome completo">
            </div>
            <div class="field">
                <label>E-mail</label>
                <input type="email" placeholder="usuario@empresa.com.br">
            </div>
            <div class="field">
                <label>Senha</label>
                <input type="password" placeholder="********">
            </div>
            <div class="field">
                <label>Perfil</label>
                <select>
                    <option>Administrador</option>
                    <option>Tecnico</option>
                    <option>Suporte</option>
                    <option>Comercial</option>
                    <option>Financeiro</option>
                </select>
            </div>
            <div class="field">
                <label>Status</label>
                <select>
                    <option>Ativo</option>
                    <option>Inativo</option>
                </select>
            </div>
        </form>
        <div class="btn-row">
            <button class="btn btn-primary" type="button">Salvar usuario</button>
        </div>
    </article>

    <article class="card">
        <h3>Usuarios Cadastrados</h3>
        <div class="table-scroll">
            <table>
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Perfil</th>
                    <th>E-mail</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Marcos Tavares</td>
                    <td>Administrador</td>
                    <td>marcos.tavares@solarflow.com.br</td>
                    <td><span class="badge badge-ok">Ativo</span></td>
                </tr>
                <tr>
                    <td>Diego Lima</td>
                    <td>Tecnico</td>
                    <td>diego.lima@solarflow.com.br</td>
                    <td><span class="badge badge-off">Inativo</span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </article>
</section>
