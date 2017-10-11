<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Usuários Cadastrados</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Usuários Cadastrados</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de usuários cadastrados</div>
                <div class="panel-body">
                    <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="modelo" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th data-field="id" data-sortable="true">Usuário ID</th>
                                <th data-field="marca"  data-sortable="true">Nome</th>
                                <th data-field="modelo"  data-sortable="true">Login</th>
                                <th data-field="preco" data-sortable="true">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($usuarios as $usuario) {
                                echo "<tr>";
                                echo '<td><a href="'. base_url() .'index.php/usuarios/edita?idUsuario='. $usuario->id .'" class="pencil"><svg class="glyph stroked pencil" style="width: 15px; height: 10%;"><use xlink:href="#stroked-pencil"></use></svg></a></td>';
                                echo '<td><a href="'. base_url() .'index.php/usuarios/excluir?idUsuario='. $usuario->id .'" class="trash"><svg class="glyph trash" style="width: 15px; height: 10%;"><use xlink:href="#stroked-trash"></use></svg></a></td>';
                                echo "<td>" . $usuario->id . "</td>";
                                echo "<td>" . $usuario->nome . "</td>";
                                echo "<td>" . $usuario->login . "</td>";
                                echo "<td>" . ($usuario->status > 0 ? "ATIVO" : "INATIVO") . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->	
</div>