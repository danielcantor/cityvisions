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
        setTimeout(hora(),60000);
    // visualizacion modo automatico
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
    $('#autom').click(function(){
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
                $("#respuesta").html(w);
                setTimeout(function () {
                    $('#respuesta').alert('close');
                }, 6000);
            }
        });
    });
    // modo automatico
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
                    'horario': horario,
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
                    $("#respuesta").html(w);
                    setTimeout(function(){
                        $('#respuesta').alert('close');
                    }, 6000);
                }
            });
        }
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
                    $.post("inc/modo.php", function (htmlexterno) {
                        $("#modo").html(htmlexterno);
                    });
                    $("#respuesta").html(w);
                    setTimeout(function () {
                        $('#respuesta').alert('close');
                    }, 6000);
                }
            });
        }
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
                    $.post("inc/modo.php", function (htmlexterno) {
                        $("#modo").html(htmlexterno);
                    });
                    $("#respuesta").html(w);
                    setTimeout(function () {
                        $('#respuesta').alert('close');
                    }, 6000);
                }
            });
        }

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
    //cambio de activo/inactivo modo manual
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


