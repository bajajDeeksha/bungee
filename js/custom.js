$(document).ready(function() {

        $('.select-change').click(function(){ 
            $('#machine-status').val($(this).data('val')).trigger('change');
        })

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

        $("input[type=radio]").click(function () {
            $('#reason').css('display', ($(this).val() === 'error') ? 'block':'none');
        });

        $('[data-tooltip="tooltip"]').tooltip();
    }); 