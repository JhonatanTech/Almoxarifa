<?php include '../template/header.html';
include '../template/menu.html'; ?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Solicitar material</h1>

        <form class="col s12 ">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">place</i>
                    <select>
                        <option value="" disabled selected>Local de armazenamento</option>
                        <option value="1">Biblioteca</option>
                        <option value="2">Armazen</option>
                        <option value="3">Cozinha</option>
                    </select>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">title</i>
                    <select>
                        <option value="" disabled selected>Material</option>
                        <option value="1">Limpeza</option>
                        <option value="2">Direção</option>
                        <option value="3">Sala de aula</option>
                    </select>
                </div>
                <div class="input-field col s2">
                    <i class="material-icons prefix">pin</i>
                    <input id="qty" type="number" class="validate">
                    <label for="qty">Quantidade</label>
                </div>
                <div class="input-field col s10">
                    <i class="material-icons prefix">edit</i>
                    <textarea id="obs" class="materialize-textarea" data-length="120"></textarea>
                    <label for="obs">Observação</label>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <h4>Material</h4>
                <table class="centered responsive-table striped">
                    <tbody>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Imagem</th>
                                <th>Material</th>
                                <th>Marca</th>
                                <th>Local</th>
                                <th>Categoria</th>
                                <th>Quantidade disponível</th>
                                <th>Validade</th>
                                <th>Observação</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>001</td>
                            <td><img class="materialboxed z-depth-1" src="https://a-static.mlcdn.com.br/1500x1500/tesoura-escolar-plus-13cm-ponta-arredondada-cores-sortidas-leonora/castronaves/11613/ab93a700958bf19206458c4884c49939.jpg"></td>
                            <td>Tesoura</td>
                            <td>Bic</td>
                            <td>Tesouraria</td>
                            <td>Escolar</td>
                            <td>50</td>
                            <td>12/12/2021</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="input-field col s12 center">
                    <button type="submit" class="waves-effect waves-light btn-large pink">Solicitar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include '../template/footer.html'; ?>