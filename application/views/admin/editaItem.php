<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Editar</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Editar Veículo - <?php echo $veiculoSelecionado->modelo;?></h1>
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
                    <div class="col-md-8">
                        <?php echo form_open_multipart(base_url() . 'index.php/cadastro/editarVeiculo?idVeiculo=' . $veiculoSelecionado->id); ?>

                        <div class="form-group">
                            <label>Marca do Carro</label>
                            <select name="marca" class="form-control">
                                <?php
                                $marcaSelecionada = '';
                                foreach ($marcas as $marca) {
                                    if($veiculoSelecionado->id_da_marca === $marca->id){
                                        echo  '<option selected="selected" value="' . $marca->id . '">' . $marca->nome . '</option>';
                                        $marcaSelecionada = $marca->nome;
                                    }else{
                                        echo  '<option value="' . $marca->id . '">' . $marca->nome . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Modelo do Carro</label>
                            <input name="modelo" class="form-control" placeholder="Palio Attractive 1.4" value="<?php echo $veiculoSelecionado->modelo;?>">
                        </div>

                        <div class="form-group">
                            <label>Valor atual</label>
                            <input name="valor" class="form-control monetario" placeholder="R$ 35.000,00" value="<?php echo $veiculoSelecionado->valor; ?>">
                        </div>

                        <div class="form-group">
                            <label>Valor com isenção</label>
                            <input name="valor_com_isencao" class="form-control monetario" placeholder="R$ 25.000,00" value="<?php echo $veiculoSelecionado->valor_com_isencao; ?>">
                        </div>

                        <div class="form-group">
                            <label>Descrição do Carro</label>
                            <textarea name="descricao" class="form-control" rows="5" placeholder="Kit dualogic plus, Volantes com alavancas de seleção das marchas tipo borboleta, Computadr de bordo...etc"><?php echo $veiculoSelecionado->descricao; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Foto do Carro</label>
                            <input name="arquivo" type="file" onchange="previaDoArquivo();">
                            <br>    
                            <img src="<?php echo base_url() . 'img/portfolio/' . $marcaSelecionada .  '/' . $veiculoSelecionado->nome_da_imagem;  ?>" height="200">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="reset" class="btn btn-default">Resetar</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</div>