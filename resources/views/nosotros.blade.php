<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .menu {
            display: flex;
            background-color: #f21717;
            overflow: hidden;
        }
        .menu a {
            flex: 1;
            padding: 14px 20px;
            text-align: center;
            text-decoration: none;
            color: white;
        }
        .menu a:hover {
            background-color: #ddd;
            color: black;
        }
        .letra{
            color: white;
        }
    </style>
</head>
<body style="background-color:#2f0cda;">
    <div class="menu">
        <img src="imagenes/hilo.png" width="75" height="75">
        <a href="http://127.0.0.1:8000">Inicio</a>
        <a href="http://127.0.0.1:8000/nosotros">Nosotros</a>
        <a href="http://127.0.0.1:8000/servicios">Servicios</a>
        <a href="http://127.0.0.1:8000/noticias">Noticias</a>
        <a href="http://127.0.0.1:8000/contactos">Contactos</a>
    </div><br>
    <h1 class="letra">Dedicados a Celebrar el Legado de Spiderman</h1>
    <p class="letra">En alejospider, somos un grupo apasionado de fans de Spiderman, comprometidos a compartir y celebrar la rica historia y legado de este icónico superhéroe. Desde sus humildes comienzos en los cómics hasta sus grandiosas apariciones en el cine y la televisión, nuestro objetivo es ofrecer un recurso completo y entretenido para todos los admiradores de Spiderman.</p>
    <div align='center'>
        <img src="imagenes/fan.jpg" height="350" width="350">
        </div><br>



        <div style="display: flex; justify-content: space-between; width: 100%; padding: 20px;">
            
            <div id="carouselExampleIndicators" class="carousel slide" style="width: 600px; height: 400px;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="width: 100%; height: 100%;">
                    <div class="carousel-item active">
                        <img src="imagenes/peter1.jpg" class="d-block w-100" style="height: 100%;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/peter2.jpg" class="d-block w-100" style="height: 100%;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/peter3.jpg" class="d-block w-100" style="height: 100%;" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        
          
            <div id="carouselExample" class="carousel slide" style="width: 600px; height: 400px;">
                <div class="carousel-inner" style="width: 100%; height: 100%;">
                    <div class="carousel-item active">
                        <img src="imagenes/peter9.jpg" class="d-block w-100" style="height: 100%;" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/peter7.jpg" class="d-block w-100" style="height: 100%;" alt="Peter">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/peter8.jpg" class="d-block w-100" style="height: 100%;" alt="Pan">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        
           
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="width: 600px; height: 400px;">
                <div class="carousel-inner" style="width: 100%; height: 100%;">
                    <div class="carousel-item active">
                        <img src="imagenes/peter6.jpg" class="d-block w-100" style="height: 100%; object-fit: cover;" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/peter4.jpg" class="d-block w-100" style="height: 100%; object-fit: cover;" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/peter5.jpg" class="d-block w-100" style="height: 100%; object-fit: cover;" alt="Image 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        
        <h2 class="letra">Nuestra mision</h2>
        <p class="letra">Nuestra misión es proporcionar un espacio donde los fans de Spiderman puedan aprender, compartir y conectarse. Queremos ofrecer contenido de alta calidad, desde artículos informativos y análisis detallados hasta las últimas noticias y rumores del universo de Spiderman. Nos esforzamos por mantenernos al día con todo lo relacionado con Spiderman, asegurándonos de que nuestros lectores tengan acceso a la información más precisa y actualizada.</p>
        <h2 class="letra">Nuestro equipo</h2>
        <p class="letra">Nuestro equipo está compuesto por expertos en cómics, críticos de cine, y entusiastas de la cultura pop que comparten un amor profundo por Spiderman. Cada miembro de nuestro equipo aporta su conocimiento y perspectiva únicos, contribuyendo a crear una comunidad vibrante y acogedora para todos los fans.</p>
</body>
</html>