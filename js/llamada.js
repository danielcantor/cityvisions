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
    $('#activar').click(function(){
        if(horario == 1){
            var hora = $('#hora1').val();
            var minuto = $('#min1').val();
            var segundo = $('#seg1').val();
            var zona = $('#hor1').val();
            var duracion = $('#tim1').val();
            $.ajax({
                type: 'post',
                url: 'inc/automatico.php',
                data: {
                    'hora': hora,
                    'minuto': minuto,
                    'segundo': segundo,
                    'zona': zona,
                    'duracion': duracion
                },
                success: function (w) {
                    $('#resp-down').removeClass('d-none');
                    $("#respuesta").html(w);
                    setTimeout(function(){
                        $('#respuesta').alert('close');
                    }, 6000);
                }
            });
            if (horario == 2) {
                var hora2 = $('#hora2').val();
                var minuto2 = $('#min2').val();
                var segundo2 = $('#seg2').val();
                var zona2 = $('#tim2').val();
                var duracion2 = $('#ciclo2').val();
                $.ajax({
                    type: 'post',
                    url: 'inc/automatico.php',
                    data: {
                        'horario': horario,
                        'hora': hora,
                        'minuto': minuto,
                        'segundo': segundo,
                        'zona': zona,
                        'duracion': duracion,
                        'hora2': hora2,
                        'minuto2': minuto2,
                        'segundo2': segundo2,
                        'zona2': zona2,
                        'duracion2': duracion2
                    }, success: function (w) {
                        $('#resp-down').removeClass('d-none');
                        $("#respuesta").html(w);
                        setTimeout(function () {
                            $('#respuesta').alert('close');
                        }, 6000);
                    }
                });
                if (horario == 3) {
                    var hora3 = $('#hora3').val();
                    var minuto3 = $('#min3').val();
                    var segundo3 = $('#seg3').val();
                    var zona3 = $('#tim3').val();
                    var duracion3 = $('#ciclo3').val();
                    $.ajax({
                        type: 'post',
                        url: 'inc/automatico.php',
                        data: {
                            'hora': hora,
                            'minuto': minuto,
                            'segundo': segundo,
                            'zona': zona,
                            'duracion': duracion,
                            'hora2': hora2,
                            'minuto2': minuto2,
                            'segundo2': segundo2,
                            'zona2': zona2,
                            'duracion2': duracion2,
                            'hora3': hora3,
                            'minuto3': minuto3,
                            'segundo3': segundo3,
                            'zona3': zona3,
                            'duracion3': duracion3
                        }, success: function (w) {
                            $('#resp-down').removeClass('d-none');
                            $("#respuesta").html(w);
                            setTimeout(function () {
                                $('#respuesta').alert('close');
                            }, 6000);
                        }
                    });
                }
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


