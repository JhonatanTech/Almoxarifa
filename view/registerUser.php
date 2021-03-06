<?php include '../template/header.html';
include '../template/menu.html'; ?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Cadastro de usuário</h1>

        <form class="col s12 ">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="nome" type="text" class="validate">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s6">
                    <input id="sobrenome" type="text" class="validate">
                    <label for="sobrenome">Sobrenome</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">groups</i>
                    <select id="setor">
                        <option value="" disabled selected class="teste">Selecione o setor</option>
                        <option value="1">Limpeza</option>
                        <option value="2">Direção</option>
                        <option value="3">Sala de aula</option>
                    </select>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">work</i>
                    <input id="funcao" type="text" class="validate">
                    <label for="funcao">Função</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">supervisor_account</i>
                    <select id="acesso">
                        <option value="" disabled selected>Tipo de acesso</option>
                        <option value="1">Requisitante</option>
                        <option value="2">Almoxarife</option>
                        <option value="3">Administrador</option>
                    </select>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">person</i>
                    <input id="cpf" type="text" class="validate">
                    <label for="cpf">CPF</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="contato" type="text" class="validate">
                    <label for="contato">Contato</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">lock</i>
                    <input id="password" type="password" class="validate">
                    <label for="password">Senha</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">lock</i>
                    <input id="password2" type="password" class="validate">
                    <label for="password2">Confirme a senha</label>
                </div>
                <div class="input-field col s12 center">
                    <button type="submit" class="waves-effect waves-light btn-large pink">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include '../template/footer.html'; ?>