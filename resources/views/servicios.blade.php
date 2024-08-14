<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
<body  style="background-color:#2f0cda;">
    
    <div class="menu">
        <img src="imagenes/hilo.png" width="75" height="75">
        <a href="http://127.0.0.1:8000">Inicio</a>
        <a href="http://127.0.0.1:8000/nosotros">Nosotros</a>
        <a href="http://127.0.0.1:8000/servicios">Servicios</a>
        <a href="http://127.0.0.1:8000/noticias">Noticias</a>
        <a href="http://127.0.0.1:8000/contactos">Contactos</a>
    </div>
    <br><br>


    <h2 class="letra">Lo Que Ofrecemos para los Fans de Spiderman</h2>
    <p class="letra">En alejospider, estamos dedicados a ofrecer una variedad de servicios diseñados para enriquecer la experiencia de los fans de Spiderman. Desde recursos educativos hasta eventos exclusivos, nuestros servicios están diseñados para que disfrutes al máximo del universo arácnido.</p><br>

    <h2 class="letra"> Análisis y Reseñas de Cómics</h2>
    <p class="letra">Explora nuestro análisis detallado y reseñas de los cómics de Spiderman. Nuestro equipo de expertos revisa cada historia, desde las ediciones clásicas hasta los números más recientes, proporcionando perspectivas y detalles que te ayudarán a profundizar en el mundo de Spiderman.</p><br>

    <h2 class="letra"> Noticias y Actualizaciones</h2>
    <p class="letra">Mantente al día con las últimas noticias sobre Spiderman, incluyendo lanzamientos de nuevos cómics, actualizaciones de películas y series, y cualquier novedad importante en el universo de Spiderman. Nuestro equipo está siempre al tanto de las últimas tendencias y eventos.</p>

    <div style="display: flex; justify-content: space-between; width: 100%; padding: 20px;">
        <video src="videos/spi.MOV" width="400" height="400" controls style="object-fit: cover;"></video>
        <video src="videos/spi1.MOV" width="400" height="400" controls style="object-fit: cover;"></video>
        <video src="videos/spi2.MOV" width="400" height="400" controls style="object-fit: cover;"></video>
    </div>
    

</body>
</html>