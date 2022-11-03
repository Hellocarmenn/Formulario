<!DOCTYPE html>
<head>
    <title>IMO</title>
    <meta name="viewport" content="width-device-width, initial-scale-1, user-scalable-no">
    <link rel="icon" type="imagen/x-icon" href="favicon.ico" />
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="animate.min.mss" />


    <style type="text/css">
        .form-control {
            margin-bottom: 20px;
        }
    </style>
</head>


<body style="background-color:rgb(232, 215, 217);">
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <div class="container">
        <form name="form1" action="datos1.php" method="post">
            <div class="panel">
                <div class="panel panel-heading" style="background-color:#5c5cb5; color:#d398cd">
                    <strong>Formulario</strong></div>
                <div clas="panel panel-body">

                    <div class="col-sm-4">

                        <label>Service</label>
                        <input type="text" name="service" class="form-control required">

                        <label>Passengers</label>
                        <input type="number" name="passenger" class="form-control required">

                    </div>
               

                    <div class="col-sm-8">
                        <label> Hotel</label>
                        <select name="hotel" class="form-control" >
                            <option value="Hotel 1">Hotel 1</option>
                            <option value="Hotel 2">Hotel 2</option>
                            <option value="Hotel 3">Hotel 3</option>
                            <option value="Hotel 4">Hotel 4</option>
                            <option value="Hotel 5">Hotel 5</option>
                        </select>
                    </div>

                    <div class="col-sm-4">
                        <label>Flight arrival date</label>
                        <input type="date" name="fad" class="form-control required">

                        <label>Flight arrival time</label>
                        <input type="time" name="fat" class="form-control required">
                    </div>

                    <div class="col-sm-4">
                        <label>Flight departure date</label>
                        <input type="date" name="fdd" class="form-control rquired">
                        <label>Flight departure time</label>
                        <input type="time" name="fdt" class="form-control required">
                    </div>

                    <div>
                        <div class="col-sn-12" align="center">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
</body>

</html>