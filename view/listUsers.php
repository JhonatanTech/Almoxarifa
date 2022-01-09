<?php include '../template/header.html';
include '../template/menu.html'; ?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Usuários</h1>

        <form class="col s12">
            <div class="row">
                <div class="input-field col s3">
                    <i class="material-icons prefix">search</i>
                    <input id="search" type="text" class="validate">
                    <label for="search">Pesquisar</label>
                </div>
                <div class="input-field col s3">
                    <i class="material-icons prefix">groups</i>
                    <select>
                        <option value="" disabled selected>Setor</option>
                        <option value="1">Marketing</option>
                        <option value="2">Limpeza</option>
                        <option value="3">Almoxarifado</option>
                    </select>
                </div>
                <div class="input-field col s3">
                    <i class="material-icons prefix">supervisor_account</i>
                    <select>
                        <option value="" disabled selected>Acesso</option>
                        <option value="1">Requisitante</option>
                        <option value="2">Almoxarife</option>
                        <option value="3">Administrador</option>
                    </select>
                </div>
            </div>
        </form>

        <table class="centered responsive-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Setor</th>
                    <th>Função</th>
                    <th>Acesso</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Contato</th>
                    <th>Senha</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>001</td>
                    <td><img class="circle materialboxed" src="https://i.pinimg.com/564x/15/6b/83/156b83aa2207d371addc887ec03e28ae.jpg" alt=""></td>
                    <td>Jhonatan</td>
                    <td>Torres</td>
                    <td>Direção</td>
                    <td>Diretor</td>
                    <td>Administrador</td>
                    <td>501.720.719-48</td>
                    <td>jhonatancarvalhotorres12@gmail.com</td>
                    <td>11 94841-0338</td>
                    <td>564tgr654trg654tr546tr</td>
                    <td>
                        <a class="btn-floating waves-effect waves-light cyan hoverable tooltipped" data-position="right" data-tooltip="Editar"><i class="material-icons">edit</i></a>
                        <a class=" btn btn-floating waves-effect waves-light red hoverable tooltipped" data-position="right" data-tooltip="Excluir"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include '../template/footer.html'; ?>