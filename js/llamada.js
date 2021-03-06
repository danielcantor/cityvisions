$('document').ready(function(){
    // reloj
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
    setTimeout(hora(), 60000);

    //apagar  valvulas
    function apagar_valvs() {
        $.ajax({
            type: 'post',
            url: 'inc/apagar_solo.php',
            data: {
                'apagar': 1
            }, success: function () {
                $.post("inc/reload.php", function (htmlexterno) {
                    $("#reload").html(htmlexterno);
                });
                $.post("inc/moda_rel.php", function (htmlexterno) {
                    $("#contenido").html(htmlexterno);
                });
            }
        });
    }     
    //countdown  
    function countdown() {
        $.post("inc/countdown.php", function (htmlexterno) {
            $("#countdown").html(htmlexterno);
            setTimeout(countdown(), 60000);
        });
    }
    setTimeout(countdown(), 60000);

    $("#timer").change(function(){
        if ($('#countdown').text() == $('#timer').text()) {
            var hora = $("#countdown").text();
            $.ajax({
                type: 'post',
                url: 'inc/countdown2.php',
                data:{
                    hora = hora
                },
                dataType: 'json',
                success: function (json) {
                    var tiempo = json.duracion * 60000;
                    console.log(tiempo/60000+" minutos");
                    setTimeout(apagar_valvs(), tiempo);
                    $.post("inc/reload.php", function (htmlexterno) {
                        $("#reload").html(htmlexterno);
                    });
                }
            });
        }
    });
    //bloqueo de forms
    $("#blocked1").find('input, textarea,select').prop('disabled', true);
    $("#blocked2").find('input, textarea,select').prop('disabled', true);
    $("#blocked3").find('input, textarea,select').prop('disabled', true);
    
    

    //desbloqueo de forms segun botones
    $('#contenido').on("click", "#editar1", function (event) {
        event.preventDefault();
        $("#blocked1").find('input, textarea,select').prop('disabled', false);
        $("#editar1").prop('disabled',true);
        $("#activar1").text("Aceptar horario");
    });

    $('#contenido').on("click", "#editar2", function (event) {
        event.preventDefault();
        $("#blocked2").find('input, textarea,select').prop('disabled', false);
        $("#editar2").prop('disabled', true);
        $("#activar2").text("Aceptar horario");
    });
    $('#contenido').on("click", "#editar3", function (event) {
        event.preventDefault();
        $("#blocked3").find('input, textarea,select').prop('disabled', false);
        $("#editar3").prop('disabled', true);
        $("#activar3").text("Aceptar horario");
    });

    // visualizacion modo automatico
    var horario= $('#horarios').val();
    $('#modulo-1').addClass('d-none');
    $('#horar1').fadeOut('fast');
    $('#horar1').addClass('hide');
    $('#horar2').fadeOut('fast');
    $('#horar3').fadeOut('fast');
    $('#horar2').addClass('hide');
    $('#horar3').addClass('hide');
    $('#horarios').change(function(){
        horario=$(this).val();
        if (horario == 0) {
            $("#activar1").prop("disabled",false);
            $("#activar2").prop("disabled",false);
            $("#activar3").prop("disabled",false);
            $('#modulo-1').addClass('d-none');
            $('#horar1').fadeOut('fast');
            $('#horar1').addClass('hide');
            $('#horar2').fadeOut('fast');
            $('#horar3').fadeOut('fast');
            $('#horar2').addClass('hide');
            $('#horar3').addClass('hide');
        }
        if(horario == 1){
            if ($("#activar1").prop("disabled") == true){
                $("#activar1").prop("disabled",false);
                $("#activar1").text("Activar Horario");
            }
            $('#modulo-1').removeClass('d-none');
            $('#horar1').fadeIn('fast');
            $('#horar1').removeClass('hide');
            $('#horar2').fadeOut('fast');
            $('#horar3').fadeOut('fast');
            $('#horar2').addClass('hide');
            $('#horar3').addClass('hide');
        }
        if(horario == 2){
            $("#activar1").prop("disabled", true);
            if ($("#activar2").prop("disabled") == true) {
                $("#activar2").prop("disabled", false);
                $("#activar2").text("Activar Horario");
            }
            if ($("#activar1").prop("disabled") == true) {
                $("#activar1").text("Use el boton del siguiente horario");
            }
            if ($('#horar3').hasClass('hide') == false){
                $('#horar3').fadeOut('fast');
                $('#horar3').addClass('hide');
            }else{
                $('#horar2').fadeIn('fast');
                $('#horar2').removeClass('hide');
            }
        }
        if(horario == 3){
            $("#activar1").prop("disabled", true);
            $("#activar2").prop("disabled", true);
            if ($("#activar2").prop("disabled") == true) {
                $("#activar2").text("Use el boton del siguiente horario");
            }
            if ($("#activar1").prop("disabled") == true) {
                $("#activar1").text("Use el boton del siguiente horario");
            }
            if ($('#horar2').hasClass('hide') == true){
                $('#horar2').fadeIn('fast');
                $('#horar2').removeClass('hide');
                $('#horar3').fadeIn('fast');
                $('#horar3').removeClass('hide');
            }else{
                $('#horar3').fadeIn('fast');
                $('#horar3').removeClass('hide');
            }            
        }
    });
    //graficas
    $('.valvula').click(function () {
        var id = $(this).attr('id');
        var data = $.ajax({
            type: "post",
            url: "inc/graficas.php",
            data: { 'sensor': 'sensor' + id },
            dataType: "json",
            success: function (data) {
                $('#sensor').text(id);
                $('.reload').attr('id', id);
                google.charts.load('current', { 'packages': ['corechart'] });
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    var datas = google.visualization.arrayToDataTable(data);
                    var options = {
                        curveType: 'function',
                        legend: { position: 'top' }
                    };

                    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
                    chart.draw(datas, options);
                }
            }
        });
    });
    //recarga de graficas
    $('.reload').click(function () {
        var id = $(this).attr('id');
        var data = $.ajax({
            type: "post",
            url: "inc/graficas.php",
            data: { 'sensor': 'sensor' + id },
            dataType: "json",
            success: function (data) {
                $('#sensor').text(id);
                google.charts.load('current', { 'packages': ['corechart'] });
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    var datas = google.visualization.arrayToDataTable(data);
                    var options = {
                        curveType: 'function',
                        legend: { position: 'top' }
                    };

                    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
                    chart.draw(datas, options);
                }
            }
        });
    });
    // modo programado
    $('#automo').click(function(){
        var zona1 = $("#zona1").attr('id');
        var zona2 = $("#zona2").attr('id');
        var zona3 = $("#zona3").attr('id');
        var zona4 = $("#zona4").attr('id');
        var zona5 = $("#zona5").attr('id');
        var zona6 = $("#zona6").attr('id');
        var array = [];
        $('.col-12 .zone *:checkbox').each(function () {
            if ($(this).prop('checked') == true) {
                var id = $(this).attr('id');
                var clase = $(this).attr('class');
                switch (clase) {
                    case 'uno':
                        array['zona_val1'] = id;
                        break;
                    case 'dos':
                        array['zona_val2'] = id;
                        break;
                    case 'tres':
                        array['zona_val3'] = id;
                        break;
                    case 'cuatro':
                        array['zona_val4'] = id;
                        break;
                    case 'cinco':
                        array['zona_val5'] = id;
                        break;
                    case 'seis':
                        array['zona_val6'] = id;
                        break;
                    case 'siete':
                        array['zona_val7'] = id;
                        break;
                    case 'ocho':
                        array['zona_val8'] = id;
                        break;
                    case 'nueve':
                        array['zona_val9'] = id;
                        break;
                    case 'diez':
                        array['zona_val10'] = id;
                        break;
                    case 'once':
                        array['zona_val11'] = id;
                        break;
                    case 'doce':
                        array['zona_val12'] = id;
                        break;
                    case 'trece':
                        array['zona_val13'] = id;
                        break;
                    case 'catorce':
                        array['zona_val14'] = id;
                        break;
                    case 'quince':
                        array['zona_val15'] = id;
                        break;
                    case 'dieciseis':
                        array['zona_val16'] = id;
                        break;
                }
                
               
            }
            
        });
        $.ajax({
            type: 'post',
            url: 'inc/programado.php',
            data: {
                'zona1' : zona1,
                'zona2': zona2,
                'zona3': zona3,
                'zona4': zona4,
                'zona5': zona5,
                'zona6': zona6,
                'zona_val1' : array['zona_val1'], 
                'zona_val2': array['zona_val2'],
                'zona_val3': array['zona_val3'],
                'zona_val4': array['zona_val4'],
                'zona_val5': array['zona_val5'],
                'zona_val6': array['zona_val6'],
                'zona_val7': array['zona_val7'],
                'zona_val8': array['zona_val8'],
                'zona_val9': array['zona_val9'],
                'zona_val10': array['zona_val10'],
                'zona_val11': array['zona_val11'],
                'zona_val12': array['zona_val12'],
                'zona_val13': array['zona_val13'],
                'zona_val14': array['zona_val14'],
                'zona_val15': array['zona_val15'],
                'zona_val16': array['zona_val16']
            },
            success: function (w) {
                $('#resp-down').removeClass('d-none');
                $.post("inc/modo.php", function (htmlexterno) {
                    $("#modo").html(htmlexterno);
                });
                $.post("inc/reload.php", function (htmlexterno) {
                    $("#reload").html(htmlexterno);
                });
                $.post("inc/menu.php", function (htmlexterno) {
                    $("#menu").html(htmlexterno);
                });
                $.post("inc/countdown.php", function (htmlexterno) {
                    $("#countdown").html(htmlexterno);
                });
                $("#respuesta").html(w);
                setTimeout(function () {
                    $('#respuesta').alert('close');
                }, 6000);
            }
        });
    });
    // modo automatico
    $('#contenido').on("click", "#activar1", function () {
            var hora = $('#hora1').val();
            var minuto = $('#min1').val();
            var segundo = $('#seg1').val();
            var zona = $('#hor1').val();
            var duracion = $('#ciclo1').val();
            $.ajax({
                type: 'post',
                url: 'inc/automatico.php',
                data: {
                    'horario': 1,
                    'hora': hora,
                    'minuto': minuto,
                    'segundo': segundo,
                    'zona': zona,
                    'duracion': duracion
                },
                success: function (w) {
                    $('#resp-down').removeClass('d-none'); 
                    $.post("inc/modo.php", function (htmlexterno) {
                        $("#modo").html(htmlexterno);
                    });
                    $.post("inc/countdown.php", function (htmlexterno) {
                        $("#countdown").html(htmlexterno);
                    });
                   
                    $.post("inc/menu.php", function (htmlexterno) {
                        $("#menu").html(htmlexterno);
                    });
                    $.post("inc/moda_rel.php", function (htmlexterno) {
                        $("#contenido").html(htmlexterno);
                        $("#blocked1").find('input, textarea,select').prop('disabled', true);
                        $("#blocked2").find('input, textarea,select').prop('disabled', true);
                        $("#blocked3").find('input, textarea,select').prop('disabled', true);
                    });
                    $("#respuesta").html(w);
                    setTimeout(function(){
                        $('#respuesta').alert('close');
                    }, 6000);
                }
            });
    });

    $('#contenido').on("click", "#activar2", function () {
        var hora = $('#hora1').val();
        var minuto = $('#min1').val();
        var segundo = $('#seg1').val();
        var zona = $('#hor1').val();
        var duracion = $('#ciclo1').val();
        var hora2 = $('#hora2').val();
        var minuto2 = $('#min2').val();
        var segundo2 = $('#seg2').val();
        var zona2 = $('#hor2').val();
        var duracion2 = $('#ciclo2').val();
        $.ajax({
            type: 'post',
            url: 'inc/automatico.php',
            data: {
                'horario': 2,
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
                $.post("inc/modo.php", function (htmlexterno) {
                    $("#modo").html(htmlexterno);
                });
               
                $.post("inc/menu.php", function (htmlexterno) {
                    $("#menu").html(htmlexterno);
                });
                $.post("inc/countdown.php", function (htmlexterno) {
                    $("#countdown").html(htmlexterno);
                });
                $.post("inc/moda_rel.php", function (htmlexterno) {
                    $("#contenido").html(htmlexterno);
                    $("#blocked1").find('input, textarea,select').prop('disabled', true);
                    $("#blocked2").find('input, textarea,select').prop('disabled', true);
                    $("#blocked3").find('input, textarea,select').prop('disabled', true);
                });
                $("#respuesta").html(w);
                setTimeout(function () {
                    $('#respuesta').alert('close');
                }, 6000);
            }
        });
    });
    $('#contenido').on("click", "#activar3", function () {
        var hora = $('#hora1').val();
        var minuto = $('#min1').val();
        var segundo = $('#seg1').val();
        var zona = $('#hor1').val();
        var duracion = $('#ciclo1').val();
        var hora2 = $('#hora2').val();
        var minuto2 = $('#min2').val();
        var segundo2 = $('#seg2').val();
        var zona2 = $('#hor2').val();
        var duracion2 = $('#ciclo2').val();
        var hora3 = $('#hora3').val();
        var minuto3 = $('#min3').val();
        var segundo3 = $('#seg3').val();
        var zona3 = $('#hor3').val();
        var duracion3 = $('#ciclo3').val();
        $.ajax({
            type: 'post',
            url: 'inc/automatico.php',
            data: {
                'horario': 3,
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
                $.post("inc/modo.php", function (htmlexterno) {
                    $("#modo").html(htmlexterno);
                });
                
                $.post("inc/menu.php", function (htmlexterno) {
                    $("#menu").html(htmlexterno);
                });
                $.post("inc/countdown.php", function (htmlexterno) {
                    $("#countdown").html(htmlexterno);
                });
                $.post("inc/moda_rel.php", function (htmlexterno) {
                    $("#contenido").html(htmlexterno);
                    $("#blocked1").find('input, textarea,select').prop('disabled', true);
                    $("#blocked2").find('input, textarea,select').prop('disabled', true);
                    $("#blocked3").find('input, textarea,select').prop('disabled', true);
                });
                $("#respuesta").html(w);
                setTimeout(function () {
                    $('#respuesta').alert('close');
                }, 6000);
            }
        });
    });
       
    //logica de checkbox en modo programado
    $('.col-12 .zone *:checkbox').click(function(){
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
    $('#menu').on("click","#manualv",function (event) {
        event.preventDefault();
        $.ajax({
            type: 'post',
            url: 'inc/manual.php',
            data: {
                'manual': 1
            }, success: function (w) {
                $('#resp-down').removeClass('d-none');
                $.post("inc/modo.php", function (htmlexterno) {
                    $("#modo").html(htmlexterno);
                });
                $.post("inc/menu.php", function (htmlexterno) {
                    $("#menu").html(htmlexterno);
                });
                $.post("inc/reload.php", function (htmlexterno) {
                    $("#reload").html(htmlexterno);
                });
                $("#respuesta").html(w);
                setTimeout(function () {
                    $('#respuesta').alert('close');
                }, 6000);
            }
    })
})
    $('#menu').on("click", "#autom", function (event) {
        event.preventDefault();
        
    })
    $('#activar_todo').click(function (event) {
        event.preventDefault();
        $.ajax({
            type: 'post',
            url: 'inc/activar_todo.php',
            data: {
                'manual': 1
            }, success: function (w) {
                $('#resp-down').removeClass('d-none');
                $.post("inc/modo.php", function (htmlexterno) {
                    $("#modo").html(htmlexterno);
                });
                $.post("inc/menu.php", function (htmlexterno) {
                    $("#menu").html(htmlexterno);
                });
                $.post("inc/reload.php", function (htmlexterno) {
                    $("#reload").html(htmlexterno);
                });
                $("#respuesta").html(w);
                setTimeout(function () {
                    $('#respuesta').alert('close');
                }, 6000);
            }
        })
    })

    $('#si').click(function (event) {
        event.preventDefault();
        $.ajax({
            type: 'post',
            url: 'inc/apagar.php',
            data: {
                'apagar': 1
            }, success: function (w) {
                $('#resp-down').removeClass('d-none');
                $.post("inc/modo.php", function (htmlexterno) {
                    $("#modo").html(htmlexterno);
                });
                $.post("inc/reload.php", function (htmlexterno) {
                    $("#reload").html(htmlexterno);
                });
                $.post("inc/menu.php", function (htmlexterno) {
                    $("#menu").html(htmlexterno);
                });
                $.post("inc/countdown.php", function (htmlexterno) {
                    $("#countdown").html(htmlexterno);
                });
                $.post("inc/moda_rel.php", function (htmlexterno) {
                    $("#contenido").html(htmlexterno);
                });
                $("#respuesta").html(w);
                setTimeout(function () {
                    $('#respuesta').alert('close');
                }, 6000);
            }
        })
    })
    //cambiar modo de activo/inactivo modo manual
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


