<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Cadastro</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Cadastro de Item</h1>
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
                            echo '<div class="alert" style="background-color: #679b08;" role="alert">';
                            echo "<svg class='glyph stroked cancel'><use xlink:href='#stroked-cancel'></use></svg>" . $sucesso;
                            echo "</div>";
                        }
                        ?>
                    </div>
                    <div class="col-md-8">
                        <?php echo form_open_multipart(base_url() . 'index.php/cadastro/salvar'); ?>

                        <div class="form-group">
                            <label>Categoria do Item</label>
                            <select name="categoria" class="form-control">
                                <?php
                                foreach ($categorias as $categoria) {
                                    echo '<option value="' . $categoria->id . '">' . $categoria->nome . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Descrição do Item</label>
                            <textarea name="descricao" class="form-control" rows="5" placeholder="Cozinha realizada para cliente com madeira na cor grafite...etc"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Fotos do Item</label>
                            <input name="arquivos[]" type="file" onchange="previaDoArquivo();" multiple>
                            <br>
                            <div>
                                <ul id="preview-imagens" style="list-style: none;"/>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="reset" class="btn btn-default">Resetar</button>
                        <script>
                            function previaDoArquivo() {
                                var output = document.getElementById('preview-imagens');
                                var arquivos = document.querySelector('input[type=file]').files;

                                for (var i = 0; i < arquivos.length; i++) {
                                    var imagem = arquivos[i];
                                    if (!imagem.type.match('image'))
                                        continue;

                                    var leitorDeImagem = new FileReader();
                                    leitorDeImagem.addEventListener("load", function (event) {
                                        var leitorDeImagem = event.target;
                                        var li = document.createElement("li");
                                        li.innerHTML = "<img src='" + leitorDeImagem.result + "' height='200' />";
                                        output.insertBefore(li, null);
                                    });
                                    //Read the image
                                    leitorDeImagem.readAsDataURL(imagem);
                                }

                            }
                        </script>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</div>