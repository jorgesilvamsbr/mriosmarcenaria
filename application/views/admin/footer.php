
<script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/chart-data.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/easypiechart.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/easypiechart-data.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-table.js"></script>

<!-- MONEY_MASK -->
<script src="<?php echo base_url() ?>assets/admin/js/jquery.maskMoney.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/jquery.priceformat.min.js"></script>

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

    $('.monetario').maskMoney({
        prefix: 'R$ ',
        allowZero: true,
        thousands: '.',
        decimal: ',',
        affixesStay: true
    });

    $(document).ready(function () {
        $('#senhaErrada').hide();
        $('#senhaCorreta').hide();

        $('#confirmacaoDeSenha').bind('input propertychange', function () {
            valorDoCampoSenha = $('#senha').val();
            valorDoCampoConfirmacaoDeSenha = $('#confirmacaoDeSenha').val();
            if (valorDoCampoConfirmacaoDeSenha != '') {
                if (valorDoCampoSenha != valorDoCampoConfirmacaoDeSenha) {
                    $('#senhaErrada').show();
                    $('#senhaCorreta').hide();
                } else {
                    $('#senhaCorreta').show();
                    $('#senhaErrada').hide();
                }
            } else {
                $('#senhaErrada').hide();
                $('#senhaCorreta').hide();
            }
        })
    });

    $('#lista-do-sidebar li').on('click', function (e) {
        e.stopPropagation()
        $('#lista-do-sidebar').parents().removeClass('active');
        $(this).addClass('active');
    });

    $('#status').on('change', function () {
        if ($(this).is(':checked')) {
            $(this).val(1);
        } else {
            $(this).val(0);
        }
    })
</script>	
</body>

</html>