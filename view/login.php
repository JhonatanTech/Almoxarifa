<?php include '../template/header.html'; ?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Login</h1>
        
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="email" type="text" class="validate">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="pass" type="password" class="validate">
                        <label for="pass">Senha</label>
                    </div>
                    <div class="input-field col s12 center">
                        <button type="submit" class="waves-effect waves-light btn-large pink">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../template/footer.html'; ?>