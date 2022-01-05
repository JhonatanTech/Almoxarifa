<?php include '../template/header.html';
include '../template/menu.html'; ?>

<div class="container">
    <div class="row">
        <div class="row">
            <h2 class="center-align">Cadastrar material</h2>
        </div>

        <div class="row">
            <form class="col s12 ">
                <div class="row">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>File</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Selecione uma imagem para este produto">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">title</i>
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Material</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">store</i>
                        <input id="last_name" type="number" class="validate">
                        <label for="last_name">Marca</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">toc</i>
                        <select>
                            <option value="" disabled selected>Selecione o local de armazenamento</option>
                            <option value="1">Biblioteca</option>
                            <option value="2">Armazen</option>
                            <option value="3">Cozinha</option>
                        </select>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">toc</i>
                        <select>
                            <option value="" disabled selected>Selecione a categoria</option>
                            <option value="1">Limpeza</option>
                            <option value="2">Direção</option>
                            <option value="3">Sala de aula</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">pin</i>
                        <input id="last_name" type="number" class="validate">
                        <label for="last_name">Quantidade</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">event</i>
                        <input type="text" class="datepicker">
                        <label for="last_name">Validade</label>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">edit</i>
                            <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
                            <label for="textarea2">Observação</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 center">
                        <button type="submit" class="waves-effect waves-light btn-large pink">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../template/footer.html'; ?>