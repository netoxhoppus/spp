<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Produto</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilo-produto.css">
    </head>
    <body background="img/sapatos2.jpg">

        <div class="container">

            <form class="form-horizontal" action="../Class/produto.controller.php?acao=inserir" method="post" >
                <fieldset>
                    <div class="panel panel-primary">
                        </br>
                        <div class="panel-heading btn-primary"><h2>Cadastro de Produto - SPP</h2>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">

                                <div class="col-md-15 control-label">
                                    <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="nome">Descrição do Produto </label>
                                    <input id="nome" name="descricao" placeholder="Digite o Nome do Calçado" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="numeracao">Numeração <h11>*</h11></label>
                                    <select id="numeracao" name="numeracao" class="form-control" required="" >
                                        <option selected>Escolher...</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cor">Cor <h11>*</h11></label>
                                    <select id="cor" name="cor" class="form-control">
                                        <option selected>Escolher...</option>
                                        <option>Amarelo</option>
                                        <option>Azul</option>
                                        <option>Azul Marinho</option>
                                        <option>Bege</option>
                                        <option>Bordô</option>
                                        <option>Branco</option>
                                        <option>Bronze</option>
                                        <option>Café</option>
                                        <option>Caramelo</option>
                                        <option>Castanho</option>
                                        <option>Cinza</option>
                                        <option>Dourado</option>
                                        <option>Laranja</option>
                                        <option>Marrom</option>
                                        <option>Nude</option>
                                        <option>Preto</option>
                                        <option>Rosa</option>
                                        <option>Roxo</option>
                                        <option>Verde</option>
                                        <option>Vermelho</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="radios">Gênero </label>
                                    </br>
                                    <label class="radio-inline" for="radios-0" >
                                        <input name="genero" id="sexo" value="F" type="radio">
                                        Feminino
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input name="genero" id="sexo" value="M" type="radio">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="marca">Marca <h11>*</h11></label>
                                    <select id="marca" name="marca" class="form-control">
                                        <option selected>Escolher...</option>
                                        <option>Adora</option>
                                        <option>Ana Flex</option>
                                        <option>Avenue</option>
                                        <option>ASA Shoes</option>
                                        <option>Bettarello</option>
                                        <option>Beira Rio</option>
                                        <option>Bendito Conforto</option>
                                        <option>Calvest</option>
                                        <option>Cavalera</option>
                                        <option>Democrata</option>
                                        <option>Di Valentini</option>
                                        <option>Doctor Pé</option>
                                        <option>Ferucci</option>
                                        <option>Lacouro</option>
                                        <option>Lisbella</option>
                                        <option>Mariotta</option>
                                        <option>Moleca</option>
                                        <option>Petite Jolie</option>
                                        <option>Stefanello</option>
                                        <option>Terradine</option>
                                        <option>Toretto</option>
                                        <option>Viccini</option>
                                        <option>Vizzano</option>
                                        <option>Via Marte</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="valorunit">Valor unitário <h11>*</h11></label>
                                    <input id="valorunit" name="valorUnitario" class="form-control" required="" placeholder="R$ " type="text" maxlength="15" OnKeyPress="formatar('## ###,###,##', this)">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="saldoprod">Saldo do produto</label>
                                    <input id="saldoprod" name="saldoProduto" class="form-control" type="text">
                                </div>
                            </div>
                            </br>

                            <div class="text-center">
                                <label for="Cadastrar"></label>
                                <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="submit">Cadastrar</button>
                                <button id="Buscar" name="Buscar" class="btn btn-inverse">Buscar</button>
                                <button id="Alterar" name="Alterar" class="btn btn-warning">Alterar</button>
                                <button id="Excluir" name="Excluir" class="btn btn-danger" type="Reset">Excluir</button>
                            </div>
                            </fieldset>
                            </form>
                        </div>

                        <!-- mostrar tabela -->
                        <div class="tabelaProdutos">

                            <table class="table table-dark">

                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Descrição</th>
                                        <th scope="col">Numeração</th>
                                        <th scope="col">Gênero</th>
                                        <th scope="col">Cor</th>
                                        <th scope="col">Marca</th>
                                        <th scope="col">Valor Unit</th>
                                        <th scope="col">Saldo</th>
                                        <th scope="col">Data Cadastro</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include_once '../Class/conexao.php';
                                    include_once '../Class/produto.model.php';
                                    include_once '../Class/produto.service.php';
                                    $conn = new Conexao();
                                    $ps = new ProdutoService($conn);
                              

                                    $sttm = $conn->prepare("SELECT * FROM produto");
       


                                    try {
                                        $sttm->execute();
                                    } catch (PDOException $exc) {
                                        echo $exc->getTraceAsString();
                                    }

                                    while ($linha->fetch(PDO::FETCH_OBJ)) {
                                   
                                        echo "<tr>    
                                                       <th scope=\"row\">". $linha->idproduto . "</th> 
                                                                    <td>" . $linha->descricao . "</td>
                                                                    <td>" . $linha->numeracao . "</td>
                                                                    <td>" . $linha->genero . "</td>
                                                                    <td>" . $linha->cor . "</td>
                                                                    <td>" . $linha->marca . "</td>
                                                                    <td>" . $linha->valorUnitario . "</td>
                                                                    <td>" . $linha->saldoProduto . "</td>
                                                                    <td>" . $linha->dataCadastro . "</td>
                                             </tr>";
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <script src="js/bootstrap.min.js"></script>
                        <script src="js/estilo-produto.js"></script>

                        </body>
                        </html>


