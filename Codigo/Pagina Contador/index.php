<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Índigo Labs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Propiedades meta para la visualización de lapágina en Facebook -->
    <meta property="og:title" content="Índigo Labs"/>
	<meta property="og:image" content="http://indigolabs.desarrollos-web.com.mx/images/comingsoon2.jpg"/>
	<meta property="og:site_name" content="Indigo Labs en construcción...."/>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Próximamente <br><small>Estaremos complacidos que nos visites en <font color="#9683ec">Índigo Labs</font>.
        Estamos construyendo páginas web con gran entusiasmo. Visítanos pronto...
    </small></h1>
</div>

<!-- Coming Soon - START -->

<style>
.bgcontainer{
    color: white;
}


.bgcontainer {
    
    background: url(images/comingsoon2.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    padding-bottom:100px;
}
</style>

<div class="bgcontainer col-xs-12 col-md-12" style="margin-top: 10px;">
    <div class="col-md-12 text-center">
        <h1>Sitio Web en construcción</h1>
        <br />
    </div>
    <div class="col-md-12 text-center">
        <h2>Este sitio estará disponible en:</h2>
        <br />
    </div>
    <div class="col-md-2 hidden-xs"></div>
    <div class="col-md-2 col-sm-6 col-xs-9 text-center">
        <div id="progress_days" style="background-color: transparent;" class="prg"></div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-9 text-center">
        <div id="progress_hours" style="background-color: transparent;" class="prg"></div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-9 text-center">
        <div id="progress_mins" style="background-color: transparent;" class="prg"></div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-9 text-center">
        <div id="progress_secs" style="background-color: transparent;" class="prg"></div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 text-center text-center v-center">
            <h1>Regístrate</h1>
            <p class="lead">Registra tu correo para que te informemos cuando esté lista</p>
            <br />
            <form class="col-md-6 col-md-offset-3">
                <div class="input-group">
                    <input class="form-control input-lg" placeholder="Registra tu correo aquí" type="text" />
                    <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="button">OK</button></span>
                </div>
            </form>
        </div>
    </div>
    <br />
    <br />
    <div class="text-center">
        <h1>Síguenos en:</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center v-center" style="color:#9683ec; font-size: 39pt;">
            <a href="#"><span class="avatar"><i class="fa fa-google-plus"></i></span></a>
            <a href="https://twitter.com/IndigoUnam?lang=es"><span class="avatar"><i class="fa fa-twitter"></a>
            <a href="mx.linkedin.com/in/IndigoLabsUNAM"><span class="avatar"><i class="fa fa-linkedin"></i></span></a>
            <a href="https://www.facebook.com/LabsIndigoUNAM"><span class="avatar"><i class="fa fa-facebook"></i></span></a>
            <a href="https://github.com/Leor8a/Ventanita"><span class="avatar"><i class="fa fa-github"></i></span></a>
        </div>       
    </div>
</div>

<link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css" />

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/shieldui-all.min.css" />
<link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
<script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script type="text/javascript">
    jQuery(function ($) {
        // the date of the release - for example the below will set the release date to 
        // 1st of March (month is 0-based), 2100 at noon 12:00 o'clock
        var release_date = new Date(2015, 5, 12, 7, 30, 60, 33);
		
        // format is: new Date(year, month, day, [hour, minute, second, millisecond]);
        // (note that the month is 0-based).

        // for showcase purpose, we set the release date to be 10 days from the current time
        //var release_date = new Date();
		
        //release_date.setDate(release_date.getDate() + 10);

        var release_unixtime_ms = release_date.getTime(),
            total_days = Math.floor((release_unixtime_ms - (new Date()).getTime()) / (24 * 60 * 60 * 1000)),
            update_timer = null,
            progress_days,
            progress_hours,
            progress_mins,
            progress_secs;

        // define a function to initialize the progressbars
        function init_progressbars() {
            // set the width and height of each progressbar to the width of their container
            $(".prg").each(function () {
                $(this)
                    .width($(this).parent().width())
                    .height($(this).parent().width());
            });

            // initialize the progressbar widgets
            progress_days = $("#progress_days").shieldProgressBar({
                min: 0,
                max: total_days,
                value: total_days,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 30,
                        borderWidth: 3,
                        color: "#9683ec",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:27px;color:white;">{0:n0} días</span> '
                },
                reversed: true
            }).swidget();

            progress_hours = $("#progress_hours").shieldProgressBar({
                min: 0,
                max: 24,
                value: 24,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 23,
                        borderWidth: 3,
                        color: "#9683ec",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:27px;color:white;">{0:n0} horas</span> '
                },
                reversed: true
            }).swidget();

            progress_mins = $("#progress_mins").shieldProgressBar({
                min: 0,
                max: 60,
                value: 60,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 15,
                        borderWidth: 3,
                        color: "#9683ec",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:27px;color:white;">{0:n0} min</span> '
                },
                reversed: true
            }).swidget();

            progress_secs = $("#progress_secs").shieldProgressBar({
                min: 0,
                max: 60,
                value: 60,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 10,
                        borderWidth: 3,
                        color: "#9683ec",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:27px;color:white;">{0:n0} seg</span> '
                },
                reversed: true
            }).swidget();

            // restart the update timer
            clearInterval(update_timer);
            update_timer = setInterval(update_progressbars, 300);
        }

        function update_progressbars() {
            var total_remaining_seconds = Math.floor((release_unixtime_ms - (new Date()).getTime()) / 1000),
                remaining_days = Math.floor(total_remaining_seconds / (24 * 60 * 60));

            total_remaining_seconds = total_remaining_seconds % (24 * 60 * 60);
            var remaining_hours = Math.floor(total_remaining_seconds / (60 * 60));

            total_remaining_seconds = total_remaining_seconds % (60 * 60);
            var remaining_mins = Math.floor(total_remaining_seconds / 60);
            var remaining_secs = total_remaining_seconds % 60;

            // update the progressbars if new values are different
            if (remaining_days != progress_days.value()) {
                progress_days.value(remaining_days);
            }
            if (remaining_hours != progress_hours.value()) {
                progress_hours.value(remaining_hours);
            }
            if (remaining_mins != progress_mins.value()) {
                progress_mins.value(remaining_mins);
            }
            if (remaining_secs != progress_secs.value()) {
                progress_secs.value(remaining_secs);
            }
        }

        // call this function whenever the window size changes
        $(window).on("resize", init_progressbars);

        // init the progressbars now
        init_progressbars();
    });
</script>
<!-- Coming Soon - END -->

</div>

</body>
</html>