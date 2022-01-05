<?php include '../template/header.html'; ?>

<div class="container">
    <div class="row">
        <h2 class="center-align">Login</h2>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_name" type="password" class="validate">
                        <label for="last_name">Senha</label>
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