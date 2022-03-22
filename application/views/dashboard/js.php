<script src="node_modules/socket.io/client-dist/socket.io.js"></script>
<script>
    $(document).ready(function() {
        aksiNotif();
    });
    var socket = io.connect('http://' + window.location.hostname + ':3000');
    socket.on('new_message', function(data) {
        console.log(data);
        swal('Tes');
    });
</script>
<script>
    // Variable
    var base_url = window.location.origin + '/SMS_WA_Gateway/';
    // End Variable

    // Onload
    notification();
    // End Onload

    $('#lineChart').sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#177dff',
        fillColor: 'rgba(23, 125, 255, 0.14)'
    });

    $('#lineChart2').sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#f3545d',
        fillColor: 'rgba(243, 84, 93, .14)'
    });

    $('#lineChart3').sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#ffa534',
        fillColor: 'rgba(255, 165, 52, .14)'
    });

    $('.card-menu-box').hover(function() {
        $(this).attr('class', 'card card-primary');
        $(this).css('cursor', 'pointer');
    }, function() {
        $(this).attr('class', 'card card-menu-box');
    });
</script>

<!-- Function -->
<script>
    function aksiNotif() {
        $.ajax({
            url: base_url + 'api/v1/Inbox',
            dataType: "json",
            cache: false,
            crossDomain: true,
            xhrFields: {
                withCredentials: true,
            },
            // dataType: "JSON",
            beforeSend: function() {
                $('.notification-icon').attr('class', 'fas fa-circle-notch fa-spin notification-icon');
                $('.notification-number').html('');
            },
            complete: function() {
                $('.notification-icon').attr('class', 'fa fa-bell notification-icon');
                $('.notification-number').html('4');
            },
            success: function(data) {
                if (data.success == true) {
                    var socket = io.connect('http://' + window.location.hostname + ':3000');
                    socket.emit('new_message', {
                        message: data.message,
                        date: data.date,
                        msgcount: data.msgcount
                    });
                }
            },
            error: function(xhr, status, error) {
                alert(error);
            }
        });
    }
</script>