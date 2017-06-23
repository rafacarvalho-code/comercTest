/**
 * Created by rafael on 23/06/17.
 */
$(document).ready(function() {
    /**
     * SCTRIPT PARA MOSTRAR A HORA
     */
    var $clock = $('#real-clock');
    setInterval(function () {
        $clock.html((new Date).toLocaleString().substr(11, 8));
    }, 1000);

    /**
     * SCRIPT PARA PREVISÃO DO TEMPO
     */
    $.simpleWeather({
        location: 'Sao Paulo, BR',
        woeid: '',
        unit: 'C',
        success: function(weather) {
            html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
            html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
            html += '<li class="currently">'+weather.currently+'</li>';
            html += '<li>'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</li></ul>';

            $("#weather").html(html);
        },
        error: function(error) {
            $("#weather").html('<p>'+error+'</p>');
        }
    });
});