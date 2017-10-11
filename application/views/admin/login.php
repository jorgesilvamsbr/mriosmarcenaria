<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IsentaCar - Admin</title>

        <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/css/datepicker3.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/css/styles.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div style="text-align: center;">
                        <img src="<?php echo base_url(); ?>assets/site/images/logo_grande.png" style="width: 110px;" />
                    </div>
                    <div class="panel-body">
                        <?php echo form_open(base_url() . 'index.php/login/logar'); ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Login" name="login" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="senha" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </fieldset>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->	



        <script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/chart.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/chart-data.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/easypiechart.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/easypiechart-data.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-datepicker.js"></script>
        <script>
            !function ($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function () {
                if ($(window).width() > 768)
                    $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function () {
                if ($(window).width() <= 767)
                    $('#sidebar-collapse').collapse('hide')
            })
        </script>	
    </body>

</html>
