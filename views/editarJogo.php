<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Editar jogo</h3>
            </div>
            <div class="module-body">
                <?php if(!isset($_SESSION['msg']['edit_jogo']) || $_SESSION['msg']['edit_jogo'] == 0): ?>
                    <div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Atenção!</strong> Só altere o que quer mudar.
                    </div>
                <?php $_SESSION['msg']['edit_jogo'] = 0; endif; ?>
                
                <?php if(isset($_SESSION['msg']['edit_jogo']) && $_SESSION['msg']['edit_jogo'] == 1): ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Jogo editado!</strong> Verifique a área de gerenciamento para maiores detalhes
                    </div>
                <?php $_SESSION['msg']['edit_jogo'] = 0; endif; ?>

                <?php if(isset($_SESSION['msg']['edit_jogo']) && $_SESSION['msg']['edit_jogo'] == 2): ?>
                    <div class="alert alert-error">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Error!</strong> Algo deu errado!
                    </div>
                <?php $_SESSION['msg']['edit_jogo'] = 0; endif; ?>

                    <br />

                    <form class="form-horizontal row-fluid" action="/acoes/editarJogo" method="POST">
                        
                        <!-- Nome jogo -->
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Nome do jogo</label>
                            <div class="controls">
                                <input type="text" name="nome_jogo" id="basicinput" value="<?php $_SESSION['POST']['nome_jogo'] = $dadosjogo['nome_jogo'];echo $_SESSION['POST']['nome_jogo']?>" class="span8" disabled>
                            </div>
                        </div>

                        <!-- Data inicio -->
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Data Inicio</label>
                            <div class="controls">
                                <input type="text" name="data_inicio" id="basicinput" value="<?php echo $dadosjogo['data_inicio']?>" class="span8 dateform" required>
                                <span class="help-inline">Somente números</span>
                            </div>
                        </div>

                        <!-- Data de FIM -->
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Data Fim</label>
                            <div class="controls">
                            <input type="text" name="data_fim" id="basicinput" value="<?php echo $dadosjogo['data_fim']?>" class="span8 dateform" required>
                                <span class="help-inline">Somente números</span>
                            </div>
                        </div>

                        <!-- Tipo de Jogo DROPDOWN -->
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Tipo de Jogo</label>
                            <div class="controls">
                                <input type="text" name="tipo_jogo" id="basicinput" value="<?php echo $dadosjogo['tipo_jogo']?>" class="span8">    
                            </div>
                        </div>

                        <!-- Valor mínimo palpite -->
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Valor mínimo de palpite</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="add-on">R$ </span><input class="span8 moneyform" name="valor_minimo" type="text" value="<?php echo $dadosjogo['valor_minimo']?>" required>       
                                </div>
                            </div>
                        </div>

                        <!-- Palpites separados por virgula -->
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Palpites disponíves</label>
                            <div class="controls">
                                <input type="text" class="span8" rows="5" name="palpites_disponiveis" value="<?php echo $dadosjogo['palpites_disponiveis']?>" required></textarea>
                                <span class="help-inline">Separe por virgulas sem espaços Ex.: Cachorro,Gato,Avestruz,Touro</span>
                            </div>
                        </div>

                        <!-- Botao submit  -->
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-warning">Editar jogo</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div><!--/.content-->
</div><!--/.span9-->
