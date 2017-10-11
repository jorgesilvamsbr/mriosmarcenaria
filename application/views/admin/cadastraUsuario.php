<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Cadastro de Usuário</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Cadastro de Usuários</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Informações</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <?php
                        if (isset($_GET['erro'])) {
                            $erro = strip_tags($_GET['erro']);
                            echo '<div class="alert bg-danger" role="alert">';
                            echo "<svg class='glyph stroked cancel'><use xlink:href='#stroked-cancel'></use></svg>" . $erro;
                            echo "</div>";
                        }
                        if (isset($_GET['sucesso'])) {
                            $sucesso = strip_tags($_GET['sucesso']);
                            echo '<div class="alert bg-success" role="alert">';
                            echo "<svg class='glyph stroked cancel'><use xlink:href='#stroked-cancel'></use></svg>" . $sucesso;
                            echo "</div>";
                        }
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php echo form_open(base_url() . 'index.php/cadastraUsuario/inserir'); ?>

                        <div class="form-group">
                            <label>Nome do Usuario</label>
                            <input name="nome" class="form-control" placeholder="João Paulo Barnabé da Silva" required="true">
                        </div>

                        <div class="form-group">
                            <label>Login</label>
                            <input name="login" class="form-control" placeholder="joao.silva" required="true">
                        </div>

                        <div class="form-group">
                            <label>Senha</label>
                            <input id="senha" name="senha" class="form-control" type="password" placeholder="sua senha" required="true">
                        </div>

                        <div class="form-group">
                            <label>Confirmação de Senha</label>
                            <input id="confirmacaoDeSenha"  name="confirmacaoDeSenha" class="form-control" type="password" placeholder="confirmação de senha" required="true">
                            <span id="senhaErrada" style="color: red;">As senhas não conferem!</span>
                            <span id="senhaCorreta" style="color: green;">Esta tudo certo, as senhas são iguais!</span>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <button type="reset" class="btn btn-default">Resetar</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</div>