<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600i,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!--Bootstrap CSS-->
    <title>Proyecto Final</title>
</head>
<style type="text/css">
    body {
        font-family: 'Mansalva', cursive;
        background-color: #FFFAF9;
    }

    .navbar {
        background: white;
        box-shadow: 0 2px 44px 0 rgb(80, 35, 100);
        min-width: 100px;
    }

    .nav-link {
        color: black;
    }

        .nav-link:hover {
            color: black;
        }

    #central {
        padding-top: 140px;
        height: 900px;
    }

    #boton {
        position: absolute;
        left: 45%;
        text-align: center;
    }

    #titulo {
        font-family: 'Lobster', cursive;
        font-weight: bold;
        position: absolute;
        left: 40%;
        font-size: 200%;
        color: #0B1739;
    }

    .contenido-centrado {
        max-width: 800px;
        margin: 0 auto 80px auto;
        text-align: center;
        color: black;
    }

    h2 {
        font-style: oblique;
        color: #E15616;
    }

    #cuadro1 {
        position: absolute;
        left: 30%;
        top: 1110px;
    }

    #cuadro2 {
        position: absolute;
        left: 45%;
        top: 1110px;
    }

    #cuadro3 {
        position: absolute;
        left: 60%;
        top: 1110px;
    }
    #cuadro4 {
        position: absolute;
        top: 1110px;
    }
    #cuadro5 {
        position: absolute;
        left: 75%;
        top: 1110px;
    }
</style>
<body>
    <div class="container">
        <nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="https://w0.pngwave.com/png/843/20/super-mario-world-super-mario-bros-new-super-mario-bros-8-bit-png-clip-art.png" width="50" height="50">  </a>
            <a class="navbar-brand" href="#"><img src="https://img.favpng.com/12/7/20/the-legend-of-zelda-nintendo-8-bit-link-amiibo-zelda-ii-the-adventure-of-link-png-favpng-avPhrcGAsp2qHrEpjg6E3eNks.jpg" width="50" height="50">  </a>
            <a class="navbar-brand" href="#"><img src="https://www.pngfind.com/pngs/m/45-452345_donkey-kong-8-bit-donkey-kong-png-transparent.png" width="50" height="50">  </a>
            <a class="navbar-brand" href="#"><img src="https://w7.pngwing.com/pngs/628/913/png-transparent-pixelated-sonic-the-hedgehog-sonic-the-hedgehog-sonic-knuckles-sonic-dash-sonic-forces-8-bit-game-video-game-line.png" width="50" height="50">  </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <h1 id="titulo">¡Proyecto Final!</h1>
                    <form method="post" action="{{url('cliente')}}">
                    </form>
                    <li class="nav-item">
                        <a class="nav-link " href="http://localhost:8000/" id="registrar">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/empleado" id="beneficios">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="http://localhost:8000/empleos" id="contactenos">Empleos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body>
    <h1>¿Seguro que quieres borrar este registro?</h1>
    <form method ="POST" action="{{url('/eliminarEmpleos/' .$empleo->id_empleo.'')}}">
        <button type ="submit" class="btn btn-danger">Si</button>
    </form>
</body>
</html>