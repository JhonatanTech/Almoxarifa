<?php include '../template/header.html';
include '../template/menu.html'; ?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Estoque</h1>

        <form class="col s12">
            <div class="row">
                <div class="input-field col s3">
                    <i class="material-icons prefix">search</i>
                    <input id="search" type="text" class="validate">
                    <label for="search">Pesquisar</label>
                </div>
                <div class="input-field col s3">
                    <i class="material-icons prefix">place</i>
                    <select>
                        <option value="" disabled selected>Local de armazenamento</option>
                        <option value="1">Biblioteca</option>
                        <option value="2">Armazen</option>
                        <option value="3">Cozinha</option>
                    </select>
                </div>
                <div class="input-field col s3">
                    <i class="material-icons prefix">category</i>
                    <select>
                        <option value="" disabled selected>Categoria</option>
                        <option value="1">Limpeza</option>
                        <option value="2">Direção</option>
                        <option value="3">Sala de aula</option>
                    </select>
                </div>
                <div class="input-field col s3">
                    <i class="material-icons prefix">store</i>
                    <select>
                        <option value="" disabled selected>Marca</option>
                        <option value="1">Bic</option>
                        <option value="2">Colgate</option>
                        <option value="3">Jandaia</option>
                    </select>
                </div>
            </div>
        </form>

        <table class="centered responsive-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Imagem</th>
                    <th>Material</th>
                    <th>Marca</th>
                    <th>Local</th>
                    <th>Categoria</th>
                    <th>Quantidade</th>
                    <th>Validade</th>
                    <th>Observação</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>001</td>
                    <td><img class="materialboxed z-depth-1" src="https://a-static.mlcdn.com.br/1500x1500/tesoura-escolar-plus-13cm-ponta-arredondada-cores-sortidas-leonora/castronaves/11613/ab93a700958bf19206458c4884c49939.jpg"></td>
                    <td>Tesoura</td>
                    <td>Bic</td>
                    <td>Tesouraria</td>
                    <td>Escolar</td>
                    <td>50</td>
                    <td>12/12/2021</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, modi animi exercitationem eligendi in dolorum?</td>
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