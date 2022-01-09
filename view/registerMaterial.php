<?php include '../template/header.html';
include '../template/menu.html'; ?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Cadastrar material</h1>

        <form class="col s12 ">
            <div class="row">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Imagem</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Selecione uma imagem para este produto">
                    </div>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">title</i>
                    <input id="material" type="text" class="validate">
                    <label for="material">Material</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">store</i>
                    <input id="marca" type="text" class="validate">
                    <label for="marca">Marca</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">place</i>
                    <select>
                        <option value="" disabled selected>Selecione o local de armazenamento</option>
                        <option value="1">Biblioteca</option>
                        <option value="2">Armazen</option>
                        <option value="3">Cozinha</option>
                    </select>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">category</i>
                    <select>
                        <option value="" disabled selected>Selecione a categoria</option>
                        <option value="1">Limpeza</option>
                        <option value="2">Direção</option>
                        <option value="3">Sala de aula</option>
                    </select>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">pin</i>
                    <input id="qty" type="text" class="validate">
                    <label for="qty">Quantidade</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">event</i>
                    <input type="text" class="datepicker">
                    <label for="data">Validade</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">edit</i>
                    <textarea id="obs" class="materialize-textarea" data-length="120"></textarea>
                    <label for="obs">Observação</label>
                </div>
                <div class="input-field col s12 center">
                    <button type="submit" class="waves-effect waves-light btn-large pink">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include '../template/footer.html'; ?>