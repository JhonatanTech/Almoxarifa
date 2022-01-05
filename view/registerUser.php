<?php include '../template/header.html';
include '../template/menu.html'; ?>

<div class="container">
    <div class="row">
        <div class="row">
            <h2 class="center-align">Cadastro de usuário</h2>
        </div>

        <div class="row">
            <form class="col s12 ">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Sobrenome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">work</i>
                        <select>
                            <option value="" disabled selected>Selecione o setor</option>
                            <option value="1">Limpeza</option>
                            <option value="2">Direção</option>
                            <option value="3">Sala de aula</option>
                        </select>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">supervisor_account</i>
                        <select>
                            <option value="" disabled selected>Tipo de acesso</option>
                            <option value="1">Requisitante</option>
                            <option value="2">Administrador</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">person</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">CPF</label>
                        <span class="helper-text" data-error="CPF inválido" data-success="CPF válido"></span>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">add_location</i>
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">CEP</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">phone</i>
                        <input id="email" type="email" class="validate">
                        <label for="email">Contato</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">lock</i>
                        <input id="password" type="password" class="validate">
                        <label for="password">Senha</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">lock</i>
                        <input id="password" type="password" class="validate">
                        <label for="password">Confirme a senha</label>
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