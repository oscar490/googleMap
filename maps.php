<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Maps</title>
    </head>
    <style>
        iframe {
            position: absolute;
            top: 100px;
            left: 100px;
        }

    </style>
    <body>
        <?php

        const API = "AIzaSyBoqqgNmpPWrLJg3VzBT3NAVCzJ_wwNNvE";
            $ciudad = trim(filter_input(INPUT_GET, 'ciudad'));

            if ($ciudad === '') {
                $url = 'bienvenida.html';
            }

            else {
                $url = "https://www.google.com/maps/embed/v1/search?key=" . API .
                "&q=" . $ciudad . "&maptype=satellite";

            }
            var_dump($ciudad);
            var_dump($url);


        ?>
        <form class=""   method="get">
            Ciudad <input type="text" name='ciudad' value="<?= $ciudad ?>">
            <input type="submit" value="Buscar">
        </form>


        <iframe
  width="600"
  height="450"
  frameborder="0" style="border:0"
  src="<?= $url ?>" allowfullscreen>
</iframe>


    </body>
</html>
