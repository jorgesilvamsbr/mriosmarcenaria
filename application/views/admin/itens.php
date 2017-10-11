<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Itens Cadastrados</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Itens Cadastrados</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de veículos cadastrados</div>
                <div class="panel-body">
                    <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="modelo" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th data-field="id" data-sortable="true">Item ID</th>
                                <th data-field="marca"  data-sortable="true">Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($itens as $item) {
                                echo "<tr>";
                                    echo '<td><a href="'. base_url() .'index.php/itens/edita?idItem='. $item->id .'" class="pencil"><svg class="glyph stroked pencil" style="width: 15px; height: 10%;"><use xlink:href="#stroked-pencil"></use></svg></a></td>';
                                    echo '<td><a href="'. base_url() .'index.php/itens/excluir?idItem='. $item->id .'" class="trash"><svg class="glyph trash" style="width: 15px; height: 10%;"><use xlink:href="#stroked-trash"></use></svg></a></td>';
                                    echo "<td>" . $item->id . "</td>";
                                    echo "<td>" . $item->descricao . "</td>";
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