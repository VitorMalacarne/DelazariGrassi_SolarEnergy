<header class="topbar">
    <div class="title-block">
        <h2>Gestao de Clientes</h2>
        <p>Cadastro e consulta de dados pessoais, fiscais e de localizacao.</p>
    </div>
</header>

<section class="grid-2">
    <article class="card">
        <h3>Novo Cliente</h3>
        <form class="form-grid">
            <div class="field">
                <label>Nome Completo</label>
                <input type="text" placeholder="Ex: Carlos Ferreira">
            </div>
            <div class="field">
                <label>Razao Social</label>
                <input type="text" placeholder="Ex: Ferreira Agro LTDA">
            </div>
            <div class="field">
                <label>CPF/CNPJ</label>
                <input type="text" placeholder="000.000.000-00">
            </div>
            <div class="field">
                <label>Tipo Pessoa</label>
                <select>
                    <option>Fisica</option>
                    <option>Juridica</option>
                </select>
            </div>
            <div class="field">
                <label>Cidade</label>
                <input type="text" placeholder="Municipio">
            </div>
            <div class="field">
                <label>Area</label>
                <select>
                    <option>Urbana</option>
                    <option>Rural</option>
                </select>
            </div>
        </form>
        <div class="btn-row">
            <button class="btn btn-primary" type="button">Salvar cliente</button>
            <button class="btn btn-secondary" type="button">Limpar</button>
        </div>
    </article>

    <article class="card">
        <h3>Clientes Cadastrados</h3>
        <div class="field">
            <label>Pesquisar</label>
            <input type="text" placeholder="Digite um nome para filtrar...">
        </div>
        <div class="table-scroll">
            <table>
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Documento</th>
                    <th>Cidade</th>
                    <th>Area</th>
                    <th>Sistemas</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Helena Prado</td>
                    <td>024.***.***-20</td>
                    <td>Vila Velha</td>
                    <td>Urbana</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Atlantico Granitos</td>
                    <td>28.***.***/0001-61</td>
                    <td>Cachoeiro</td>
                    <td>Rural</td>
                    <td>3</td>
                </tr>
                </tbody>
            </table>
        </div>
    </article>
</section>
