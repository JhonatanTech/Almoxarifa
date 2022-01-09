<?php include '../template/header.html';
include '../template/menu.html'; ?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Cadastrar local</h1>

        <form class="col s12 ">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">place</i>
                    <input id="material" type="text" class="validate">
                    <label for="material">Nome do local</label>
                </div>
                <div class="input-field col s12 center">
                    <button type="submit" class="waves-effect waves-light btn-large pink">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include '../template/footer.html'; ?>