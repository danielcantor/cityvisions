$('document').ready(function(){
    function hora(){
        $.ajax({
            type:'post',
            url:'inc/tiempo.php',
            success:function($hora){
                $('#timer').html($hora);
                setTimeout(hora(),60000);
            }
        });

    }
        setTimeout(hora(),60000);
    var horario= $('#horarios').val();
    if(horario == 1){
    $('#hor2').fadeOut('fast');
    $('#hor3').fadeOut('fast');
    $('#hor2').addClass('hide');
    $('#hor3').addClass('hide');
    }
    $('#horarios').change(function(){
        horario=$(this).val();
        if(horario == 1){
            $('#hor2').fadeOut('fast');
            $('#hor3').fadeOut('fast');
            $('#hor2').addClass('hide');
            $('#hor3').addClass('hide');
        }
        if(horario == 2){
            
            if($('#hor3').hasClass('hide') == false){
                $('#hor3').fadeOut('fast');
                $('#hor3').addClass('hide');
            }else{
                $('#hor2').fadeIn('fast');
                $('#hor2').removeClass('hide');
            }
        }
        if(horario == 3){
            if($('#hor2').hasClass('hide') == true){
                $('#hor2').fadeIn('fast');
                $('#hor2').removeClass('hide');
                $('#hor3').fadeIn('fast');
                $('#hor3').removeClass('hide');
            }else{
                $('#hor3').fadeIn('fast');
                $('#hor3').removeClass('hide');
            }            
        }
    });
    $('*:checkbox').click(function(){
        var check=$(this).attr('class');
        $('.' + check).prop("disabled", true);
        $(this).prop("disabled", false);
        $(this).on('change',function(){
            if ($(this).prop('checked') == true){
                $('.' + check).prop("disabled", true);
                $(this).prop("disabled", false);
            }else{
                
                $('.' + check).prop("disabled", false);
            }
        })
    });
    $("#reload").on("click",".manual-toggle", function () {
        var id = $(this).attr('id');
        var alt = $(this).children("img").attr("alt");
        $.ajax({
            type: 'post',
            url: 'inc/botones_manual.php',
            data: {
                'valv': id,
                'estado': alt
            },
            success: function (w) {
                
                $.post("inc/reload.php", function (htmlexterno) {
                    $("#reload").html(htmlexterno);
                });
            }
        });
    });
});


