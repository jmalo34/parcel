<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Parcel.php";

    $app = new Silex\Application();

    $app->get("/", function()
    {
        return
        "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <title>Parcel Price</title>
        </head>
        <body>
            <div class='container'>
                <h1>How much will it cost to ship this Parcel?</h1>
                <p>Complete all fields in the form below to calculate the cost to ship your Parcel.</p>
                <form action='price_parcel'>
                    <div class='form-group'>
                        <label for='height'>Height:</label>
                        <input id='height' name='height' class='form-control' type='number'>
                    </div>
                    <div class='form-group'>
                        <label for='length'>Length:</label>
                        <input id='length' name='length' class='form-control' type='number'>
                    </div>
                    <div class='form-group'>
                        <label for='width'>Width:</label>
                        <input id='width' name='width' class='form-control' type='number'>
                    </div>
                    <div class='form-group'>
                        <label for='weight'>Weight:</weight>
                        <input id='weight' name='weight' class='form-control' type='number'>
                    </div>
                    <button type='submit' class='btn-success'>Name That Price!</button>
                </form>
            </div>
        </body>
        </html>
        ";
    });

    $app->get("/price_parcel", function()
    {
        $my_parcel = new Parcel($_GET['height'], $_GET['length'], $_GET['width'], $_GET['weight']);
        $size = $my_parcel->volume();
        $ship_weight = $my_parcel->costToShip();

        return "<h3>A parcel with a volume of $size, will cost $ship_weight to ship.</h3>";

    });

    return $app;

 ?>
