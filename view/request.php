<?php include '../template/header.html';
include '../template/menu.html'; ?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Solicitações</h1>

        <table class="centered responsive-table">
            <thead>
                <tr>
                    <th>Requisitante</th>
                    <th>Material</th>
                    <th>Quantidade</th>
                    <th>Data/Hora</th>
                    <th>Observação</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Ana Clara</td>
                    <td><a class="waves-effect waves-light btn modal-trigger" href="#material">Material</a></td>
                    <td>3</td>
                    <td>12/12/2021 15:32</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, modi animi exercitationem eligendi in dolorum?</td>
                    <td>
                        <a class="btn-floating waves-effect waves-light green hoverable tooltipped" data-position="right" data-tooltip="Aprovar"><i class="material-icons">done</i></a>
                        <a class="btn-floating waves-effect waves-light red hoverable tooltipped" data-position="right" data-tooltip="Recusar"><i class="material-icons">close</i></a>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- modal  -->
        <div id="material" class="modal">
            <div class="modal-content">
                <h4>Material</h4>
                <table class="centered responsive-table">
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
            <div class="modal-footer">
                <a href="#" class="modal-close waves-effect btn-flat grey lighten-2">Fechar</a>
            </div>
        </div>
    </div>
</div>

<?php include '../template/footer.html'; ?>