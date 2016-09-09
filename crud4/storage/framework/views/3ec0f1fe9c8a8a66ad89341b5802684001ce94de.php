<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form action="<?php echo e(route('guardar')); ?>" method="POST">
                    Primer Nombre:<br>
                    <input type="text" name="firstname" value=""><br>
                    Contraseña:<br>
                    <input type="password" name="password" value=""><br>
                    <input type="submit" value="Ingresar"></input>
                    <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>"></input>
                </form>
            </div>
        </div>
    </body>
</html>
