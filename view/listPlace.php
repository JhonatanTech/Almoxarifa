<?php   include '../template/header.html';
        include '../template/menu.html'; ?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Locais</h1>

        <form class="col s12">
            <div class="row">
                <div class="input-field col s3">
                    <i class="material-icons prefix">search</i>
                    <input id="search" type="text" class="validate">
                    <label for="search">Pesquisar</label>
                </div>
            </div>
        </form>

        <table class="centered responsive-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Local</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>001</td>
                    <td>Diretoria</td>
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