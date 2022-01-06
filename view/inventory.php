<?php include '../template/header.html';
include '../template/menu.html'; ?>

<div class="container">
    <div class="row">
        <div class="row">
            <h2 class="center-align">Estoque</h2>
        </div>

        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s3">
                        <i class="material-icons prefix">search</i>
                        <input id="search" type="text" class="validate">
                        <label for="search">Pesquisar</label>
                    </div>
                    <div class="input-field col s3">
                        <i class="material-icons prefix">toc</i>
                        <select>
                            <option value="" disabled selected>Local de armazenamento</option>
                            <option value="1">Biblioteca</option>
                            <option value="2">Armazen</option>
                            <option value="3">Cozinha</option>
                        </select>
                    </div>
                    <div class="input-field col s3">
                        <i class="material-icons prefix">toc</i>
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
        </div>


        <div class="row">
            <table class="centered responsive-table">
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Material</th>
                        <th>Marca</th>
                        <th>Local</th>
                        <th>Categoria</th>
                        <th>Quantidade</th>
                        <th>Validade</th>
                        <th>Observação</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><img height="100" class="materialboxed" src="https://a-static.mlcdn.com.br/1500x1500/tesoura-escolar-plus-13cm-ponta-arredondada-cores-sortidas-leonora/castronaves/11613/ab93a700958bf19206458c4884c49939.jpg"></td>
                        <td>Tesoura</td>
                        <td>Bic</td>
                        <td>Tesouraria</td>
                        <td>Escolar</td>
                        <td>50</td>
                        <td>12/12/2021</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, modi animi exercitationem eligendi in dolorum?</td>
                        <td>
                            <a class="btn-floating waves-effect waves-light cyan hoverable"><i class="material-icons">edit</i></a>
                            <a class="btn-floating waves-effect waves-light red hoverable"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img height="100" class="materialboxed" src="https://www.rebalcomercial.com.br/fotos/extragrande/175fe1/tesoura-7-polegadas-19-5-cm-color-tramontina-trm-060.jpg"></td>
                        <td>Tesoura</td>
                        <td>Bic</td>
                        <td>Tesouraria</td>
                        <td>Escolar</td>
                        <td>50</td>
                        <td>12/12/2021</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non vel unde praesentium, quisquam voluptatibus reiciendis accusantium dolorum doloribus commodi nostrum perspiciatis corrupti beatae iste autem hic voluptas porro totam.</td>
                        <td>
                            <a class="btn-floating waves-effect waves-light cyan hoverable"><i class="material-icons">edit</i></a>
                            <a class="btn-floating waves-effect waves-light red hoverable"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img height="100" class="materialboxed" src="https://static3.tcdn.com.br/img/img_prod/159791/tesoura_profissional_para_corte_de_cabelo_7_polegadas_fio_laser_1799_1_20181210111928.jpg"></td>
                        <td>Tesoura</td>
                        <td>Bic</td>
                        <td>Tesouraria</td>
                        <td>Escolar</td>
                        <td>50</td>
                        <td>12/12/2021</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non vel unde praesentium, quisquam voluptatibus reiciendis accusantium dolorum doloribus commodi nostrum perspiciatis corrupti beatae iste autem hic voluptas porro totam.</td>
                        <td>
                            <a class="btn-floating waves-effect waves-light cyan hoverable"><i class="material-icons">edit</i></a>
                            <a class="btn-floating waves-effect waves-light red hoverable"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img height="100" class="materialboxed" src="https://cdn.awsli.com.br/600x450/765/765263/produto/43378921/9d3d4eeb30.jpg"></td>
                        <td>Tesoura</td>
                        <td>Bic</td>
                        <td>Tesouraria</td>
                        <td>Escolar</td>
                        <td>50</td>
                        <td>12/12/2021</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non vel unde praesentium</td>
                        <td>
                            <a class="btn-floating waves-effect waves-light cyan hoverable"><i class="material-icons">edit</i></a>
                            <a class="btn-floating waves-effect waves-light red hoverable"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include '../template/footer.html'; ?>