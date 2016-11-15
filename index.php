<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IR Page</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">IR Page</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container theme-showcase" role="main" style="margin-top: 80px; ">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Power On/Off</h3>
        </div>
        <div class="panel-body">
            <div className="btn-group" role="group" aria-label="A/V Source">
                <a href="?input=on" role="button" class="btn btn-success">All</a>
                <a href="?input=vizio" role="button" class="btn btn-danger">Vizio</a>
                <a href="?input=onkyo" role="button" class="btn btn-danger">Onkyo</a>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Source</h3>
        </div>
        <div class="panel-body">
            <div className="btn-group" role="group" aria-label="A/V Source">
                <a href="?input=tivo" role="button" class="btn btn-primary">Tivo</a>
                <a href="?input=google" role="button" class="btn btn-primary">Google</a>
                <a href="?input=amazon" role="button" class="btn btn-primary">Amazon</a>
                <a href="?input=dvd" role="button" class="btn btn-primary">DVD</a>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Channels</h3>
        </div>
        <div class="panel-body">
            <div className="btn-group" role="group" aria-label="Tivo Commands">
                <a href="?channel=104" role="button" class="btn btn-primary">ABC</a>
                <a href="?channel=105" role="button" class="btn btn-primary">NBC</a>
                <a href="?channel=107" role="button" class="btn btn-primary">CBS</a>
                <a href="?channel=109" role="button" class="btn btn-primary">PBS</a>
                <a href="?channel=113" role="button" class="btn btn-primary">Fox</a>
                <a href="?channel=131" role="button" class="btn btn-primary">BBC</a>
                <a href="?channel=623" role="button" class="btn btn-success">ESPN</a>
                <a href="?channel=625" role="button" class="btn btn-success">Golf</a>
                <a href="?channel=628" role="button" class="btn btn-success">Pac12</a>
                <a href="?channel=675" role="button" class="btn btn-info">Food</a>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Tivo Commands</h3>
        </div>
        <div class="panel-body">
            <div className="btn-group" role="group" aria-label="Tivo Commands">
                <a href="?tivo=KEY_PAUSE" role="button" class="btn btn-primary">Play/Pause</a>
                <a href="?tivo=KEY_PLAY" role="button" class="btn btn-primary">Play</a>
                <a href="?tivo=KEY_SLOW" role="button" class="btn btn-primary">Slow</a>
                <a href="?tivo=TIVO" role="button" class="btn btn-primary">Tivo</a>
                <a href="?tivo=X_KEY_1_LIVE_TV" role="button" class="btn btn-primary">Live</a>
            </div>
        </div>
    </div>
    <br>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Troubleshooting</h3>
        </div>
        <div class="panel-body">
            <div className="btn-group" role="group" aria-label="Troubleshooting">
                <a href="?input=remotes" role="button" class="btn btn-primary">List Remotes</a>
                <a href="?input=mytivo" role="button" class="btn btn-primary">mytivo</a>
                <a href="?input=tivoglonew" role="button" class="btn btn-primary">tivoglonew</a>
                <a href="?input=myonkyo" role="button" class="btn btn-primary">myonkyo</a>
            </div>
        </div>
    </div>

    <div class="page-header">
        <h3>Output</h3>
    </div>
    <div class="well">
        <?php
        if ($_GET['input']) {
            switch ($_GET['input']) {
                case "on":
                    exec("echo on >> /tmp/php.log");
                    $output = shell_exec("irsend SEND_ONCE myonkyo KEY_POWER 2>&1");
                    $output = shell_exec("irsend SEND_ONCE vizio KEY_POWER 2>&1");
                    echo "$output";
                    break;
                case "vizio":
                    exec("echo off >> /tmp/php.log");
                    $output = shell_exec("irsend SEND_ONCE vizio KEY_POWER 2>&1");
                    echo "$output";
                    break;
                case "onkyo":
                    exec("echo off >> /tmp/php.log");
                    $output = shell_exec("irsend SEND_ONCE myonkyo KEY_POWER 2>&1");
                    echo "$output";
                    break;
                case "tivo":
                    exec("echo tivo >> /tmp/php.log");
                    $output = shell_exec("irsend SEND_ONCE myonkyo KEY_F3 2>&1");
                    echo "$output";
                    break;
                case "google":
                    exec("echo google >> /tmp/php.log");
                    $output = shell_exec("irsend SEND_ONCE myonkyo KEY_F4 2>&1");
                    break;
                case "amazon":
                    exec("echo amazon >> /tmp/php.log");
                    $output = shell_exec("irsend SEND_ONCE myonkyo KEY_F2 2>&1");
                    break;
                case "dvd":
                    exec("echo dvd >> /tmp/php.log");
                    $output = shell_exec("irsend SEND_ONCE myonkyo KEY_F1 2>&1");
                    break;
                case "pause":
                    exec("echo pause >> /tmp/php.log");
                    $output = shell_exec("irsend SEND_ONCE mytivo KEY_PAUSE 2>&1");
                    $output = shell_exec("irsend SEND_ONCE tivoglo KEY_PAUSE 2>&1");
                    echo "$output";
                    break;
                case "play":
                    exec("echo play >> /tmp/php.log");
                    $output = shell_exec("irsend SEND_ONCE tivoglo KEY_PLAY 2>&1");
                    echo "$output";
                    break;
                case "slow":
                    exec("echo slow >> /tmp/php.log");
                    $output = shell_exec("irsend SEND_ONCE tivoglo KEY_SLOW 2>&1");
                    echo "$output";
                    break;
                case "remotes":
                    exec("echo list >> /tmp/php.log");
                    $output = shell_exec('irsend LIST \'\' \'\' 2>&1');
                    echo "$output";
                    break;
                case "mytivo":
                    exec("echo mytivo >> /tmp/php.log");
                    $output = shell_exec('irsend LIST mytivo \'\' 2>&1');
                    echo "$output";
                    break;
                case "tivoglonew":
                    exec("echo mytivo >> /tmp/php.log");
                    $output = shell_exec('irsend LIST tivoglonew \'\' 2>&1');
                    echo "$output";
                    break;
                case "myonkyo":
                    exec("echo mytivo >> /tmp/php.log");
                    $output = shell_exec('irsend LIST myonkyo \'\' 2>&1');
                    echo "$output";
                    break; 
                case "start":
                    exec("echo start >> /tmp/php.log");
                    $output = shell_exec('sudo /etc/init.d/lircd start 2>&1');
                    echo "$output";
                    break;
                case "stop":
                    exec("echo stop >> /tmp/php.log");
                    $output = shell_exec('sudo /etc/init.d/lircd stop 2>&1');
                    echo "$output";
                    break;
                default:
                    exec("echo default >> /tmp/php.log");
                    echo "Command not found";
            }
        }
        if ($_GET['tivo']) {
           $key = $_GET['tivo'];
           $output = shell_exec("irsend SEND_ONCE tivoglo " . $key . " 2>&1");
           echo "$output";
        }
        if ($_GET['channel']) {
           $channel = str_split($_GET['channel']);
           foreach ($channel as $val) {
              switch($val) {
                 case "0":
                    $output = shell_exec("irsend SEND_ONCE tivoglo KEY_0 2>&1");
                    break;
                 case "1":
                    $output = shell_exec("irsend SEND_ONCE tivoglo KEY_1 2>&1");
                    break;
                 case "2":
                    $output = shell_exec("irsend SEND_ONCE tivoglo KEY_2 2>&1");
                    break;
                 case "3":
                    $output = shell_exec("irsend SEND_ONCE tivoglo KEY_3 2>&1");
                    break;
                 case "4":
                    $output = shell_exec("irsend SEND_ONCE tivoglo KEY_4 2>&1");
                    break;
                 case "5":
                    $output = shell_exec("irsend SEND_ONCE tivoglo KEY_5 2>&1");
                    break;
                 case "6":
                    $output = shell_exec("irsend SEND_ONCE tivoglo KEY_6 2>&1");
                    break;
                 case "7":
                    $output = shell_exec("irsend SEND_ONCE tivoglo KEY_7 2>&1");
                    break;
                 case "8":
                    $output = shell_exec("irsend SEND_ONCE tivoglo KEY_8 2>&1");
                    break;
                 case "9":
                    $output = shell_exec("irsend SEND_ONCE tivoglo KEY_9 2>&1");
                    break;
              }
              usleep(500000);
           }
        }
        ?>
    </div>

    <div class="page-header">
        <h3>Alerts</h3>
    </div>
    <div class="alert alert-info" role="alert">
        <strong>Sample Alert</strong> This alert needs your attention
    </div>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
 ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</body>
</html>
